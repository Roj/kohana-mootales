<?php include Kohana::find_file('views', 'header');  ?>
		<div class="edit_wrap">
<?php if(isset($errors)): ?>
			<p class="errors">The following errors have ocurred: <?php echo $errors; ?></p>
<?php endif; ?>
			<h3>Dashboard &raquo; edit thread</h3>
			<h4>Edit</h4>
			<form action="<?php echo URL::base()."dashboard/edit_thread/".$item->get("id"); ?>" method="POST" class="blog_form">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="<?php echo $values['title']; ?>" maxlength="100" size="50"/> <br/>
				<label for="content">Content</label>
				<textarea name="content" id="content"><?php echo $values["content"]; ?></textarea> <br/>
				<input type="submit" value="Edit thread"/>
			</form>
		</div>
<?php  include Kohana::find_file('views', 'footer');  ?>