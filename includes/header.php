<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">

    <?php
    // wp_head()會引入在functions.php所指定的script，並且處理相依性產生的引入順序變化
    ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--
Top Navbar
-->
<header class="top-navbar">
    <div class="top-navbar-logo-wrapper">
        <img class="top-navbar-logo" src="<?php bloginfo('template_url')?>/image/logo.png"></img>
    </div>
    <?php
    wp_nav_menu( array(
        'menu' => 'top-navbar',
        'theme_location' => 'top',
        'container' => 'nav',
        'container_class' => 'top-navbar-menu-container'
    ));
    ?>
    <?php get_search_form(); ?>
</header>
