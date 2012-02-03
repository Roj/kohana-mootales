<?php include Kohana::find_file('views', 'header'); ?>
		<div class="sidebar">
			<div class="recent_blogs">
				<h3>recent blogs</h3>
				<ul>
<?php foreach ($recent_blogs as $blog): 
//$link = "blog/".$blog['id']."/".str_replace(array(" ","/","<",">","&","?",",",";","."),"-",$blog['title']);?>
					<li><span class="like_count"><?php echo $blog['amount_votes']; ?></span><?php echo Link::blog($blog['id'],$blog['title'],$blog['title']);?></li>
<?php endforeach; ?>
				</ul>
			</div>
			<div class="recent_frags">
				<h3>recent frags</h3>
				<ul>
<?php foreach ($recent_frags as $frag): ?>
					<li><?php echo Link::fragment($frag['id'],$frag['content'],"frag_link"); ?> <?php echo Link::user($users_data[$frag['author_id']]); ?>
<?php endforeach; ?>
				</ul>
			</div>
			<div class="recent_threads">
				<h3>recent threads</h3>
				<ul>
<?php foreach($recent_threads as $thread): ?>
					<li><?php echo Link::thread($thread['id'],$thread['title'],$thread['title'],'','thread_link');?>&nbsp;<?php echo Link::user($users_data[$thread['author_id']]);?></li>
<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="main_wrap">
			<h3>frontpage: featured blogs</h3>
<?php foreach ($best_blogs as $blog): ?>
			<div class="blog">
				<h4 class="blog_title"><?php echo Link::blog($blog['id'],$blog['title'],$blog['title']);?></li></h4>
				<div class="like_wrap">
					<span class="number"><?php echo $blog['amount_votes'];?></span>
					<span class="other">likes</span>
				</div>
				<div class="blog_preview">
<?php echo BBCode::parse(substr($blog['content'],0,400)); ?>
				</div>
				<div class="blog_info"><span class="bold"><img src="<?php echo URL::base();?>images/user.png"/>Author:</span> <?php echo Link::user($users_data[$blog['author_id']]); ?> <span class="bold"><img src="<?php echo URL::base();?>images/comments.png"/>Comments:</span> <?php echo $blog['amount_comments']; ?> <span class="bold"> <img src="<?php echo URL::base();?>images/date.png"/>Submitted:</span> <?php echo $blog['time_posted']; ?></div>
			</div>
<?php endforeach; ?>
		</div>

<?php include Kohana::find_file('views', 'footer'); ?>