<!DOCTYPE html>
<html>
	<head>
		<title>Mootales</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		@font-face { font-family: delicious; src: url('<?php echo URL::base(); ?>styles/Delicious-Roman.otf'); }
		@font-face { font-family: delicious; font-weight: bold; src: url('<?php echo URL::base(); ?>styles/Delicious-Bold.otf'); }
		@font-face { font-family: delicious; font-style: italic; src: url('<?php echo URL::base(); ?>styles/Delicious-Italic.otf'); }
		</style>
		<script language="javascript" type="text/javascript" src="<?php echo URL::base();?>js/jquery.min.js"></script>
		<script language="javascript" type="text/javascript" src="<?php echo URL::base();?>js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<script language="javascript" type="text/javascript">
		function insertAtCaret(a,i,textarea) {
			//this script was written by vusys (www.vuii.co.uk)
			messagebox=document.getElementById(textarea);
			messagebox.focus();
			if(document.selection) {
				range=document.selection.createRange();
				if(range.parentElement()!=messagebox)
					return;
				range.text=a+range.text+i;
				range.select()
			} else if(typeof messagebox.selectionStart!=="undefined") {
				rangeStart=messagebox.selectionStart;
				var rangeEnd=messagebox.selectionEnd;
				i=messagebox.value.substring(0,rangeStart)+a+messagebox.value.substring(rangeStart,rangeEnd)+i+messagebox.value.substring(rangeEnd,messagebox.value.length);
				messagebox.value=i;
				rangeStart+=a.length;
				rangeEnd+=a.length;
				messagebox.setSelectionRange(rangeStart,rangeEnd)
			} else {
				messagebox.value+=a+i;
				messagebox.focus();
			}
		}
		$(document).ready(function(){
			$('#login').fancybox();
			$('#register').fancybox();
		});
		</script>
		<link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>styles/styles.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	</head>
	<body>
		<div class="header">
			<div class="menu">
				
				<a href="<?php echo URL::base();?>">frontpage</a>
				<a href="<?php echo URL::base();?>forum">forum</a>
<?php if ($logged_in): ?>
				<a href="<?php echo URL::base();?>user/<?php echo $username;?>">my mooid</a>
				<a href="<?php echo URL::base();?>dashboard">dashboard<?php if(@$amount_pings > 0):?><span> (<?php echo $amount_pings; ?>)</span> <?php endif;?></a>
				<a href="<?php echo URL::base();?>mail/inbox">mail<?php if(@$amount_mails > 0):?><span> (<?php echo $amount_mails; ?>)</span> <?php endif;?></a>
<?php if ($user_rank == 3): ?>
				<a href="<?php echo URL::base(); ?>admin">admin</a>
<?php endif; ?>
				<a href="<?php echo URL::base();?>logout">logout</a>
<?php else: ?>
				<a href="#registerform" id="register">register</a>
				<a href="#loginform" id="login">login</a>
<?php endif; ?>
			</div>
			<a href="<?php echo URL::base();?>" class="title"><?php echo $page_title; ?></a>
		</div>
		<div style="display:none">
			<div id="loginform">
				<h3>sign in</h3>

				<form action="<?php echo URL::base();?>login/submit" method="POST">
					<label for="username">username</label><input type="text" name="username"/> <br/>
					<label for="password">password</label><input type="password" name="password"/> <br/>
					<label>&nbsp;</label><input type="submit" value="Login"/>
				</form>
			</div>
			<div id="registerform">
				<h3>register</h3>
				<form action="<?php echo URL::base();?>register/submit" method="POST">
					<label for="username">username</label> <input type="text" name="username" value="username" maxlength="30"/> <br/>
					<label for="email">email</label><input type="text" name="email" value="me@example.com"/> <br/>
					<label for="password">password</label><input type="password" name="password" value="password"/> <br/>
					<label for="username">again</label><input type="password" name="confirm" value="password"/> <br/>
					<label>&nbsp;</label><input type="submit" value="Sign up!" />
				</form>
			</div>
		</div>
<?php if(@$message): ?>
		<p class="sys_message"><img src="<?php echo URL::base();?>images/accept.png"/><?php echo $message; ?></p>
<?php endif; 
		if (@$errors):?>
		<p class="errors"><img src="<?php echo URL::base();?>images/error.png"/><?php echo $errors; ?></p>
<?php endif; ?>