<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh_exam
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gh_exam' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <?php if (get_theme_mod('logo')) {
                        echo '<img src="' . esc_url(get_theme_mod('logo')) . '">'; }?>
                </div>
                <div id="site-navigation" class="menu-header main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'gh_exam' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'Primary' ) ); ?>
                </div>
            </div>
        </div>
	</header>
	<div id="content" class="site-content">
