<?php
/**
 * look functions and definitions
 * @package look
 */
define( 'LOOK_THEME_VERSION', '5.6' );

add_action( 'wp_enqueue_scripts', 'look_add_default_fonts', 5 );
add_action( 'enqueue_block_editor_assets', 'look_block_editor_styles', 90 );
add_action( 'enqueue_block_editor_assets', 'look_editor_dynamic', 99 );
add_action( 'after_setup_theme', 'look_ruby_theme_setup', 5 );
add_action( 'after_setup_theme', 'look_ruby_add_image_size', 10 );

load_theme_textdomain( 'look', get_template_directory() . '/languages' );

if ( ! function_exists( 'get_plugins' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
require_once get_theme_file_path( '/includes/theme_includes.php' );

if ( ! function_exists( 'look_ruby_theme_setup' ) ) {
	function look_ruby_theme_setup() {

		if ( ! isset( $GLOBALS['content_width'] ) ) {
			$GLOBALS['content_width'] = 1200;
		}

		if ( ! isset( $GLOBALS['look_ruby_unique'] ) ) {
			$GLOBALS['look_ruby_unique'] = array();
		}

        $settings = get_option( 'look_ruby_theme_options' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style'
		) );
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );
		add_theme_support( 'editor-style' );
        if ( ! empty( $settings['widget_block'] ) ) {
            remove_theme_support( 'widgets-block-editor' );
        }

		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		register_nav_menu( 'look_ruby_main_navigation', esc_html__( 'Main Navigation', 'look' ) );
		register_nav_menu( 'look_ruby_off_canvas_navigation', esc_html__( 'Off Canvas Navigation', 'look' ) );
		register_nav_menu( 'look_ruby_top_navigation', esc_html__( 'Top Navigation', 'look' ) );
	}
}

if ( ! function_exists( 'look_ruby_add_image_size' ) ) {
	function look_ruby_add_image_size() {

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'look_ruby_1600_0', 1600, 0, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_1400_800', 1400, 800, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_1400_580', 1400, 580, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_760_510', 760, 510, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_300_300', 300, 300, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_300_270', 300, 270, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_360_250', 360, 250, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_320_400', 320, 400, array( 'center', 'top' ) );
		add_image_size( 'look_ruby_110x85', 110, 85, array( 'center', 'top' ) );
	}
}

/* ACF local JSON */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}

function blog_scirpts(){
	wp_enqueue_style( 'blog-custom-css', get_template_directory_uri() . '/css/custom.css', array());
	
	// jQuery
	wp_register_script( 'jquery', get_template_directory_uri() . '/plugins/jQuery/jquery-2.2.4.min.js', null, null, true );
	wp_enqueue_script('jquery');

	// custom js
	wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', null, null, true );
	wp_enqueue_script('custom-js');

	// SEO script
	wp_register_script( 'psibufet-blog-seo', get_template_directory_uri() . '/js/_seo.js', null, null, true );
	wp_enqueue_script('psibufet-blog-seo');
}
add_action( 'wp_enqueue_scripts', 'blog_scirpts' );

/**
 * Remove tag pages
 */
add_action('template_redirect', 'wpse69948_archive_disabler');
function wpse69948_archive_disabler(){
    if(is_tag() || is_date() || is_author()){
        global $wp_query;
        $wp_query->set_404();
    }
}