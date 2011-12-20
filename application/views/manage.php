<?php include Kohana::find_file('views', 'header');  ?>
		<div class="manage_wrap main_wrap">
			<h3>Dashboard &raquo; manage</h3>
			<p><?php echo HTML::anchor("dashboard","Go back to the dashboard.",null,null,false);?></p>
			<h4>Manage your blogs</h4>
			<ul>
<?php foreach ($blogs as $blog): ?>
				<li>"<?php echo $blog['title'];?>" &nbsp; <span>(<?php echo HTML::anchor("dashboard/edit_blog/".$blog['id'],"edit",null,null,false);?>/<?php echo HTML::anchor("dashboard/delete_blog/".$blog['id'],"delete",null,null,false); ?>)</span></li>
<?php endforeach; ?>
			</ul>
		</div>
<?php  include Kohana::find_file('views', 'footer');  ?>