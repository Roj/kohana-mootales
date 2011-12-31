<?php include Kohana::find_file('views', 'header');  ?>
		<div class="error_wrap">
			<h3>Error: 404</h3>
			<p>The page you're looking for has ceased to exist (or maybe it never did?). Perhaps you would like to go back to the <a href="<?php echo URL::base(); ?>">frontpage</a>.
		</div>
<?php  include Kohana::find_file('views', 'footer');  ?>