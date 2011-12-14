<?php 
class Model_Forum extends Model {
	public function create_thread($info)
	{
		$amount_threads = DB::select("count_threads")->from("forum_categories")->where("id","=",intval($info['category_id']))->execute()->get("count_threads");
		DB::update("forum_categories")->set(array("count_threads"=>intval($amount_threads)+1))->execute();
		return DB::insert("forum_threads",array_keys($info))->values($info)->execute();
	}
		public function add_comment($info)
	{
		$amount_comments = DB::select("amount_comments")->from("forum_threads")->where("id","=",intval($info['thread_id']))->execute()->get("amount_comments");
		DB::update("forum_threads")->set(array("amount_comments"=>intval($amount_comments)+1))->execute();
		return DB::insert("forum_comments",array_keys($info))->values($info)->execute();
	}
	public function get_recent_threads($limit = 10)
	{
			return DB::select()->from("forum_threads")->limit($limit)->execute();
	}
	public function get_recent_in_category($category_id,$limit = 10)
	{
		return DB::select()->from("forum_threads")->where("category_id","=",intval($category_id))->limit($limit)->execute();
	}
	public function get_thread($id)
	{
		return DB::select()->from("forum_threads")->where("id","=",$id)->execute();
	}

	public function get_comments($id,$limit=10)
	{
		return DB::select()->from("forum_comments")->where("thread_id","=",$id)->limit($limit)->execute();
	}
	public function get_categories()
	{
		return DB::select()->from("forum_categories")->order_by("id","ASC")->execute();
	}
	public function get_category_name($id)
	{
		return DB::select("name")->from("forum_categories")->where("id","=",intval($id))->execute()->get("name");
	}
}
?>