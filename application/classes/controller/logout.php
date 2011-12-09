<?php 
class Controller_Logout extends Controller_Website {
	public function action_index()
	{
		$this->session->destroy();
		$this->request->redirect("home");
	}
}
?>