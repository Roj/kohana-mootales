<?php 
class Model_Mail extends Model {
	public function create($info) 
	{
		return DB::insert("mail",array_keys($info))->values($info)->execute();
	}
	public function get_inbox_for_user($user_id)
	{
		return DB::select()->from("mail")->where("receiver_id","=",intval($user_id))->order_by("when","DESC")->execute();
	}
	public function get_outbox_for_user($user_id)
	{
		return DB::select()->from("mail")->where("author_id","=",intval($user_id))->order_by("when","DESC")->execute();
	}
	public function get_mail($mail_id)
	{
		return DB::select()->from("mail")->where("id","=",intval($mail_id))->execute();
	}
	public function get_amount_unread_mails($user_id)
	{
		return DB::select(array(DB::expr('COUNT(id)'), 'amount'))
			->from('mail')
			->where('receiver_id','=',$user_id)
			->and_where('read','=','0')
			->execute()
			->get('amount');
	}
	public function mark_read($mail_id)
	{
		return DB::update("mail")->set(array("read"=>"1"))->where("id","=",intval($mail_id))->execute();
	}
}
?>