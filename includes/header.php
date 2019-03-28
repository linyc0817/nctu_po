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
    <div class="top-navbar-triangle">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,0 100,0 0,100" fill="#83e5de"/>
            Sorry, your browser does not support inline SVG.
        </svg>
    </div>
    <div class="top-navbar-logo-menu-container">
        <div class="top-navbar-logo-wrapper">
            <a href="<?php bloginfo('url'); ?>">
                <img class="top-navbar-logo" src="<?php bloginfo('template_url')?>/image/logo.png"></img>
            </a>
        </div>
        <?php
        wp_nav_menu( array(
            'menu' => 'top-navbar',
            'theme_location' => 'top',
            'container' => 'nav',
            'container_class' => 'top-navbar-menu-container'
        ));
        ?>
    </div>
    <div class="top-search-wrapper">
        <?php get_search_form(); ?>
    </div>
</header>
