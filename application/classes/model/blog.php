<?php 
class Model_Blog extends Model {
	public function create($post)
	{
		$info = array(
			'title'=> htmlentities($post['title'],ENT_IGNORE,"UTF-8"),
			'tags'=> htmlentities($post['tags'],ENT_IGNORE,"UTF-8"),
			'content'=> htmlentities($post['content'],ENT_IGNORE,"UTF-8"),
			'author_id'=> intval($post['author_id']),
			'time_posted'=> date("Y-m-d H:i:s")			
		);
		$amount_blogs = DB::select("count_blogs")->from("users")->where("id","=",$info["author_id"])->execute()->get("count_blogs");
		DB::update("users")->set(array("count_blogs"=>intval($amount_blogs)+1))->where("id","=",$info["author_id"])->execute();
		return DB::insert("blogs",array_keys($info))->values($info)->execute();
	}
	
	public function add_comment($info)
	{
		$info['content']=htmlentities($info['content'],ENT_IGNORE,"UTF-8");
		$amount_comments = DB::select("amount_comments")->from("blogs")->where("id","=",$info["blog_id"])->execute()->get("amount_comments");
		$query = DB::update("blogs")->set(array("amount_comments"=>intval($amount_comments)+1))->where("id","=",$info["blog_id"])->execute();
		return DB::insert('blog_comments',array_keys($info))->values($info)->execute();
	}
	public function get_blog_comments($blog_id,$limit = 10)
	{
		return DB::select()->from("blog_comments")->where("blog_id","=",intval($blog_id))->limit($limit)->execute();
	}
	public function get_user_recent($user_id, $limit = 5)
	{
		return DB::select()->from("blogs")->where("author_id","=",intval($user_id))->order_by("time_posted","DESC")->limit($limit)->execute();
	}
	public function get_most_recent($limit = 10)
	{
		return DB::select()->from("blogs")->order_by("time_posted","DESC")->limit($limit)->execute();
	}
	public function get_best_recent($minimum_likes = 1,$limit = 10)
	{
		return DB::select()->from("blogs")->order_by("time_posted","DESC")->where("amount_votes",">=",$minimum_likes)->limit($limit)->execute();
	}
	public function get_from_user($user_id,$limit=10)
	{
		return DB::select()->from("blogs")->where("author_id","=",$user_id)->order_by("time_posted","DESC")->limit($limit)->execute();
	}
	public function get_blog($id)
	{
		return DB::select()->from("blogs")->where("id","=",intval($id))->execute();
	}
	public function edit_blog($info)
	{
		$info['content']=htmlentities($info['content'],ENT_IGNORE,"UTF-8");
		$info['title']=htmlentities($info['title'],ENT_IGNORE,"UTF-8");
		return DB::update("blogs")->set($info)->where("id","=",$info['id'])->execute();
	}
	public function delete_blog($blog_id,$author_id)
	{
		DB::delete("votes")->where("blog_id","=",$blog_id)->execute();
		DB::delete("blog_comments")->where("blog_id","=",$blog_id)->execute();
		$amount_blogs = DB::select("count_blogs")->from("users")->where("id","=",$author_id)->execute()->get("count_blogs");
		DB::update("users")->set(array("count_blogs"=>intval($amount_blogs)-1))->where("id","=",$author_id)->execute();
		return DB::delete("blogs")->where("id","=",$blog_id)->limit(1)->execute();
	}
	public function liked($user_id,$blog_id)
	{
		return DB::select(array(DB::expr('COUNT(id)'), 'amount'))
			->from('votes')
			->where('user_id','=',$user_id)
			->and_where('blog_id','=',$blog_id)
			->execute()
			->get('amount');
	}
	public function like($info)
	{
		
		$amount_votes = DB::select("amount_votes")->from("blogs")->where("id","=",$info["blog_id"])->execute()->get("amount_votes");
		$query = DB::update("blogs")->set(array("amount_votes"=>intval($amount_votes)+1))->where("id","=",$info["blog_id"])->execute();
		return DB::insert("votes",array_keys($info))->values($info)->execute();
		
	}
	public function unlike($user_id,$blog_id)
	{
		$amount_votes = DB::select("amount_votes")->from("blogs")->where("id","=",$blog_id)->execute()->get("amount_votes");
		$query = DB::update("blogs")->set(array("amount_votes"=>intval($amount_votes)-1))->where("id","=",$blog_id)->execute();
		return DB::delete("votes")->where("user_id","=",$user_id)->and_where("blog_id","=",$blog_id)->execute();
	}
}
?>