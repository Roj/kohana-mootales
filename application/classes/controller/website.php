<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller {
	public $page_title;
	public $header;
	public $footer;
	public $session;
	public $logged_in;
	public function before()
	{
		parent::before();
		
		$this->session = Session::instance();
		$this->logged_in = $this->session->get('logged_in',false);
		$this->user_rank = $this->session->get('rank',0);
		$frag_model = Model::factory("fragment");
		$mail_model = Model::factory("mail");
		$user_model = Model::factory("user");
		$amount_pings = ($this->logged_in)? $frag_model->get_amount_pings($this->session->get("user_id")):0;
		$amount_mails = ($this->logged_in)? $mail_model->get_amount_unread_mails($this->session->get("user_id")):0;
		
		if (Kohana::$profiling === TRUE)
		{
			$this->benchmark = Profiler::start('Controller',$this->request->action());
		}
		if ($this->logged_in)
		{
			
			if (strtotime(date("Y-m-d H:i:s")) - strtotime($this->session->get('last_seen')) >= 86400)
			{
				$user_model->update_last_seen($this->session->get('user_id'));
				$this->session->set('last_seen', date("Y-m-d H:i:s"));
			}
		}
		
		
		View::bind_global('page_title',$this->page_title);
		View::bind_global('logged_in',$this->logged_in);
		View::set_global('user_rank',$this->user_rank);
		View::set_global('username',$this->session->get('username','anonymous'));
		View::set_global('user_id',$this->session->get("user_id",0));
		View::set_global('amount_mails',$amount_mails);
		View::set_global('amount_pings',$amount_pings);
		$this->page_title = 'Mootales';
	}
	public function after()
	{
		parent::after();
		if(isset($this->benchmark))
		{
			Profiler::stop($this->benchmark);
		}
		
	}
}
