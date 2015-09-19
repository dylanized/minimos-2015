<!DOCTYPE html>
<html lang="en">
<head>

	<title><?php wp_title('&laquo;', true, 'right'); ?></title>
	
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
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="lib/js/selectivizr-min.js"></script>
	<![endif]-->

	<!-- wp head -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="row header pad-v-50 border-bottom">

	<div class="container">
	
		<?php if (is_home() || is_front_page()) { ?>
			<h1 class="logo"><span><?php bloginfo('name'); ?></h1>
			<h3 class="em"><?php bloginfo('description'); ?></h3>
		<?php } else { ?>
			<a class="logo" href="/"><?php bloginfo('name'); ?></a>
		<?php } ?>
	
	</div>

</header>