<?php include Kohana::find_file('views', 'header');  ?>
		<div class="main_wrap">
			<h3>Confirm blog deletion?</h3>
			<p>Do you really want to delete the blog titled "<?php echo $blog->get("title"); ?>"?</p>
			<form action="<?php echo URL::base().'dashboard/delete_blog/'.$blog->get('id')?>" method="POST">
				<input type="hidden" name="confirm" value="1"/>
				<input type="submit" value="Yes, I do want to delete this blog." />
			</form>
			<form action="<?php echo URL::base().'dashboard/manage'; ?>" method="POST">
				<input type="submit" value="No, I do not want to delete this blog." />
			</form>
				

<?php  include Kohana::find_file('views', 'footer');  ?>