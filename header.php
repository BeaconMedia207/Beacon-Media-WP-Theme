<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">


		<!-- LOAD CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

		<!-- PAGE META TITLE / DESCRIPTION -->
		<title><?php echo get_bloginfo('name'); ?> | <?php echo get_the_title(); ?></title>
		<meta name="description" content="Welcome to Beacon Media..." />
	</head>
	<body>

		<div id="wrapper">


				<!-- HEADER -->
		    <header>
		        <div id="header-main">
		            <div id="header-logo">
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/beacon_media_logo.png" alt="Beacon Media Lighthouse Logo">
		            </div>
		            <div id="header-text">
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/beacon_media_text.png" alt="Beacon Media">
		            </div>
		        </div>

        	  	<nav role="navigation"  id="nav-primary">
        					<?php

        						// LOTS OF OPTIONS HERE: https://developer.wordpress.org/reference/functions/wp_nav_menu/
        						wp_nav_menu(array(
        							'menu_id' => 'nav',
        							'container_class' => 'header-links cf',         // class of container (should you choose to use it)
        							'menu' => __( 'Header Links' ),   				// nav name
        							'theme_location' => 'header-links',             // where it's located in the theme

        						));
        					?>
        				</nav>
		    </header>