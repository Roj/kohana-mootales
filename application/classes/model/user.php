<?php 
class Model_User extends Model {
	public function create($post)
	{
		$info = array(
			'username'=> htmlentities($post['username'],ENT_IGNORE,"UTF-8"),
			'password'=> md5($post['password']),
			'email'=> htmlentities($post['email'],ENT_IGNORE,"UTF-8"),
			'date_joined'=> date("Y-m-d"),
			'date_last_seen'=> date("Y-m-d H:i:s")
		);
		$query = DB::insert('users',array_keys($info))
			->values($info)
			->execute();
		return $query; //if it goes okay, it returns the ID of the row
	}
	public function update_last_seen($user_id)
	{
		return DB::update("users")->set(array('date_last_seen'=>date("Y-m-d H:i:s")))->where("id","=",$user_id)->execute();
	}
	public function update_pageviews($user_id, $pageviews = false)
	{
		//$pageviews is an optional argument. if not specified, we'll query it.
		$pageviews = ($pageviews)? $pageviews:DB::select('count_pageviews')->from('users')->where('id','=',$user_id)->execute()->get('count_pageviews');
		return DB::update("users")->set(array('count_pageviews'=>$pageviews+1))->where("id","=",$user_id)->execute();
	}
	public function edit_personal_info($info,$user_id) {
		return DB::update("users")->set($info)->where("id","=",$user_id)->execute();
	}
	public function get_user_id($username)
	{
		return db::select("id")->from('users')->where('username','=',addslashes($username))->limit('1')->execute()->get('id');
	}
	public function get_username($id)
	{
		return db::select("username")->from('users')->where('id','=',intval($id))->limit('1')->execute()->get('username');
	}
	public function get_password_by_username($username)
	{
		return db::select("password")->from('users')->where('username','=',addslashes($username))->limit('1')->execute()->get('password');
	}
	public function get_user_info($id)
	{
		return db::select()->from('users')->where('id','=',intval($id))->execute();
	}
	public function get_user_info_by_username($username)
	{
		return db::select()->from('users')->where('username','=',addslashes($username))->limit('1')->execute();
	}
	public function unique_username($username)
	{
		//This function checks if there is already a record with value $username on the 'username' column on table users.
		//In other words, we are checking if this user already exists.
		
		return ! DB::select(array(DB::expr('COUNT(id)'), 'amount'))
			->from('users')
			->where('username','=',$username)
			->execute()
			->get('amount');
	}
	
}
?>