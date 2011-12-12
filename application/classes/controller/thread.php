<?php 
class Controller_Thread extends Controller_Website {
	public function action_view() 
	{
		
		$forum_model = Model::factory("forum");
		$user_model = Model::factory("user");
		$id = intval($this->request->param("id"));
		$thread = $forum_model->get_thread($id);
		$user = $user_model->get_user_info($thread->get("author_id"));
		$comments = $forum_model->get_comments($id);
		
		//now we'll go comment through comment querying for each user's information
		$users_data = array();  //here we'll store each user's info
		foreach ($comments as $comment) 
		{
			if(array_key_exists($comment['author_id'],$users_data))
				continue;
			$users_data[$comment['author_id']]=$user_model->get_user_info(intval($comment['author_id']));
			
		}
		$view = View::factory("thread")
			->set("thread", $thread)
			->set("user", $user)
			->set("comments",$comments)
			->set("users_data",$users_data)
			->set("show_comment_form",$this->session->get("logged_in"));
		//echo var_dump($thread->get("content")); 
		$this->response->body($view);
	}
	public function action_comment()
	{
		if ( ! $this->logged_in)
		{
			$this->request->redirect("login");
			return 0;
		}
		$thread_id = $this->request->param("id");
		$forum_model = Model::factory("forum");
		$post = $_POST;
		if(!$post['content'] OR $post['content'] == '')
		{
			// TO-DO: prevent comments consisting just of spaces to be sent
			$this->request->redirect("blog/{$thread_id}");
		}
		$info = array(
			"thread_id"=>$thread_id,
			"author_id"=>$this->session->get("user_id"),
			"content"=>htmlentities($post['content']),
			'when'=>date("Y-m-d H:i:s")
		);
		$forum_model->add_comment($info);
		$this->request->redirect("thread/{$thread_id}");
	}
}
?>