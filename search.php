<?php
/**
 * This file display search page
 */

get_header();

$look_ruby_options                          = array();
$look_ruby_options['big_first']             = 0;
$look_ruby_options['blog_layout']           = look_ruby_core::get_option( 'search_layout' );
$look_ruby_options['blog_sidebar_name']     = look_ruby_core::get_option( 'search_sidebar' );
$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'search_sidebar_position' );
if ( 'default' == $look_ruby_options['blog_sidebar_position'] ) {
	$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'site_sidebar_position' );
}


echo look_ruby_render_page_header_search();

if ( have_posts() ) {
	look_ruby_blog_layout( $look_ruby_options );
} else {
	echo look_ruby_render_search_not_found();
}

get_footer();