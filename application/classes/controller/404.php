<?php 
class Controller_404 extends Controller_Website {
	public function action_index()
	{
		$this->response->body(View::factory("404"));
	}
}