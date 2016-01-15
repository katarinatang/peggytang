<?php
/**
 * Starter Theme functions and definitions
 *
 * @package WordPress
 * @subpackage Starter Theme
 * @since Starter Theme LA 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Starter Theme 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Starter Theme only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/includes/back-compat.php';
}

/**
 * Define the version in case we need to do version checks. 
 */
if ( ! defined( 'STARTERTHEME_VERSION' ) )
  define( 'STARTERTHEME_VERSION', '1.0' );


if ( ! function_exists( 'startertheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Starter Theme 1.0f
 */
function startertheme_setup() {

	/* Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */ 
	 
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	/**
	 * Register WP Nav Menu
	 * This theme uses wp_nav_menu() in two locations.
	 */
	
	/**
	 * 
	 */
	register_nav_menus( array(
		'main_menu' 	=> __( 'Main Menu',   'startertheme' ),
		'footer_menu' => __( 'Footer Menu', 'startertheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
}
endif; // startertheme_setup
add_action( 'after_setup_theme', 'startertheme_setup' );


/**
 * Enqueue scripts and styles.
 *
 * @since 1.0
 */
function startertheme_enqueue_scripts() {

	$js_path  					= get_stylesheet_directory_uri() . '/assets/js/';
	$css_path 					= get_stylesheet_directory_uri() . '/assets/css/';
	$component_path 		= get_stylesheet_directory_uri() . '/components/';

	// @TODO get this working in gulpfile
	// wp_enqueue_style(  'fontawesome', $component_path . 'font-awesome/css/font-awesome.min.css', STARTERTHEME_VERSION, true );
	// wp_enqueue_style(  'animate', $component_path . 'animate.css/animate.min.css', STARTERTHEME_VERSION, true );

	// Enqueue Styles
	wp_enqueue_style( 'style', $css_path . 'style.min.css', STARTERTHEME_VERSION, true );

	wp_enqueue_script( 'jquery' );

	// Enqueue Scripts
	// wp_enqueue_script( 'wow', $component_path . 'wowjs/dist/wow.min.js', STARTERTHEME_VERSION, true );
	wp_enqueue_script( 'app', $js_path . 'app.js', STARTERTHEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'startertheme_enqueue_scripts' );



/**
 * Require includes
 *
 * @since 1.0
 */
function startertheme_init() {

	// EX include: images
	// require_once get_stylesheet_directory() . '/includes/images.php';

}
add_action( 'init', 'startertheme_init' );
