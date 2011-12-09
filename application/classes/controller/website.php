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
		View::bind_global('page_title',$this->page_title);
		View::bind_global('logged_in',$this->logged_in);
		View::set_global('username',$this->session->get('username','anonymous'));
		$this->page_title = 'Mootales';
		
	}
}
