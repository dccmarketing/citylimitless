<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package City Limitless
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param 	array 		$classes 		Classes for the body element.
 *
 * @uses 	is_multi_author()
 *
 * @return 	array
 */
function city_limitless_body_classes( $classes ) {

	global $post, $decatur_2015_themekit;

	if ( empty( $post->post_content ) ) {

		$classes[] = 'content-none';

	} else {

		$classes[] = $post->post_name;

	}

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {

		$classes[] = 'group-blog';

	}

	return $classes;

} // city_limitless_body_classes()
add_filter( 'body_class', 'city_limitless_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param 	string 		$title 		Default title text for current view.
 * @param 	string 		$sep 		Optional separator.
 *
 * @uses 	is_feed()
 * @uses 	get_bloginfo()
 * @uses 	is_home()
 * @uses 	is_front_page()
 *
 * @return 	string 					The filtered title.
 */
function city_limitless_wp_title( $title, $sep ) {

	if ( is_feed() ) { return $title; }

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) ) {

		$title .= " $sep $site_description";

	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {

		$title .= " $sep " . sprintf( __( 'Page %s', 'city-limitless' ), max( $paged, $page ) );

	}

	return $title;

} // city_limitless_wp_title()
add_filter( 'wp_title', 'city_limitless_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
function city_limitless_render_title() {

	?><title><?php wp_title( '|', true, 'right' ); ?></title><?php

} // city_limitless_render_title()
add_action( 'wp_head', 'city_limitless_render_title' );
endif;
