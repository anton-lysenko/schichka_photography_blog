<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package schichka_photogrphy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site page-wrap">
        <a class="skip-link screen-reader-text"
           href="#content"><?php esc_html_e('Skip to content', 'schichka_photogrphy'); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <a class="brand" href="<?php bloginfo('url') ?>">
                <p class="first-line">Andrew Schichka</p>

                <p class="second-line">photography</p>
            </a>

            <div class="top-menu-container">
                <?php /* Primary navigation */
                wp_nav_menu(array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'main-navigation'
                ));
                ?>
                <?php schichka_photogrphy_social_menu(); ?>
            </div>
        </header>
        <!-- #masthead -->
        <div class="underlined"></div>
        <div id="content" class="site-content">
