<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<html <?php id_the_body(); ?><?php class_the_body(); ?>>
<head>
	<title>Marathon Healthy Foods</title>
	<!--[if IE]>
		<link href="ie.css" rel="stylesheet" type="text/css" media="all" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" />
	<link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lightbox.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/layout.css" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.ico" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-180x180.png" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-194x194.png" sizes="194x194" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/android-chrome-192x192.png" sizes="192x192" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="noimageindex, noodp, noydir" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>
<body>
<div id="inner_body">
	<div class="wrapper">
		<header id="main_header">
			<div class="top_header">
				<div class="container">
					<div class="row">
						<div class="col-md-12 brand">
							<a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name'); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo@2x.png" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" width="170" height="55" /></a>
						</div>					
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="middle_header">
				<div class="container">
					<div class="row">
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="bottom_header">
				<div class="container">
					<div class="row">
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>		
		</header>