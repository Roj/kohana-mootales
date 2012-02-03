<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Website {

	public function action_index()
	{
		$user_model = Model::factory("user");
		$blog_model = Model::factory("blog");
		$forum_model = Model::factory("forum");
		$frag_model = Model::factory("fragment");
		$recent_blogs = $blog_model->get_most_recent();
		$best_blogs = $blog_model->get_best_recent();
		$recent_frags = $frag_model->get_most_recent();
		$recent_threads = $forum_model->get_recent_threads();
		
		//We need to query for the name of the authors featured in the frontpage.
		//We'll do it the same way we query for the commenters' info on Controller_Blog->action_view()
		
		$users_data = array();  //here we'll store each user's info
		foreach (array_merge($best_blogs->as_array(),$recent_frags->as_array(),$recent_threads->as_array()) as $item) 
		{
			if(array_key_exists($item['author_id'],$users_data)) // Why query two times for the same user?
				continue;
			$users_data[$item['author_id']]=$user_model->get_username($item['author_id']);
			
		}
		$view = View::factory('home')	
			->set('app_name',$this->page_title)
			->set('recent_blogs',$recent_blogs)
			->set('best_blogs',$best_blogs)
			->set('users_data',$users_data)
			->set('recent_frags',$recent_frags)
			->set('recent_threads',$recent_threads);
		$this->response->body($view);
		
	}
	public function action_method()
	{
		$this->response->body('this is another method.');
	}

} // End Welcome
