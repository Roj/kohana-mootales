<?php
class Controller_Login extends Controller_Website {
	public $errors;
	public function action_index()
	{
		if($this->logged_in)
		{
			$this->request->redirect("home");
		}
		$view = View::factory("login")
			->bind("errors",$this->errors);
		$this->response->body($view);
	}
	public function action_submit()
	{
		if($this->logged_in)
		{
			$this->request->redirect("home");
		}
		$model = Model::factory('user');
		$post = $_POST;
		$user_info = $model->get_user_info_by_username($post['username']);
		if(md5($post['password']) == $user_info->get('password'))
		{
			//success.
			$this->session->set("logged_in",true)
				->set("user_id",$user_info->get('id'))
				->set("username",$user_info->get('username'))
				->set("rank",$user_info->get('rank'))
				->set("last_seen",$user_info->get('date_last_seen'));
			//$model->update_lastseen($user_info->get('id')); //later
			//redirect
			$this->request->redirect("home");
		}
		$this->errors="The combination of user and password does not match.";
		$this->action_index();
	}
}
?>