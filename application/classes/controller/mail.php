<?php 
class Controller_Mail extends Controller_Website {
	public $form_values;
	public $errors;
	public $message;
	public function before() {
		parent::before();
		if( ! $this->logged_in)
		{
			$this->request->redirect("login");
			return 0;
		}
	}
	public function action_index()
	{
		$this->request->redirect("mail/inbox");
		return 1;
	}
	public function action_inbox()
	{
		$mail_model = Model::factory("mail");
		$user_model = Model::factory("user");
		$mails = $mail_model->get_inbox_for_user($this->session->get("user_id"));
		//We'll do it the same way we query for the commenters' info on Controller_Home->action_index()
		$users_data = array();  //here we'll store each user's info
		foreach ($mails->as_array() as $item) 
		{
			if(array_key_exists($item['author_id'],$users_data)) // Why query two times for the same user?
				continue;
			$users_data[$item['author_id']]=$user_model->get_username($item['author_id']);
			
		}
		$view = View::factory("mail/inbox")
			->set('errors',$this->errors)
			->set('message',$this->message)
			->set('mails',$mails->as_array())
			->set('users_data',$users_data);
		$this->response->body($view);
	}
	public function action_outbox()
	{
		$mail_model = Model::factory("mail");
		$user_model = Model::factory("user");
		$mails = $mail_model->get_outbox_for_user($this->session->get("user_id"));
		//We'll do it the same way we query for the commenters' info on Controller_Home->action_index()
		$users_data = array();  //here we'll store each user's info
		foreach ($mails->as_array() as $item) 
		{
			if(array_key_exists($item['receiver_id'],$users_data)) // Why query two times for the same user?
				continue;
			$users_data[$item['receiver_id']]=$user_model->get_username($item['receiver_id']);
			
		}
		$view = View::factory("mail/outbox")
			->set('errors',$this->errors)
			->set('message',$this->message)
			->set('mails',$mails->as_array())
			->set('users_data',$users_data);
		$this->response->body($view);
	}
	public function action_create()
	{
		$post = $_POST;
		$this->errors = '';
		if ($post == array())
		{
			$this->request->redirect("mail/inbox");
			return 0;
		}
		if ( ! Valid::min_length($post['To'],4))
		{
			$this->errors.='The receiver\'s username has to be at least 4 characters long. ';
		}
		if ( ! Valid::min_length($post['Subject'],4))
		{
			$this->errors.='The subject has to be at least 4 characters long. ';
		}
		if ( ! Valid::min_length($post['content'],4))
		{
			$this->errors.='The content of the message has to be at least 4 characters long. ';
		}
		if ($this->errors == '')
		{
			$mail_model = Model::factory("mail");
			$user_model = Model::factory("user");
			$receiver = htmlentities($post['To']);
			$mail_model->create(array(
				'author_id'=>$this->session->get("user_id"),
				'receiver_id'=>$user_model->get_user_id($receiver),
				'title'=>htmlentities($post['Subject'],ENT_IGNORE,"UTF-8"),
				'content'=>htmlentities($post['content'],ENT_IGNORE,"UTF-8"),
				'when'=>date("Y-m-d H:i:s")
			));
			$this->message = "Successfully sent your message to {$receiver}.";
			$this->action_inbox();
		} else {
			$this->action_inbox();
		}
	}
	public function action_read() 
	{
		$id = intval($this->request->param('id'));
		if ( ! $id)
		{
			$this->errors="The URL was invalid.";
			$this->action_inbox();
			return;
		} else {
			$mail_model = Model::factory("mail");
			$mail = $mail_model->get_mail($id);
			$mail = $mail->as_array();
			if ($this->session->get("user_id") == $mail[0]['receiver_id'] OR 
				$this->session->get("user_id") == $mail[0]['author_id'])
			{
				if($this->session->get("user_id") == $mail[0]['receiver_id'] AND 
					! $mail[0]['read'])
				{
					$mail_model->mark_read($mail[0]['id']);
				}
				$view = View::factory("mail/read")
					->set("mail",$mail[0]);
				$this->response->body($view);
			} else {
				$this->errors="You can't view this message.";
				$this->action_inbox();
			}
		}
		
	}
}
?>