<?php 
class Controller_Blog extends Controller_Website {
	public function action_index()
	{
		//nothing, really.
		//$this->request->redirect("home");
	}
	public function action_view()
	{
		$blog_model = Model::factory("blog");
		$user_model = Model::factory("user");
		$id = intval($this->request->param("id"));
		$blog = $blog_model->get_blog($id);
		if(intval($blog->get("id")) == 0)
		{
			$view = View::factory("404");
			$this->response->body($view);
			return 1;
		}
		//pagination...
		$total_pages = ceil($blog->get("amount_comments")/10);
		if (intval($this->request->param("page")) < 2 OR 
			intval($this->request->param("page")) > $total_pages)
		{
			$comments = $blog_model->get_blog_comments($id);
			$page = 1;
		} else
		{
			$page = ceil(intval($this->request->param("page")));
			$comments = $blog_model->get_blog_comments($id, ($page*10-10).",".($page*10));
		}
		$user = $user_model->get_user_info($blog->get('author_id'));
		$liked = $blog_model->liked($this->session->get('user_id',0),$blog->get('id'));
		
		//now we'll go comment through comment querying for each user's information
		$users_data = array();  //here we'll store each user's info
		foreach ($comments as $comment) 
		{
			if(array_key_exists($comment['author_id'],$users_data))
				continue;
			$users_data[$comment['author_id']]=$user_model->get_user_info(intval($comment['author_id']))->as_array();
			
		}
		$blog_array = $blog->as_array();
		$user_array = $user->as_array();
		
		$view = View::factory("blog/blog")
			->set("blog", $blog_array[0])
			->set("user",$user_array[0]	)
			->set("liked",$liked)
			->set("comments",$comments)
			->set("users_data",$users_data)
			->set("show_comment_form",$this->session->get("logged_in"))
			->set("total_pages",$total_pages)
			->set("actual_page",$page);
		$this->response->body($view);
	}
	public function action_like()
	{
		if( ! $this->logged_in)
		{
			$this->request->redirect("login");
			return 0;
		}
		$id = $this->request->param("id");
		$blog_model = Model::factory("blog");
		$blog_model->like(array(
			"user_id"=>$this->session->get('user_id'),
			"blog_id"=>intval($id),
			"when"=>date("Y-m-d H:i:s")
		));
		$this->request->redirect("blog/{$id}");
	}
	public function action_unlike()
	{
		if( ! $this->logged_in)
		{
			$this->request->redirect("login");
			return 0;
		}
		$id = $this->request->param("id");
		$blog_model = Model::factory("blog");
		$blog_model->unlike($this->session->get('user_id'),intval($id));
		$this->request->redirect("blog/{$id}");
	}
	public function action_comment()
	{
		if( ! $this->logged_in)
		{
			$this->request->redirect("login");
			return 0;
		}
		$blog_id = $this->request->param("id");
		$blog_model = Model::factory("blog");
		$post = $_POST;
		if(!$post['content'] OR $post['content'] == '')
		{
			$this->request->redirect("blog/{$blog_id}");
			return 0;
		}
		$info = array(
			'blog_id'=>$blog_id,
			'author_id'=>$this->session->get('user_id'),
			'content'=>htmlentities($post['content'],ENT_IGNORE,'UTF-8'),
			'when'=>date("Y-m-d H:i:s")
		);
		$blog_model->add_comment($info);
		$this->request->redirect("blog/{$blog_id}");
	}
	

}
?>