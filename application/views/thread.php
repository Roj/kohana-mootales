<?php include Kohana::find_file('views', 'header');  ?>
		<div class="thread_wrap">
			<span class="thread_info"> written by <?php echo $user->get("username");?> on <?php echo $thread->get("time_posted"); ?></span>
			<h3><?php echo $thread->get("title");?></h3>
			
			<div class="thread_content">
			<p><?php echo BBCode::parse($thread->get("content"));?></p>

			</div>
		</div>
		<h4>Comments</h4>
<?php if(count($comments) == 0): ?>
		<p>There are no comments to display.</p>
<?php else: ?>
<?php foreach($comments as $comment): 
$user_data = $users_data[$comment['author_id']];?>
		<div class="comment_wrap">
			<div class="comment_topbar">
				<img src="<?php echo $user_data->get('avatar');?>" height="100px" width="170px" />
				<span><?php echo $user_data->get('username');?></span>
			</div>
			<div class="comment_content">
				<p><?php echo BBCode::parse($comment['content']); ?></p>
			</div>
			
		</div>
<?php endforeach; ?>
<?php endif; ?>
		<h4>Leave a comment</h4>
		<form action="<?php echo URL::base();?>thread/comment/<?php echo $thread->get('id'); ?>" method="POST">
			<label for="content">comment</label>
			<textarea name="content" rows="10" cols="50"></textarea><br/>
			<label>&nbsp;</label><input type="submit" value="Submit comment"/>
		</form>


<?php  include Kohana::find_file('views', 'footer');  ?>