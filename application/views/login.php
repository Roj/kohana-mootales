<?php include Kohana::find_file('views', 'header'); ?><h3>sign in</h3><form action="<?php echo URL::base();?>login/submit" method="POST">	<label for="username">username</label><input type="text" name="username"/> <br/>	<label for="password">password</label><input type="password" name="password"/> <br/>	<label>&nbsp;</label><input type="submit" value="Login"/></form><?php include Kohana::find_file('views', 'footer'); ?>