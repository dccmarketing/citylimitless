<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package City Limitless
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 *
 * @uses 	add_theme_support()
 */
function city_limitless_jetpack_setup() {

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

} // city_limitless_jetpack_setup()
add_action( 'after_setup_theme', 'city_limitless_jetpack_setup' );
