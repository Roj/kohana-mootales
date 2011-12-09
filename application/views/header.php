<!DOCTYPE html>
<html>
	<head>
		<title>Mootales</title>
		<style>
		@font-face { font-family: delicious; src: url('<?php echo URL::base(); ?>styles/Delicious-Roman.otf'); }
		@font-face { font-family: delicious; font-weight: bold; src: url('<?php echo URL::base(); ?>styles/Delicious-Bold.otf'); }
		@font-face { font-family: delicious; font-style: italic; src: url('<?php echo URL::base(); ?>styles/Delicious-Italic.otf'); }
		</style>
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