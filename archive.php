<?php
/**
 * This file render archive page
 */

get_header();

$look_ruby_options                          = array();
$look_ruby_options['blog_layout']           = look_ruby_core::get_option( 'archive_layout' );
$look_ruby_options['blog_sidebar_name']     = look_ruby_core::get_option( 'archive_sidebar' );
$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'archive_sidebar_position' );
$look_ruby_options['big_first']             = 0;

if ( 'default' == $look_ruby_options['blog_sidebar_position'] ) {
	$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'site_sidebar_position' );
}

echo look_ruby_render_header_page_archive();

look_ruby_blog_layout( $look_ruby_options );

get_footer();