<?php include Kohana::find_file('views', 'header');  ?>
		<div class="categories_wrap">
			<h3>Forum</h3>
			<br/>
<?php foreach($categories as $category): ?>
			<div class="category">
<?php 	echo HTML::anchor("forum/view/{$category['id']}/".Link::linkify_string($category['name']),$category['name'],null,null,false); ?>
				<p class="description"><?php echo $category['description'];?></p>
			</div>
<?php endforeach;?>
		</div>

<?php  include Kohana::find_file('views', 'footer');  ?>