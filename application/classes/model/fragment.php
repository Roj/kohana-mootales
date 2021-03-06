<?php 
class Model_Fragment extends Model {
	public function create($user_id,$content) {
		$info = array(
			'content'=>htmlentities($content,ENT_IGNORE,"UTF-8"),
			'author_id'=>$user_id,
			'when'=>date("Y-m-d H:i:s")
		);
		$amount_frags = DB::select("count_fragments")->from("users")->where("id","=",$info["author_id"])->execute()->get("count_fragments");
		DB::update("users")->set(array("count_fragments"=>intval($amount_frags)+1))->where("id","=",$info["author_id"])->execute();
		return DB::insert("fragments",array_keys($info))->values($info)->execute();
	}
	public function add_ping($info) 
	{
		return DB::insert("pings",array_keys($info))->values($info)->execute();
	}
	public function delete_ping($ping_id)
	{
		return DB::delete("pings")->where("id","=",$ping_id)->execute();
	}
	public function get_amount_pings($user_id)
	{
		return DB::select(array(DB::expr('COUNT(id)'), 'amount'))
			->from('pings')
			->where('pinged_id','=',$user_id)
			->execute()
			->get('amount');
	}
	public function delete($id,$user_id)
	{
		DB::delete("pings")->where("fragment_id","=",$id)->execute();
		$amount_frags = DB::select("count_fragments")->from("users")->where("id","=",$user_id)->execute()->get("count_fragments");
		DB::update("users")->set(array("count_fragments"=>intval($amount_frags)-1))->where("id","=",$user_id)->execute();
		return DB::delete("fragments")->where("author_id","=",$user_id)->and_where("id","=",$id)->execute();
	}
	public function get_users_pings($id)
	{
		return DB::select()->from("pings")->where("pinged_id","=",intval($id))->limit(100)->execute();
	}
	public function get_fragment($id)
	{
		return DB::select()->from("fragments")->where("id","=",intval($id))->execute();
	}	
	public function get_most_recent($limit = 10)
	{
		return DB::select()->from("fragments")->order_by("when","DESC")->limit($limit)->execute();
	}
	public function get_user_recent($user_id,$limit=10)
	{
		return DB::select()->from("fragments")->where("author_id","=",intval($user_id))->order_by("when","DESC")->limit($limit)->execute();
	}
}
?>