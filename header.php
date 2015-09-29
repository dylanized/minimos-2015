<!DOCTYPE html>
<html lang="en">
<head>

	<?php if (is_front_page()) { ?>
		<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php } else { ?>
		<title><?php wp_title(''); ?> - <?php bloginfo('name'); ?></title>	
	<?php } ?>
	
	<!-- encoding -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- responsive layout -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

	<!-- favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

	<!-- seo link for rss feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	
	<!-- icon font -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="lib/js/selectivizr-min.js"></script>
	<![endif]-->

	<!-- wp head -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="row header pad-v-30 border-bottom color-lite">

	<div class="container grid">
	
		<div class="col-5-12 header-nameplate">
	
			<?php if (is_front_page()) { ?>
				<h1 class="logo margin-0 normal"><span><?php bloginfo('name'); ?></h1>			
				<h3><?php bloginfo('description'); ?></h3>			
			<?php } else { ?>
				<a class="logo" href="/"><?php bloginfo('name'); ?></a>
			<?php } ?>
						
		</div>
		
		<nav class="col-7-12 header-nav">
			
			<?php wp_nav_menu(array(
				'menu' => 'Header Nav',
				'fallback_cb' => false
			)); ?>		
			
		</nav>

	</div>

</header>