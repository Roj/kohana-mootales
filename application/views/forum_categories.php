<?php include Kohana::find_file('views', 'header');  ?>
		<div class="categories_wrap">
			<h3>Forum</h3>
			<br/>
<?php foreach($categories as $category): ?>
			
			<?php $name=str_replace(array(" ","/","<",">","&","?",",",";","."),"-",$category['name']);
			echo HTML::anchor("forum/view/{$category['id']}/{$name}",$category['name'],null,null,false); ?>
			<p><?php echo $category['description'];?></p>
<?php endforeach;?>
		</div>

<?php  include Kohana::find_file('views', 'footer');  ?>