<?php include Kohana::find_file('views', 'header');  ?>		<div class="threads_wrap">			<h3><?php echo $category_name; ?></h3>			<br/><?php foreach($threads as $thread): ?>						<?php echo Link::thread($thread['id'],$thread['title'],$thread['title']); ?> 			by 			<?php echo Link::user($users_data[$thread['author_id']]); ?>			<br/><?php endforeach;?> 		</div><?php  include Kohana::find_file('views', 'footer');  ?>