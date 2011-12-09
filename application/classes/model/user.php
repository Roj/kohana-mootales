<?php 
class Model_User extends Model {
	public function create($post)
	{
		$info = array(
			'username'=> $post['username'],
			'password'=> md5($post['password']),
			'email'=> $post['email'],
			'date_joined'=> date("Y-m-d"),
			'date_last_seen'=> date("Y-m-d H:i:s")
		);
		$query = DB::insert('users',array_keys($info))
			->values($info)
			->execute();
		return $query; //if it goes okay, it returns the ID of the row
	}
	public function get_username($id)
	{
		$query = db::select("username")->from('users')->where('id','=',intval($id))->limit('1')->execute()->get('username');
		return $query;
	}
	public function get_password_by_username($username)
	{
		$query = db::select("password")->from('users')->where('username','=',addslashes($username))->limit('1')->execute()->get('password');
		return $query;
	}
	public function get_user_info($id)
	{
		return db::select()->from('users')->where('id','=',intval($id))->execute();
	}
	public function get_user_info_by_username($username)
	{
		$query = db::select()->from('users')->where('username','=',addslashes($username))->limit('1')->execute();
		return $query;
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