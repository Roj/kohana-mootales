<?php 
class Link {
	public static function linkify_string($string)
	{
		return str_replace(array(" ","/","<",">","&","?",",",";","."),array("-",""),$string);
	}
	public static function simple_link($page)
	{
		return HTML::anchor($page,$page,null,null,false);
	}
	public static function fragment($id,$filler_text,$class = '')
	{
		$attributes=($class)? array("class"=>$class):null;
		return HTML::anchor("fragment/".$id,$filler_text,$attributes,null,false);
	}
	public static function blog($id,$filler_text,$title='',$page='',$class='')
	{
		$title='/'.Link::linkify_string($title);
		$page='/'.$page;
		$attributes=($class)? array("class"=>$class):null;
		return HTML::anchor("blog/".$id.$title.$page,$filler_text,$attributes,null,false);
	}
	public static function user($username,$class='',$filler_text=false)
	{
		$filler_text= ($filler_text)? $filler_text:$username; //if no filler_text is specified, use username
		$attributes=($class)? array("class"=>$class):null;
		return HTML::anchor("user/".$username,$username,$attributes,null,false);
	}
	public static function thread($id,$filler_text,$title='',$page='',$class='')
	{
		$title='/'.Link::linkify_string($title);
		$page='/'.$page;
		$attributes=($class)? array("class"=>$class):null;
		return HTML::anchor("thread/".$id.$title.$page,$filler_text,$attributes,null,false);
	}
	public static function login()
	{
		return Link::simple_link("login");
	}
	public static function register()
	{
		return Link::simple_link("register");
	}
}
?>