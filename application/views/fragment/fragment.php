<?php include Kohana::find_file('views', 'header');  ?>		<script language="javascript" type="text/javascript">		$(document).ready(function(){			$('#reply').fancybox();			$('#delete').fancybox();		});		</script>		<div class="fragment_wrap">			<p class="user_link"> <img src="<?php echo $user->get("avatar");?>" height="50px" width="85px" /> <?php echo Link::user($user->get("username"),'',"@".$user->get("username")); ?><span></span></p>			<p class="fragment_content"><?php echo $frag->get('content'); ?></p>			<p class="fragment_info"><?php echo DateHelper::human_readable($frag->get("when")); ?><?php if ($logged_in): ?>			&middot; <a href="#reply_form" id="reply">reply</a><?php	if ($user_rank > 1 OR $user_id == $frag->get('author_id')): ?>			&middot; <a href="#delete_form" id="delete">delete</a><?php	endif; ?><?php endif; ?>			</p>			<div style="display:none;">								<div id="reply_form">					<h3>Reply</h3>					<form action="<?php echo URL::base();?>dashboard/create_fragment" method="POST" class="fragment_form">						<input type="text" name="fragment_content" id="fragment_content" maxlength="140" value="@<?php echo $user->get('username');?> "/><br/>						<input type="submit" value="Submit fragment"/>					</form>				</div>				<div id="delete_form">										<h3>Confirm frag deletion?</h3>					<p>Do you really want to delete the fragment  "<?php echo $frag->get("content"); ?>"?</p>					<form action="<?php echo URL::base().'fragment/delete/'.$frag->get('id')?>" method="POST">						<input type="hidden" name="confirm" value="1"/>						<input type="submit" value="Yes, I do want to delete this fragment." />					</form>				</div>			</div>		</div><?php  include Kohana::find_file('views', 'footer');  ?>