<?php include Kohana::find_file('views', 'header'); ?>
		<div class="sidebar">
			<div class="recent_blogs">
				<h3>recent blogs</h3>
				<ul>
<?php foreach ($recent_blogs as $blog): 
$link = "blog/".$blog['id']."/".str_replace(array(" ","/","<",">","&","?",",",";","."),"-",$blog['title']);?>
					<li><span class="like_count"><?php echo $blog['amount_votes']; ?></span><?php echo HTML::anchor($link,$blog['title'],null,null,false);?></li>
<?php endforeach; ?>
				</ul>
			</div>
			<div class="recent_frags">
				<h3>recent frags</h3>
				<ul>
<?php foreach ($recent_frags as $frag): ?>
					<li><?php echo HTML::anchor("fragment/".$frag['id'],$frag['content'],array("class"=>"frag_link"),null,false); ?> <?php echo HTML::anchor("user/".$users_data[$frag['author_id']],'by '.$users_data[$frag['author_id']],null,null,false); ?></li>
<?php endforeach; ?>
				</ul>
			</div>
			<div class="recent_threads">
				<h3>recent threads</h3>
				<ul>
<?php foreach($recent_threads as $thread): 
$link = "thread/".$thread['id']."/".str_replace(array(" ","/","<",">","&","?",",",";","."),"-",$thread['title']);?>
					<li><?php echo HTML::anchor($link,$thread['title'],array("style"=>"color:black;"),null,false); ?>&nbsp;<?php echo HTML::anchor("user/".$users_data[$thread['author_id']],'by '.$users_data[$frag['author_id']],null,null,false);?></li>
<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="main_wrap">
			<h3>frontpage: featured blogs</h3>
<?php foreach ($best_blogs as $blog): 
$link = "blog/".$blog['id']."/".str_replace(array(" ","/","<",">","&","?",",",";","."),"-",$blog['title'])
?>
			<div class="blog">
				<h4 class="blog_title"><?php echo HTML::anchor($link,$blog['title'],null,null,false); ?></h4>
				<div class="like_wrap">
					<span class="number"><?php echo $blog['amount_votes'];?></span>
					<span class="other">likes</span>
				</div>
				<div class="blog_preview">
<?php echo BBCode::parse(substr($blog['content'],0,400)); ?>
				</div>
				<div class="blog_info"><span class="bold">Author:</span> <?php echo HTML::anchor("user/".$users_data[$blog['author_id']],$users_data[$blog['author_id']],null,null,false); ?> <span class="bold">Comments:</span> <?php echo $blog['amount_comments']; ?> <span class="bold">Submitted:</span> <?php echo $blog['time_posted']; ?></div>
			</div>
<?php endforeach; ?>
		</div>

<?php include Kohana::find_file('views', 'footer'); ?>