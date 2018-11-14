<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

if (!function_exists(disable_emojis)) {
	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	}
	add_action( 'init', 'disable_emojis' );
}
// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action( 'wp_head', 'wp_resource_hints', 2 );

remove_action('wp_head', 'wlwmanifest_link');

remove_action( 'wp_head', 'rsd_link' );
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'main-menu' => __( 'Главное меню', 'naked' ),// 'имя' => 'описание'
		'footer-menu' => __( 'Меню внизу', 'naked' )
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  { 
	$theme_uri = get_template_directory_uri();
	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add theme scripts
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', $theme_uri . '/js/libs/jquery-2.2.2.min.js', array(), '2.2.2', true );
	wp_register_script( 'magnific', $theme_uri . '/js/libs/jquery.magnific-popup-inline.js', array('jquery'), '1.1.0', true);

	wp_register_script( 'script', $theme_uri . '/js/script.js', array('jquery'), NAKED_VERSION, true);

    if(is_front_page() ){
        wp_register_script( 'api-maps', '//api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU', array(), false, false);
        wp_register_script( 'ymap', $theme_uri . '/js/map.js', array('api-maps'), NAKED_VERSION, false);

        wp_enqueue_script( 'api-maps');
        wp_enqueue_script( 'ymap');
    }

	// add magnific scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'magnific');

	wp_enqueue_script( 'script');

}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header
