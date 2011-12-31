<?php include Kohana::find_file('views', 'header');  ?>		<div class="threads_wrap">			<h3><?php echo $category_name; ?></h3>			<br/>			<table>				<tr>					<th width="55%">Title</th>					<th width="15%">Author</th>					<th width="8%">Comments</th>					<th width="22%">Last active</th>				</tr><?php foreach($threads as $thread): ?>				<tr class="thread">					<td><?php echo Link::thread($thread['id'],$thread['title'],$thread['title']); ?></td>					<td><?php echo Link::user($users_data[$thread['author_id']]); ?></td>					<td><?php echo $thread['amount_comments']; ?></td>					<td><?php echo DateHelper::human_readable($thread['last_active']); ?></td>				</tr><?php endforeach;?> 			</table>		</div><?php  include Kohana::find_file('views', 'footer');  ?>