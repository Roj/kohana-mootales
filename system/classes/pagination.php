<?php
class Pagination {
	public static function page_links($actual_page,$total_pages,$item,$method)
	{
		/* I made this function because, seriously, the only thing differing between the
		thread and blog pagination was the method called in the class Link.
		So, this function lets you pass a parameter which static method in function Link 
		it calls. In essence, $method='blog' will do the blog pagination and
		$method='thread' will do the forum one, given that all the other parameters
		are correct. $item is an associative array with information returned from DB.*/
		$return = '';
		if ($total_pages > 1)
		{
			$return .= '<div class="page_links">';
			$return .= '<span>Page</span>&nbsp;';
			$return .= Link::$method($item['id'],"&laquo;",$item['title']);
			$start_page = ($actual_page-5 < 1)? 1:$actual_page-5; // integer beggining of the page links
			$end_page = ($actual_page+5 > $total_pages)? $total_pages:$actual_page+5;
			for ($i = $start_page; $i<=$end_page; $i++)
			{
				$class = ($i == $actual_page)? "bold":""; //make the link bold if this is the actual page
				$return .= "&nbsp;";
				$return .= Link::$method($item['id'],$i,$item['title'],$i,$class);
				
			}
			$return .= "&nbsp;";
			$return .= Link::$method($item['id'],"&raquo;",$item['title'],$total_pages);
			$return .= ' </div>';
		}
		return $return;
	}
	public static function thread_page_links($actual_page,$total_pages,$thread)
	{
		return Pagination::page_links($actual_page,$total_pages,$thread,'thread');
	}
	public static function blog_page_links($actual_page,$total_pages,$blog)
	{
		return Pagination::page_links($actual_page,$total_pages,$blog,'blog');
	}
}
?>