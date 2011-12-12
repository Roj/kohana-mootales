<?php 
/* Note: this only shows a view, which is the categories one. */
class Controller_Forum extends Controller_Website {
	public function action_index()
	{
		$forum_model = Model::factory("forum");
		$categories = $forum_model->get_categories();
		$view = View::factory("forum_categories")
			->set("categories",$categories);
		$this->response->body($view);
	}
	public function action_view() 
	{
		$forum_model = Model::factory("forum");
		$user_model = Model::factory("user");
		$id = $this->request->param("id");
		$threads = $forum_model->get_recent_in_category($id);
		$category_name = $forum_model->get_category_name($id);
		//now we'll go comment through comment querying for each user's information
		$users_data = array();  //here we'll store each user's info
		foreach ($threads as $thread) 
		{
			if(array_key_exists($thread['author_id'],$users_data))
				continue;
			$users_data[$thread['author_id']]=$user_model->get_username(intval($thread['author_id']));
			
		}
		$view = View::factory("forum_category")
			->set("category_name",$category_name)
			->set("threads",$threads)
			->set("users_data",$users_data);
		
		$this->response->body($view);
	}
}
?>