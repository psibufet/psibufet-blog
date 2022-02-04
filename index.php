<?php
/**
 * look created by ThemeRuby
 * This file display home layout
 */

get_header();

$look_ruby_options                          = array();
$look_ruby_options['big_first']             = look_ruby_core::get_option( 'big_post_first' );
$look_ruby_options['blog_layout']           = look_ruby_core::get_option( 'blog_layout' );
$look_ruby_options['blog_sidebar_name']     = look_ruby_core::get_option( 'blog_sidebar' );
$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'blog_sidebar_position' );

if ( 'default' == $look_ruby_options['blog_sidebar_position'] ) {
	$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'site_sidebar_position' );
}

echo look_ruby_feat();
get_template_part( 'templates/section', 'column' );
look_ruby_blog_layout( $look_ruby_options );
get_footer();