<?php
class Controller_Dashboard extends Controller_Website {
	public $message;
	public $errors;
	public $form_values;
	public function before() {
		parent::before();
		if( ! $this->logged_in)
		{
			$this->request->redirect("login");
			return 0;
		}
	}
	public function action_index()
	{
		$empty_values = array("title"=>"","tags"=>"","content"=>"","fragment_content"=>"","thread_content"=>"","thread_title"=>"");
		$this->form_values = ($this->form_values == NULL)
			? $empty_values
			: array_merge($empty_values,$this->form_values);
		$forum_model = Model::factory("forum");
		$frag_model = Model::factory("fragment");
		$user_model = Model::factory("user");
		
		$user_info = $user_model->get_user_info($this->session->get("user_id"))->as_array();
		$categories = $forum_model->get_categories();
		$pings = $frag_model->get_users_pings($this->session->get("user_id"));
		$users_data = array();  //here we'll store each user's info
		$fragments = array(); //here we'll store fragments in which the user was pinged
		foreach ($pings as $item) 
		{
			$fragments[$item['id']]=$frag_model->get_fragment($item['fragment_id'])->as_array();
			if(array_key_exists($item['author_id'],$users_data)) // Why query two times for the same user?
				continue;
			$users_data[$item['author_id']]=$user_model->get_username($item['author_id']);
		}
		
		$view = View::factory("dashboard")
			->set("user_info",$user_info[0])
			->set("errors",$this->errors)
			->set("message",$this->message)
			->set("form_values",$this->form_values)
			->set("categories",$categories)
			->set("pings",$pings)
			->set("users_data",$users_data)
			->set("fragments",$fragments);
		$this->response->body($view);
	}
	public function action_create_fragment()
	{
		$this->errors = '';
		$post = $_POST;
		if($post == array())
		{
			$this->request->redirect("dashboard");
			return;
		}
		if ( ! Valid::max_length($post['fragment_content'],140) OR
			! Valid::not_empty($post['fragment_content']))
		{
			$this->errors.="The fragment can contain up to 140 characters, including spaces. It can't be left empty.";
		}
		if ( $this->errors == '') // no errors
		{
			//submit fragment
			$user_model = Model::factory("user");
			$model = Model::factory("fragment");
			$fragment_id = $model->create($this->session->get("user_id"),$post['fragment_content']);
			//check for pings
			$pattern = "/@(\w+)/i";
			$matches = array();
			preg_match_all($pattern,$post['fragment_content'],$matches);
			$already_pinged = array(); // as not to ping the same user twice
			foreach ($matches[1] as $pinged_username)
			{
				//ping users
				$pinged_id = $user_model->get_user_id($pinged_username);
				if($pinged_id != 0 AND 
					$pinged_id != $this->session->get("user_id") AND
					! in_array($pinged_id,$already_pinged))
				{
					$model->add_ping(array(
						"pinged_id"=>$pinged_id,
						"author_id"=>$this->session->get("user_id"),
						"fragment_id"=>$fragment_id[0],
						"when"=> date("Y-m-d H:i:s")
					));
					$already_pinged[] = $pinged_id;
				}
			}
			$this->request->redirect("fragment/{$fragment_id[0]}");
			return;
		}
		$this->form_values = $post;
		$this->action_index();
	}
	public function action_create_blog()
	{
		//now, this should be easy. we have three user-set inputs to check: title, tags and content.
		$this->errors = '';
		$post = $_POST;
		if ($post == array())
		{
			$this->request->redirect("dashboard");
			return;
		}
		if ( ! Valid::min_length($post["title"],4) OR 
			! Valid::max_length($post['title'],100) OR 
			! Valid::not_empty($post['title']))
		{
			$this->errors.=" The title should be between 4 and 100 characters.";
		}
		if ( !Valid::max_length($post['tags'],100))
		{
			$this->errors.=" The tags can not accumulate more than 100 characters (including commas and spaces).";
		}
		if ( !Valid::min_length($post['content'],141))
		{
			$this->errors.=" The blog's content has to be longer than 140 characters, you should use a fragment instead.";
		}
		if($this->errors == '')
		{
			//Everything's okay. Proceed to create the blog
			$model = Model::factory("blog");
			$post['author_id'] = $this->session->get('user_id');
			$id = $model->create($post);
			$id = $id[0];
			$this->request->redirect("blog/{$id}");
			return 1;
		}
		//If we get to here, there has been at least one error. 
		//Show the form again with the error.
		$this->form_values = $post; //to not to lose the information.
		$this->action_index();
		
	}
	public function action_create_thread()
	{
		$this->errors = '';
		$post = $_POST;
		if ($post == array())
		{
			$this->request->redirect("dashboard");
			return;
		}
		if ( ! Valid::min_length($post['thread_title'],4) OR 
			! Valid::max_length($post['thread_title'],100) OR 
			! Valid::not_empty($post['thread_title']))
		{
			$this->errors.=" The title should be between 4 and 100 characters.";
		}
		if ( ! Valid::numeric($post['thread_category']))
		{
			$this->errors.=" The category is invalid.";
		}
		if ( ! Valid::min_length($post['thread_content'],10))
		{
			$this->errors.=" The thread content has to be longer than 10 characters, try to elaborate a bit more.";
		}
		if ($this->errors == '')
		{
			$model = Model::factory("forum");
			$info = array(
				'author_id' => $this->session->get("user_id"),
				'category_id' => intval($post['thread_category']),
				'title' => htmlentities($post['thread_title'],ENT_IGNORE,"UTF-8"),
				'content' => htmlentities($post['thread_content'],ENT_IGNORE,"UTF-8"),
				'time_posted' => date("Y-m-d H:i:s"),
				'last_active' => date("Y-m-d H:i:s")
			);
			$thread_id = $model->create_thread($info);
			$this->request->redirect("thread/{$thread_id[0]}");
			return;
		}
		
		$this->form_values = $post;
		$this->action_index();
	}
	public function action_manage()
	{
		$blog_model = Model::factory("blog");
		$blogs = $blog_model->get_from_user($this->session->get("user_id"));
		$view = View::factory("manage")
			->set("blogs",$blogs);
		$this->response->body($view);
	}
	public function check_edit_form(&$item,$form_view_name,$predef_values)
	{
		$form_view = View::factory($form_view_name);
		if(intval($item->get("id")) == 0) // i.e. the blog/thread does not exist
		{
			$this->errors=" That blog or thread does not exist.";
			$this->action_index();
			return 0;
		}
		if(intval($item->get("author_id")) != $this->session->get("user_id") AND
			intval($this->session->get("rank")) < 2)
		{
			//i.e. the user has no permission to do this
			$this->errors= " You can not edit this.";
			$this->action_index();
			return 0;
		}
		if($_POST == array())
		{
			//i.e.  the user hasn't done the edits yet
			$form_view->set("item",$item)
				->set("values",$predef_values);
			$this->response->body($form_view);
			return 0;
		}
		//start checking if all fields are OK 
		if( ! Valid::not_empty($_POST['title']) OR 
			! Valid::min_length($_POST['title'],4) OR 
			! Valid::max_length($_POST['title'],100))
		{
			$this->errors.=" The title has to be between 4 and 100 characters, and it can not be left blank.";
		}
		$min_content_length = ($form_view_name == 'forum/thread/edit')? 10:140;
		if( ! Valid::not_empty($_POST['content']) OR 
			! Valid::min_length($_POST['content'],$min_content_length))
		{
			$this->errors.="The content has to be over {$min_content_length} characters. You should use a fragment instead.";
		}
		if($this->errors != "")
		{
			$form_view->set("item",$item)
				->set("values",$predef_values)
				->set("errors",$this->errors);
			$this->response->body($form_view);
			
			return 0;
		}
		return 1;
	}
	public function action_edit_blog()
	{
		$id= intval($this->request->param("id"));
		$blog_model = Model::factory("blog");
		$blog = $blog_model->get_blog($id);
		$predef_values = array_merge(array("title"=>$blog->get("title"),"tags"=>$blog->get("tags"),"content"=>$blog->get("content")),$_POST);
		if ( ! $this->check_edit_form($blog,"blog/edit",$predef_values))
		{
			return 0;
		}
		//end error checking. submit edits.		
		$info = array(
			"id"=>$id,
			"title"=>htmlentities($_POST['title'],ENT_IGNORE,"UTF-8"),
			"tags"=>htmlentities($_POST['tags'],ENT_IGNORE,"UTF-8"),
			"content"=>htmlentities($_POST['content'],ENT_IGNORE,"UTF-8")
		);
		$blog_model->edit_blog($info);
		$this->request->redirect("blog/".$id);
	}
	public function action_edit_thread()
	{
		$id = intval($this->request->param("id"));
		$forum_model = Model::factory("forum");
		$thread = $forum_model->get_thread($id);
		$predef_values = array_merge(array("title"=>$thread->get("title"),"tags"=>$thread->get("tags"),"content"=>$thread->get("content")),$_POST);
		if ( ! $this->check_edit_form($thread,"forum/thread/edit",$predef_values))
		{
			return 0;
		}
		$info = array(
			"id"=>$id,
			"title"=>htmlentities($_POST['title'],ENT_IGNORE,"UTF-8"),
			"content"=>htmlentities($_POST['content'],ENT_IGNORE,"UTF-8")
		);
		$forum_model->edit_thread($info);
		$this->request->redirect("thread/".$id);
	}
	public function action_delete_blog()
	{
		// This function actually handles two pages.
		// The first one asks the user if (s)he does want to delete the blog,
		// and also prevents some hacking by implementing POST to confirm
		// if the request is valid.
		// The second one actually deletes the blog.
		$id = $this->request->param("id");
		$blog_model = Model::factory("blog");
		$blog = $blog_model->get_blog($id);
		if (intval($blog->get("id")) == 0)
		{
			$this->errors=" That blog does not exist.";
			$this->action_index();
			return 0;
		}
		if (intval($blog->get("author_id")) != $this->session->get("user_id") AND 
			$this->session->get("rank") < 2)
		{
			//The user is neither the author of the blog or a moderator
			$this->errors = " You can not delete this blog.";
			$this->action_index();
			return 0;
		}
		if ($_POST == array() OR 
			intval($_POST['confirm']) != 1) // has the user gone through the confirm page?
		{
			$view = View::factory("blog/confirm_delete")
				->set("blog",$blog);
			$this->response->body($view);
			return 0;
		}
		
		$blog_model->delete_blog($id,$blog->get("author_id"));
		$this->action_manage();
	}
	public function action_delete_thread()
	{
		// This function actually handles two pages.
		// The first one asks the user if (s)he does want to delete the thread,
		// and also prevents some hacking by implementing POST to confirm
		// if the request is valid.
		// The second one actually deletes the thread.
		$id = $this->request->param("id");
		$forum_model = Model::factory("forum");
		$thread = $forum_model->get_thread($id);
		if ( ! intval($thread->get("id")))
		{
			$this->errors=" That blog does not exist.";
			$this->action_index();
			return 0;
		}
		if (intval($thread->get("author_id")) != $this->session->get("user_id") AND 
			$this->session->get("rank") < 2)
		{
			//The user is neither the author of the blog or a moderator
			$this->errors = " You can not delete this blog.";
			$this->action_index();
			return 0;
		}
		if ($_POST == array() OR 
			intval($_POST['confirm']) != 1) // has the user gone through the confirm page?
		{
			$view = View::factory("forum/thread/confirm_delete")
				->set("thread",$thread);
			$this->response->body($view);
			return 0;
		}
		$forum_model->delete_thread($id);
		$this->action_manage();
	}
	public function action_edit_info() 
	{
		$post = $_POST;
		if ($post == array())
		{
			$this->request->redirect("dashboard");
			return 0;
		}
		$user_id = $this->session->get("user_id");
		$user_model = Model::factory("user");
		$user_model->edit_personal_info(array(
			'name'=>htmlentities(@$post['name']),
			'avatar'=>htmlentities(@$post['avatar']),
			'age'=>htmlentities(@$post['age']),
			'country'=>htmlentities(@$post['country']),
			'gender'=>htmlentities(@$post['gender'])
		),$user_id);
		$this->message = "Successfully edited your personal information.";
		$this->action_index();
		return 1;
	}
	public function action_delete_ping()
	{
		$post = $_POST;
		if($post == array() OR 
			intval($post['ping_id']) == 0) 
		{
			$this->errors="There is no ping to delete.";
			$this->action_index();
			return 0;
		} else {
			$fragment_model = Model::factory("fragment");
			$fragment_model->delete_ping($post['ping_id']);
			$this->message="Successfully deleted that ping.";
			$this->action_index();
			return 1;
		}
	}
}
?>