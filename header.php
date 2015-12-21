<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package City Limitless
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>

<body <?php body_class(); ?>><?php

do_action( 'after_body' );

?><div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'city-limitless' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-upper">
			<div class="header-wrap wrap">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="link-logo"><?php city_limitless_the_svg( 'logo' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'city-limitless' ); ?></button><?php

						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );

				?></nav><!-- #site-navigation -->
			</div><!-- .header_wrap -->
		</div><?php

		if ( is_front_page() ) {

			?><div class="popup-engage hide">
				<h3>Engage with us</h3>
				<p>Engage with Decatur &amp; Macon County through social media and see how you can be #DecaturCityLimitless.</p><?php

				get_template_part( 'menus/menu', 'social' );

			?></div>
			<section class="features">
				<div class="wrap features-wrap">
					<ul>
						<li><a href="<?php echo esc_url( site_url( '/live' ) ); ?>" class="feat-live"><span class="label-feature">Live</span></a></li>
						<li><a href="<?php echo esc_url( site_url( '/work' ) ); ?>" class="feat-work"><span class="label-feature">Work</span></a></li>
						<li><a href="<?php echo esc_url( site_url( '/develop' ) ); ?>" class="feat-develop"><span class="label-feature">Develop</span></a></li>
						<li><a href="" id="link-engage" class="feat-engage"><span class="label-feature">Engage</span></a></li>
					</ul>
				</div>
			</section><?php

		}

	?></header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="content-wrap wrap">