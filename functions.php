<?php
/**
 * City Limitless functions and definitions
 *
 * @package City Limitless
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'city_limitless_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function city_limitless_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'city-limitless' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'city-limitless', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'city-limitless' ),
		'social' => __( 'Social Links', 'city-limitless' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );*/

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'city_limitless_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

} // city_limitless_setup()
endif; // city_limitless_setup
add_action( 'after_setup_theme', 'city_limitless_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function city_limitless_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'city-limitless' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

} // city_limitless_widgets_init()
add_action( 'widgets_init', 'city_limitless_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function city_limitless_scripts() {

	wp_enqueue_style( 'city-limitless-style', get_stylesheet_uri() );

	wp_enqueue_script( 'city-limitless-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20120206', true );

	wp_enqueue_script( 'city-limitless-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'city-limitless-public', get_template_directory_uri() . '/js/public.min.js', array( 'jquery' ), '20150309', true );

	wp_enqueue_script( 'city-limitless-modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '20150605', true );

} // city_limitless_scripts()
add_action( 'wp_enqueue_scripts', 'city_limitless_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Slushman Themekit
 */
require get_template_directory() . '/inc/themekit.php';

/**
 * Returns the first 50 items from an RSS feed
 *
 * @param 	string 		$feed 		A RSS2 feed
 * @return 	array 					An array of SimpleFeed item objects
 */
function city_limitless_get_feed( $feed ) {

	$feed = fetch_feed( $feed );

	if ( ! is_wp_error( $feed ) ) {

		$feed->init();
		$feed->set_output_encoding( 'UTF-8' );
		$feed->handle_content_type();
		$feed->set_cache_duration( 7200 ); // two hours

		$limit = $feed->get_item_quantity( 50 );
		$items = $feed->get_items( 0, $limit );

	}

	if ( 0 == $limit ) { return FALSE; }

	return $items;

} // city_limitless_get_feed()


function city_limitless_excerpt_length( $length ) {

    if ( is_home() || is_front_page() ) {

    	return 30;

    } else {

    	return $length;

    }

}
add_action( 'excerpt_length',  'city_limitless_excerpt_length'  );





