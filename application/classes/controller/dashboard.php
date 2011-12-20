<?php
class Controller_Dashboard extends Controller_Website {
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
		$categories = $forum_model->get_categories();
		$view = View::factory("dashboard")
			->set("errors",$this->errors)
			->set("form_values",$this->form_values)
			->set("categories",$categories);
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
		if ( $this->errors == '')
		{
			$model = Model::factory("fragment");
			$model->create($this->session->get("user_id"),$post['fragment_content']);
			$this->request->redirect("user/".$this->session->get("username"));
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
		if ( ! Valid::min_length($post['thread_content'],141))
		{
			$this->errors.=" The thread content has to be longer than 140 characters, you should use a fragment instead.";
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
		if( ! Valid::not_empty($_POST['content']) OR 
			! Valid::min_length($_POST['content'],141))
		{
			$this->errors.="The content has to be over 140 characters. You should use a fragment instead.";
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
		if ( ! $this->check_edit_form($blog,"edit_blog",$predef_values))
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
		if ( ! $this->check_edit_form($thread,"edit_thread",$predef_values))
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
		if ($_POST == array() OR 
			intval($_POST['confirm']) != 1) // has the user gone through the confirm page?
		{
			$view = View::factory("confirm_blog_delete")
				->set("blog",$blog);
			$this->response->body($view);
			return 0;
		}
		if (intval($blog->get("id")) == 0)
		{
			$this->errors=" That blog does not exist.";
			$this->action_index();
			return 0;
		}
		if (intval($blog->get("author_id")) != $this->session->get("user_id") AND 
			$this->session->get("author_id") < 2)
		{
			//The user is neither the author of the blog or a moderator
			$this->errors = " You can not delete this blog.";
			$this->action_index();
			return 0;
		}
		$blog_model->delete_blog($id,$blog->get("author_id"));
		$this->action_manage();
	}
}
?>