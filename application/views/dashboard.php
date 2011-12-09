<?php include Kohana::find_file('views', 'header'); ?>
		<h3>Dashboard</h3>
		<?php
		if($errors) {
			print "<p>The following errors have ocurred:{$errors}</p>";
		}
		?>
		<h4>New fragment</h4>
		<form action="<?php echo URL::base();?>dashboard/create_fragment" method="POST" class="fragment_form">
			<label for="content">Fragment <span class="description">(up to 140 characters)</span></label> <input type="text" name="fragment_content" maxlength="140" value="<?php echo $form_values['fragment_content']; ?>"/><br/>
			<label>&nbsp;</label><input type="submit" value="Submit fragment"/>
		</form>
		<h4>New blog</h4>
		<form action="<?php echo URL::base(); ?>dashboard/create_blog" method="POST" class="blog_form">
			<label for="title">Title</label>
			<input type="text" name="title" value="<?php echo $form_values['title']; ?>" maxlength="100" size="50"/> <br/>
			<label for="tags">Tags</label>
			<input type="text" name="tags" value="<?php echo $form_values['tags'];?>" maxlength="100" size="50"/> <br/>
			<label for="content">Content</label>
			<textarea name="content"><?php echo $form_values["content"]; ?></textarea> <br/>
			<label>&nbsp;</label>
			<input type="submit" value="Submit blog"/>
		</form>
<?php include Kohana::find_file('views', 'footer'); ?>