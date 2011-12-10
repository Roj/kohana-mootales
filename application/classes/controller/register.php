<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Website {
	public $Error;
	public function before()
	{
		parent::before();
		if($this->logged_in)
		{
			$this->request->redirect("home");
		}
	}
	public function action_index()
	{
		$View = View::factory("register")
			->set("app_name",$this->page_title)
			->bind("errors",$this->errors);
		
		$this->response->body($View);
	}
	public function action_submit()
	{
		$this->errors = '';
		$model = Model::factory("User");
		$post = $_POST;
		if($post == array()) 
		{
			$this->action_index();
			return false;
		}
		//Had some trouble with error parsing using Kohana's validation helper, so I'm gonna do it manually.
		if ( ! Valid::min_length($post['username'],4) OR
			! Valid::max_length($post['username'],30) OR
			! Valid::not_empty($post['username'])
		)
		{
			$this->errors.=" Username field must have between 4 and 30 characters.";
		}
		if ( ! $model->unique_username($post['username']))
		{
			$this->errors.=" Username already exists.";
		}
		if ( ! Valid::min_length($post['password'],6))
		{
			$this->errors.=" Password must have at least 6 characters.";
		}
		if ($post['password'] != $post['confirm'])
		{
			$this->errors.=" Passwords do not match.";
		}
		if ( ! Valid::email($post['email']))
		{
			$this->errors.=" That is not a valid email.";
		}
		if ($this->errors == '')
		{
			//Everything is okay. proceed to insert a new row on the users table.	
			$id = $model->create($post);
			$id = $id[0];
			$this->request->redirect("home");
			return true;
		}
		
		$this->action_index();
	}
}
