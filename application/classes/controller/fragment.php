<?php 
class Controller_Fragment extends Controller_Website {
	public function action_index()
	{
		//nothing, really.
		//$this->request->redirect("home");
	}
	public function action_view()
	{
		$frag_model = Model::factory("fragment");
		$user_model = Model::factory("user");
		$id = intval($this->request->param("id"));
		$frag = $frag_model->get_fragment($id);
		if(!intval($frag->get("id")))
		{
			$view = View::factory("fragment_notexist");
			$this->response->body($view);
			return 0;
		}
		
		$user = $user_model->get_user_info($frag->get("author_id"));
		$view = View::factory("fragment")
			->set("frag",$frag)
			->set("user",$user);
		$this->response->body($view);
	}
}