<?php class Controller_User extends Controller_Website {	public function action_index()	{		//$this->request->redirect("home");	}	public function action_view()	{		$username = $this->request->param("username");		$user_model = Model::factory("user");		$blog_model = Model::factory("blog");		$frag_model = Model::factory("fragment");		$user = $user_model->get_user_info_by_username($username)->as_array();		$recent_blogs = $blog_model->get_user_recent($user[0]["id"]);		$recent_frags = $frag_model->get_user_recent($user[0]["id"]);		//update pageviews		$user_model->update_pageviews($user[0]['id'],$user[0]['count_pageviews']);		$user[0]['count_pageviews']++;				$view = View::factory("user/profile")			->set("user",$user[0])			->set("blogs",$recent_blogs)			->set("frags",$recent_frags);		$this->response->body($view);	}}?>