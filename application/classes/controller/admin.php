<?php 
class Controller_Admin extends Controller_Website {
	public function before()
	{
		parent::before();
		if ($this->user_rank < 3) // since people who are not logged in have a user_rank of 0, we are also excluding them.
		{
			$this->request->redirect("404");
		}
	}
	public function action_index()
	{
		$view = View::factory("admin/mainframe");
		$this->response->body($view);
	}
	public function action_users()
	{
		$view = View::factory("admin/users");
		$this->response->body($view);
	}
	public function action_blogs()
	{
		$view = View::factory("admin/blogs");
		$this->response->body($view);
	}
	public function action_forum()
	{
		$view = View::factory("admin/forum");
		$this->response->body($view);
	}
	public function action_fragments()
	{
		$view = View::factory("admin/fragments");
		$this->response->body($view);
	}
	public function action_profiler()
	{
		$view = View::factory("profiler/stats");
		$this->response->body($view);
	}
	public function action_settings()
	{
		$view = View::factory("admin/settings");
		$this->response->body($view);
	}
	public function action_reports()
	{
		$view = View::factory("admin/reports");
		$this->response->body($view);
	}
	public function action_update()
	{
		$view = View::factory("admin/update");
		$this->response->body($view);
	}
}
?>