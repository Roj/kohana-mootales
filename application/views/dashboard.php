<?php include Kohana::find_file('views', 'header');  ?>
		<script language="javascript" type="text/javascript">
			function ping_delete(ping_id) {
				$('#ping_id').val(ping_id);
			}
			$(document).ready(function(){
				$('h4').click(function(){
					$(this).next("p").slideToggle(400);
					$(this).nextUntil("h4","form").slideToggle(400);
				});
				$('#user_stats').fancybox();
				$('.delete_ping').fancybox();
			});
		</script>
		<div class="hidden">
			<div id="delete_ping_form" style="min-width:600px;">
				<h3>Delete this ping?</h3>
				<p>Are you sure you want to delete this ping?</p>
				<form action="<?php echo URL::base();?>dashboard/delete_ping" method="POST">
					<input type="hidden" value="" name="ping_id" id="ping_id"/>
					<input type="submit" value="Yes, I do want to delete this ping."/>
				</form>
			</div>
			<div id="editstats" style="min-width:600px;">
				<h3>Edit your personal info</h3>
				<form action="<?php echo URL::base(); ?>dashboard/edit_info" method="POST">
					<p>These are optional, you're not required to fill them if you do not want to.</p>
					<label for="stat_avatar">Avatar URL</label>
					<input type="text" name="avatar" id="stat_avatar" value="<?php echo $user_info['avatar'];?>" maxlength="200"/><br/>
					<label for="stat_name">Name</label>
					<input type="text" name="name" id="stat_name" value="<?php echo $user_info['name'];?>"/><br/>
					<label for="stat_age">Age</label>
					<input type="text" name="age" id="stat_age" value="<?php echo $user_info['age'];?>"/><br/>
					<label for="stat_country">Country</label>
					<input type="text" name="country" id="stat_country" value="<?php echo $user_info['country'];?>"/><br/>
					<label for="stat_gender">Gender</label>
					<input type="text" name="gender" id="stat_gender" value="<?php echo $user_info['gender'];?>"/><br/>
					<label>&nbsp;</label><input type="submit" value="Update information"/>
					<br/><br/>
				</form>
			</div>
		</div>
		<div class="sidebar">
			<h3>Miscellaneous</h3>
			<?php echo HTML::anchor("dashboard/manage","Manage your blogs", null, null, false); ?><br/>
			See your fragments. <br/>
			<a href="#editstats" id="user_stats">Edit your personal information.</a> <br/>
		</div>
		<div class="main_wrap dashboard">
			<h3>Dashboard</h3>
			<h4>New fragment</h4>
			<p>Submit a new fragment. Fragments are short messages in which you can say what's up, etc. You can also "ping" an user, by preceding his/her username with an "@". The user will be notified of this.</p>
			<form action="<?php echo URL::base();?>dashboard/create_fragment" method="POST" class="fragment_form">
				<label for="fragment_content">Fragment <span class="description">(up to 140 characters)</span></label> <input type="text" name="fragment_content" id="fragment_content" maxlength="140" value="<?php echo $form_values['fragment_content']; ?>"/><br/>
				<input type="submit" value="Submit fragment"/>
			</form>
			<h4>New blog</h4>
			<p>Submit a new blog. Blogs are used to express your ideas in about any topic you're interested in. Other users will be able to like, comment, and share your blog. </p>
			<form action="<?php echo URL::base(); ?>dashboard/create_blog" method="POST" class="blog_form">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="<?php echo $form_values['title']; ?>" maxlength="100" size="50"/> <br/>
				<label for="tags">Tags</label>
				<input type="text" name="tags" id="tags" value="<?php echo $form_values['tags'];?>" maxlength="100" size="50"/> <br/>
				<label for="content">Content</label>
				<textarea name="content" id="content"><?php echo $form_values["content"]; ?></textarea> <br/>
				<input type="submit" value="Submit blog"/>
			</form>
			<h4>New thread</h4>
			<p>Submit a new thread. Threads are collections of posts and are used to discuss any topic.</p>
			<form action="<?php echo URL::base(); ?>dashboard/create_thread" method="POST" class="thread_form">
				<label for="thread_title">Title</label>
				<input type="text" name="thread_title" id="thread_title" value="<?php echo $form_values['thread_title']; ?>"/> <br/>
				<label for="thread_category">Category</label>
				<select name="thread_category" id="thread_category">
<?php foreach ($categories as $category): ?>
					<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
<?php endforeach; ?>
				</select>
				<br/>
				<label for="thread_content">Content</label><textarea name="thread_content" id
				="thread_content"><?php echo $form_values['thread_content']; ?></textarea><br/>
				<input type="submit" value="Submit thread"/>
			</form>
			<h3>Message center</h3>
			<div class="pings">
<?php if (count($pings) == 0): ?>
				<p>You don't have got any pings :(.</p>
<?php elseif (count($pings) == 1): ?>
				<p>You have got one ping: </p>
<?php else: ?>
				<p>You have got <?php echo count($pings); ?> pings:</p>
<?php endif; 
foreach($pings as $ping):?>
				<p><?php 
					$frag = $fragments[$ping['id']][0]; echo Link::fragment($frag['id'],$frag['content'],"frag_link");
					echo "&nbsp;";
					echo Link::user($users_data[$frag['author_id']],'user_link');
					?><span style="float: right;"><?php
					echo DateHelper::human_readable($ping['when']); ?>
					 <a href="#delete_ping_form" onclick="javascript:ping_delete(<?php echo $ping['id'];?>)" class="delete_ping">(dismiss)</a></span></p>
<?php endforeach;?>
			</div>
		</div>
		
<?php include Kohana::find_file('views', 'footer'); ?>