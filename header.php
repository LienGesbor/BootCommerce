<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" type="text/css" href="pluginStyles.css">
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<!-- container -->

	<div class="row main_wrapper" style="margin: 0; padding: 0;">
	
	
	<!-- Top Navigation-->

	<div class="row topNav_wrap_main">

		<div id="sidenav_icon">
		</div>

		<div class="topNav_wrap_right">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'topNav' ) ); ?>
		</div>


	</div>

		<!-- EX Nav -->
	<div id="sideNav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn">&times;</a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
	</div>

	<!-- Top Navigation-->
	

	
	<!-- site-header -->
	<header class="container-fluid site-header" style="margin: 0; padding: 0;">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h5><?php bloginfo('description'); ?></h5>
	</header>
	<!-- /site-header -->

	<!-- Content Main Wrapper -->
	<div class="row content_main_wrapper clearfix">