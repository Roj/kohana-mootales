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
		$this->form_values = ($this->form_values == NULL)
			? array("title"=>"","tags"=>"","content"=>"","fragment_content"=>"")
			: array_merge(array("title"=>"","tags"=>"","content"=>"","fragment_content"=>""),$this->form_values);
		$view = View::factory("dashboard")
			->bind("errors",$this->errors)
			->bind("form_values",$this->form_values);
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
		if ( ! Valid::max_length($post['fragment_content'],140))
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
		if ( !Valid::min_length($post['content'],140))
		{
			$this->errors.=" The blog's content has to be longer than 140 characters, you should use a fragment or a forum thread instead.";
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
}
?>