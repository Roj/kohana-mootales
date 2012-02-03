<?php include Kohana::find_file('views', 'header');  ?>
		<script language="javascript" type="text/javascript">
			$(document).ready(function(){
				$('#delete').fancybox();
				$('#edit').fancybox();
				$('.comment_options_open').click(function(){
					$(this).siblings('.comment_options').fadeToggle("fast");
				});
			});
		</script>
		<div class="hidden">
			<div id="edit_form">
				<h3>Edit thread</h3>
				<form action="<?php echo URL::base()."dashboard/edit_thread/".$thread["id"]; ?>" method="POST" class="thread_form">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" value="<?php echo $thread['title']; ?>" maxlength="100" size="50"/> <br/>
					<label for="content">Content</label>
					<textarea name="content" id="content"><?php echo $thread["content"]; ?></textarea> <br/>
					<input type="submit" value="Submit thread"/>
				</form>
			</div>
			<div id="delete_form">
				<h3>Confirm thread deletion?</h3>
				<p>Do you really want to delete the thread titled "<?php echo $thread["title"]; ?>"?</p>
				<form action="<?php echo URL::base().'dashboard/delete_thread/'.$thread['id'];?>" method="POST">
					<input type="hidden" name="confirm" value="1"/>
					<input type="submit" value="Yes, I do want to delete this thread." />
				</form>
			</div>
		</div>
		<div class="thread_wrap">
			<span class="thread_info"> written by <?php 
			echo Link::user($user["username"]);
			echo "&nbsp;";
			echo DateHelper::human_readable($thread["time_posted"]); 
			if($user_rank > 1 OR $thread['author_id'] == $user_id):  ?>
				(<a href="#edit_form" id="edit">edit</a>/<a href="#delete_form" id="delete">delete</a>)
<?php  endif; ?>
			</span>
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
			<div class="comment_avatar">
				<img src="<?php echo $user_data['avatar'];?>" class="avatar" />
			</div>
			<div class="comment_bubble left">
				<div class="topbar">
					<span><?php echo $user_data['username'];?> </span>
					<div class="right">
						<span class="comment_options">PM  | Report | Quote | Permalink</span>
						<span class="comment_options_open">+</span>
						<span class="when"><?php echo DateHelper::human_readable($comment['when']); ?></span>
					</div>
				</div>
				<div class="content">
					<p><?php echo BBCode::parse($comment['content']); ?></p>
				</div>
			</div>
			
		</div>
<?php endforeach; ?>
<?php endif;  ?>
		<?php echo Pagination::thread_page_links($actual_page,$total_pages,$thread); ?>
		<h4>Leave a comment</h4>
<?php if ($show_comment_form): ?>
		<form action="<?php echo URL::base();?>thread/comment/<?php echo $thread['id']; ?>" method="POST" class="comment_form">
<?php echo BBCode::textarea_buttons('textarea_comment'); ?>
			<textarea name="content" rows="10" cols="50" id="textarea_comment"></textarea><br/>
			<input type="submit" value="Submit comment"/>
		</form>
<?php else: ?>
		<p>You need to <?php echo Link::login(); ?> or <?php echo Link::register();?> in order to be able to comment.</p>

<?php endif;?> 

<?php include Kohana::find_file('views', 'footer');  ?> 
