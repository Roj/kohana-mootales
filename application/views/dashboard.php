<?php include Kohana::find_file('views', 'header'); ?>
		<div class="sidebar">
			<h3>Miscellaneous</h3>
			<?php echo HTML::anchor("dashboard/manage","Manage your blogs", null, null, false); ?><br/>
			See your fragments. <br/>
			Edit your stats. <br/>
		</div>
		<div class="main_wrap">
			<h3>Dashboard</h3>
			<?php
			if($errors) {
				print "<p class = 'errors'>The following errors have ocurred:{$errors}</p>";
			}
			?>
			<h4>New fragment</h4>
			<form action="<?php echo URL::base();?>dashboard/create_fragment" method="POST" class="fragment_form">
				<label for="fragment_content">Fragment <span class="description">(up to 140 characters)</span></label> <input type="text" name="fragment_content" id="fragment_content" maxlength="140" value="<?php echo $form_values['fragment_content']; ?>"/><br/>
				<input type="submit" value="Submit fragment"/>
			</form>
			<h4>New blog</h4>
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
		</div>
		
<?php include Kohana::find_file('views', 'footer'); ?>