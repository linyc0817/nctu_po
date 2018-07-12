<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" />

    <?php if( template_is('homepage') ) { /*首頁*/ ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/homepage.css" type="text/css" />
    <?php } ?>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--
Top Navbar
-->
<nav class="top-navbar">
  <div class="topnav" id="top-menu">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a id="nav-more"style="font-size:15px;" class="icon">&#9776;</a>
  </div>
  <?php get_template_part('includes/navbar-search'); ?>
</nav>
