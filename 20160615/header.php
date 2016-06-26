<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress

 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="<?php bloginfo('template_directory')?>/screenshot.png">
        <meta property="og:title" content="國立臺北科技大學互動設計系">
	<title>國立臺北科技大學互動設計系</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/style.css">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/img/favicon.png">
	<script src="<?php bloginfo('template_directory')?>/js/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <!-- Nav Menu -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/Nav/jquery.fatNav.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/Nav/nav.css">
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	