<?php
/**
 * Ruskin Park functions and definitions
 *
 * @package Ruskin Park
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600; /* pixels */
}

if ( ! function_exists( 'ruskin_park_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ruskin_park_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Ruskin Park, use a find and replace
	 * to change 'ruskin-park' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ruskin-park', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size('large-thumb', 600, 300, true);
    add_image_size('index-thumb', 600, 150, true);
    add_image_size('page-img', 800, 600, false);
 add_image_size('news-thumb', 250, 120, false);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ruskin-park' ),
        'secondary' => __( 'SubNav Menu', 'ruskin-park' ),
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
	add_theme_support( 'post-formats', array(
		'aside','link'
	) );

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'ruskin_park_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif; // ruskin_park_setup
add_action( 'after_setup_theme', 'ruskin_park_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ruskin_park_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ruskin-park' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
        'name'          => __( 'NavSidebar', 'ruskin-park' ),
        'id'            => 'sidebar-2',
        'description'   => 'Sub navigation sidebar',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );


    register_sidebar( array(
        'name'          => __( 'Events', 'ruskin-park' ),
        'id'            => 'sidebar-3',
        'description'   => 'Sub navigation sidebar',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Gallery', 'ruskin-park' ),
        'id'            => 'sidebar-4',
        'description'   => 'Sub navigation sidebar',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'News', 'ruskin-park' ),
        'id'            => 'sidebar-5',
        'description'   => 'Sub navigation sidebar',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'ruskin_park_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ruskin_park_scripts() {
	wp_enqueue_style( 'ruskin-park-style', get_stylesheet_uri() );

    wp_enqueue_style('ruskin-park-style-css', 'http://54.69.191.156/forp/css/styles.css');

	wp_enqueue_script( 'ruskin-park-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ruskin-park-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ruskin_park_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
