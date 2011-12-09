<?php include Kohana::find_file('views', 'header'); ?>
<h3>register</h3>
<?php
if($errors) {
	
	print "The following errors have ocurred:{$errors}";
}
 ?>
<form action="<?php echo URL::base();?>register/submit" method="POST">
	<label for="username">username</label> <input type="text" name="username" value="username" maxlength="30"/> <br/>
	<label for="email">email</label><input type="text" name="email" value="me@example.com"/> <br/>
	<label for="password">password</label><input type="password" name="password" value="password"/> <br/>
	<label for="username">again</label><input type="password" name="confirm" value="password"/> <br/>
	<label>&nbsp;</label><input type="submit" value="Sign up!" />
</form>
<?php include Kohana::find_file('views', 'footer'); ?>