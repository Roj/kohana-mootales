<?php include Kohana::find_file('views', 'header'); ?>		<script language="javascript" type="text/javascript">			$(document).ready(function(){				$('#delete').fancybox();				$('#edit').fancybox();			});		</script>		<div class="hidden">			<div id="edit_form">				<h3>Edit blog</h3>				<form action="<?php echo URL::base()."dashboard/edit_blog/".$blog["id"]; ?>" method="POST" class="blog_form">					<label for="title">Title</label>					<input type="text" name="title" id="title" value="<?php echo $blog['title']; ?>" maxlength="100" size="50"/> <br/>					<label for="tags">Tags</label>					<input type="text" name="tags" id="tags" value="<?php echo $blog['tags']; ?>" maxlength="100" size="50"/> <br/>					<label for="content">Content</label>					<textarea name="content" id="content"><?php echo $blog["content"]; ?></textarea> <br/>					<input type="submit" value="Submit blog"/>				</form>			</div>			<div id="delete_form">				<h3>Confirm blog deletion?</h3>				<p>Do you really want to delete the blog titled "<?php echo $blog["title"]; ?>"?</p>				<form action="<?php echo URL::base().'dashboard/delete_blog/'.$blog['id'];?>" method="POST">					<input type="hidden" name="confirm" value="1"/>					<input type="submit" value="Yes, I do want to delete this blog." />				</form>			</div>		</div>		<div class="blog_wrap">			<span class="blog_info"> written by <?php 			echo Link::user($user['username']);			echo "&nbsp;";			echo DateHelper::human_readable($blog["time_posted"]); 			if($user_rank > 1 OR $blog['author_id'] == $user_id): ?>			(<a href="#edit_form" id="edit">edit</a>/<a href="#delete_form" id="delete">delete</a>)<?php  endif; 			?></span>			<h3><?php echo $blog["title"];?></h3>			<div class="like_wrap">					<span class="number"><?php echo $blog['amount_votes'];?></span>					<span class="other">likes</span>			</div>						<div class="blog_content">			<p><?php echo BBCode::parse($blog["content"]);?></p>			<?php if($liked): ?>			<?php echo HTML::anchor("blog/unlike/".$blog["id"],"Unlike this blog",null,null,false);?><?php else: ?>			<?php echo HTML::anchor("blog/like/".$blog["id"],"Like this blog",null,null,false);?><?php endif; ?>			</div>					</div>		<div class="comments_wrap">			<h4>Comments</h4>			<?php echo Pagination::blog_page_links($actual_page,$total_pages,$blog); ?><?php if(count($comments) == 0): ?>			<p>There are no comments to display.</p><?php else: ?><?php foreach($comments as $comment): $user_data = $users_data[$comment['author_id']][0];?>			<div class="comment_wrap">				<div class="comment_topbar">					<img src="<?php echo $user_data['avatar'];?>" height="100px" width="170px" />					<span><?php echo $user_data['username'];?></span>				</div>				<div class="comment_content">					<p><?php echo BBCode::parse($comment['content']); ?></p>				</div>			</div><?php endforeach; ?><?php endif; ?>			<?php echo Pagination::blog_page_links($actual_page,$total_pages,$blog); ?>		</div>		<h4>Leave a comment</h4><?php if ($show_comment_form):?>		<form action="<?php echo URL::base();?>blog/comment/<?php echo $blog['id']; ?>" method="POST" class="comment_form"><?php echo BBCode::textarea_buttons('textarea_comment'); ?>			<textarea name="content" rows="10" cols="50" id="textarea_comment"></textarea><br/>			<input type="submit" value="Submit comment"/>		</form><?php else: ?>		<p>You need to <?php echo Link::login(); ?> or <?php echo Link::register();?> in order to be able to comment.</p><?phpendif; include Kohana::find_file('views', 'footer'); ?>