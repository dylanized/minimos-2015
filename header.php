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

<header class="row header padding border-bottom sticky">

	<div class="container">
	
		<?php if (is_home()) { ?>
			<h1 class="logo"><span>Minimos</span></h1>
		<?php } else { ?>
			<a class="logo" href="/"><span>Minimos</span></a>
		<?php } ?>
	
	</div>

</header>