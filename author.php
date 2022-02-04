<?php
/**
 * This file render author blog listing
 */

get_header();

$look_ruby_options                          = array();
$look_ruby_options['big_first']             = 0;
$look_ruby_options['blog_layout']           = look_ruby_core::get_option( 'author_layout' );
$look_ruby_options['blog_sidebar_name']     = look_ruby_core::get_option( 'author_sidebar' );
$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'author_sidebar_position' );

if ( 'default' == $look_ruby_options['blog_sidebar_position'] ) {
	$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'site_sidebar_position' );
}

look_ruby_blog_author_layout( $look_ruby_options );

get_footer();