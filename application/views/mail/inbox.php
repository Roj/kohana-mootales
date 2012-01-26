<?php include Kohana::find_file('views', 'header');  ?>
		<script language="javascript">
$(document).ready(function(){
	$('input').focus(function(){
		if($(this).val() == $(this).attr('name')) {
			$(this).val('');
		}
	});
	$('input').blur(function(){
		if($(this).val() == '') {
			$(this).val($(this).attr('name'));
		}
	});
});
		</script>
		<div class="mail_wrap">
			<div style="float:right;margin-top:6px;">
				<span style="background: #2F9BE0; color: white; padding: 2px 4px; border-radius:4px; font-weight:bold;">Inbox</span> 
				<span style="background: white; color: #2F9BE0;">Outbox</span> 
			</div>
			<h3>Inbox</h3>
			<br/>
<?php if(count($mails) > 0): ?>
			<table>
				<tr>
					<th width="3%">&nbsp;</th>
					<th width="20%">When</th>
					<th width="20%">From</th>
					<th width="42%">Subject</th>
					<th width="10%">Action</th>
				</tr>
<?php foreach($mails as $mail): 
$email_icon_src = URL::base() . 'images/email' . (($mail['read'])? '_open.png':'.png');
?>

				<tr>
					<td><img src='<?php echo $email_icon_src;?>'></td>
					<td><?php echo DateHelper::human_readable($mail['when']); ?></td>
					<td><?php echo Link::user($users_data[$mail['author_id']]);?></td>
					<td><?php echo Link::mail($mail['id'],$mail['title']); ?></td>
					<td>delete</td>
				</tr>
<?php endforeach; ?>
			</table>
<?php else: ?>
			<p>You don't have any messages :( </p>
<?php endif; ?>
			<h4>New message</h4>
			<form action="<?php echo URL::base(); ?>mail/create" method="POST" class="mail_form">
				<input type="text" name="To" id="mail_to" value="To"/> <br/>
				<input type="text" name="Subject" id="mail_subject" value="Subject"/> <br/><br/>
				<div class="mail_form_content">
<?php echo BBCode::textarea_buttons('textarea_mail'); ?>
					<textarea name="content" rows="10" cols="50" id="textarea_mail"></textarea> <br/>
				</div>
				<input type="submit" value="Send message"/> <br/>
				
			</form>
		</div>
		
<?php  include Kohana::find_file('views', 'footer');  ?>