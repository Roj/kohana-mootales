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
				'title' => htmlentities($post['thread_title']),
				'content' => htmlentities($post['thread_content']),
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
}
?>