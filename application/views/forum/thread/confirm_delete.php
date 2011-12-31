<?php include Kohana::find_file('views', 'header');  ?>
		<div class="main_wrap">
			<h3>Confirm thread deletion?</h3>
			<p>Do you really want to delete the thread titled "<?php echo $thread->get("title"); ?>"?</p>
			<form action="<?php echo URL::base().'dashboard/delete_thread/'.$thread->get('id')?>" method="POST">
				<input type="hidden" name="confirm" value="1"/>
				<input type="submit" value="Yes, I do want to delete this thread." />
			</form>
			<form action="<?php echo URL::base().'dashboard/manage'; ?>" method="POST">
				<input type="submit" value="No, I do not want to delete this thread." />
			</form>
				

<?php  include Kohana::find_file('views', 'footer');  ?>