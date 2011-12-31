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
			$view = View::factory("404");
			$this->response->body($view);
			return 0;
		}
		
		$user = $user_model->get_user_info($frag->get("author_id"));
		$view = View::factory("fragment/fragment")
			->set("frag",$frag)
			->set("user",$user);
		$this->response->body($view);
	}
	public function action_delete()
	{
		// This function actually handles two pages.
		// The first one asks the user if (s)he does want to delete the frag,
		// and also prevents some hacking by implementing POST to confirm
		// if the request is valid.
		// The second one actually deletes the frag.
		if( ! $this->logged_in)
		{
			$this->request->redirect("login");
			return 0;
		}
		$id = intval($this->request->param("id"));
		$frag_model = Model::factory("fragment");
		$frag = $frag_model->get_fragment($id);
		if ( ! intval($frag->get("id")))
		{
			$view = View::factory("404");
			$this->response->body($view);
			return 0;
		}
		if ( $frag->get("author_id") != $this->session->get("user_id") AND
			$this->session->get("rank") < 2)
		{
			//i.e. the user is not the author nor a moderator
			$this->request->redirect("fragment/{$id}");
			return 0;
		}
		if ($_POST == array() OR 
			intval($_POST['confirm']) != 1)
		{
			$view = View::factory("fragment/confirm_delete")
				->set("frag",$frag);
			$this->response->body($view);
			return 0;
		}
		$frag_model->delete($id, $frag->get("author_id"));
		$this->request->redirect("home");
		return 1;
	}
}