<!DOCTYPE html>
<html>
	<head>
		<title>Mootales</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL::base();?>styles/styles.css"/>
	</head>
	<body>
		<div class="header">
			<div class="menu">
				<?php if($logged_in): ?>
				<a href="<?php echo URL::base();?>">frontpage</a>
				<a href="<?php echo URL::base();?>user/<?php echo $username;?>">my mooid</a>
				<a href="<?php echo URL::base();?>dashboard">dashboard</a>
				<a href="<?php echo URL::base();?>logout">logout</a>
				<?php else: ?>
				<a href="<?php echo URL::base();?>register">register</a>
				<a href="<?php echo URL::base();?>login">login</a>
				<?php endif; ?>
			</div>
			<a href="<?php echo URL::base();?>" class="title"><?php echo $page_title; ?></a>
		</div>