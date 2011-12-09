<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Website {

	public function action_index()
	{
		$user_model = Model::factory("user");
		$blog_model = Model::factory("blog");
		$recent_blogs = $blog_model->get_most_recent();
		$best_blogs = $blog_model->get_best_recent();
		//We need to query for the name of the authors featured in the frontpage.
		//We'll do it the same way we query for the commenters' info on Controller_Blog->action_view()
		
		$users_data = array();  //here we'll store each user's info
		foreach ($best_blogs as $blog) 
		{
			if(array_key_exists($blog['author_id'],$users_data)) // Why query two times for the same user?
				continue;
			$users_data[$blog['author_id']]=$user_model->get_username($blog['author_id']);
			
		}
		
		$view = View::factory('home')	
			->set('app_name',$this->page_title)
			->set('recent_blogs',$recent_blogs)
			->set('best_blogs',$best_blogs)
			->set('users_data',$users_data);
		$this->response->body($view);
		
	}
	public function action_method()
	{
		$this->response->body('this is another method.');
	}

} // End Welcome
