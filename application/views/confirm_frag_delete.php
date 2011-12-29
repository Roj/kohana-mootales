<?php include Kohana::find_file('views', 'header');  ?>
		<div class="main_wrap">
			<h3>Confirm frag deletion?</h3>
			<p>Do you really want to delete the fragment  "<?php echo $frag->get("content"); ?>"?</p>
			<form action="<?php echo URL::base().'fragment/delete/'.$frag->get('id')?>" method="POST">
				<input type="hidden" name="confirm" value="1"/>
				<input type="submit" value="Yes, I do want to delete this fragment." />
			</form>
			<form action="<?php echo URL::base().'home'; ?>" method="POST">
				<input type="submit" value="No, I do not want to delete this fragment." />
			</form>
<?php  include Kohana::find_file('views', 'footer');  ?>