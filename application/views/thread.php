<?php include Kohana::find_file('views', 'header');  ?>
		<div class="thread_wrap">
			<span class="thread_info"> written by <?php 
			echo Link::user($user["username"]);
			echo "&nbsp;";
			echo DateHelper::human_readable($thread["time_posted"]); 
			echo " (";
			if($user_rank > 1 OR $thread['author_id'] == $user_id): 
				echo HTML::anchor("dashboard/edit_thread/{$thread['id']}","edit",null,null,false);
				echo "/";
				echo HTML::anchor("dashboard/delete_thread/{$thread['id']}","delete",null,null,false);
			endif;
			echo ")"; ?></span>
			<h3><?php echo $thread["title"];?></h3>
			
			<div class="thread_content">
			<p><?php echo BBCode::parse($thread["content"]);?></p>

			</div>
		</div>
		<h4>Comments</h4>
		<?php echo Pagination::thread_page_links($actual_page,$total_pages,$thread); ?>
<?php if(count($comments) == 0): ?>
		<p>There are no comments to display.</p>
<?php else: ?>
<?php foreach($comments as $comment): 
$user_data = $users_data[$comment['author_id']][0];?>
		<div class="comment_wrap">
			<div class="comment_topbar">
				<img src="<?php echo $user_data['avatar'];?>" height="100px" width="170px" />
				<span><?php echo $user_data['username'];?></span>
			</div>
			<div class="comment_content">
				<p><?php echo BBCode::parse($comment['content']); ?></p>
			</div>
			
		</div>
<?php endforeach; ?>
<?php endif;  ?>
		<?php echo Pagination::thread_page_links($actual_page,$total_pages,$thread); ?>
		<h4>Leave a comment</h4>
<?php if ($show_comment_form): ?>
		<form action="<?php echo URL::base();?>thread/comment/<?php echo $thread['id']; ?>" method="POST">
			<label for="content">comment</label>
			<textarea name="content" rows="10" cols="50"></textarea><br/>
			<label>&nbsp;</label><input type="submit" value="Submit comment"/>
		</form>
<?php else: ?>
		<p>You need to <?php echo Link::login(); ?> or <?php echo Link::register();?> in order to be able to comment.</p>

<?php
endif;
include Kohana::find_file('views', 'footer');  ?>