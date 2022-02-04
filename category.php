<?php
/**
 * look created by ThemeRuby
 * This file display category layout
 */

get_header();

$look_ruby_page_cat_id = look_ruby_core::get_page_cat_id();

$look_ruby_meta_cat = get_option( 'look_ruby_cat_option' ) ? get_option( 'look_ruby_cat_option' ) : array();
if ( array_key_exists( $look_ruby_page_cat_id, $look_ruby_meta_cat ) ) {
	$look_ruby_meta_cat = $look_ruby_meta_cat[ $look_ruby_page_cat_id ];
}

$look_ruby_options = array();
if ( ! empty( $look_ruby_meta_cat['look_ruby_cat_layout'] ) && 'default' != $look_ruby_meta_cat['look_ruby_cat_layout'] ) {
	$look_ruby_options['blog_layout'] = $look_ruby_meta_cat['look_ruby_cat_layout'];
} else {
	$look_ruby_options['blog_layout'] = look_ruby_core::get_option( 'category_layout' );
}

if ( ! empty( $look_ruby_meta_cat['look_ruby_cat_pagination'] ) && 'default' != $look_ruby_meta_cat['look_ruby_cat_pagination'] ) {
	$look_ruby_options['blog_pagination'] = $look_ruby_meta_cat['look_ruby_cat_pagination'];
} else {
	$look_ruby_options['blog_pagination'] = look_ruby_core::get_option( 'category_pagination' );
}

if ( ! empty( $look_ruby_meta_cat['look_ruby_cat_sidebar'] ) && 'default' != $look_ruby_meta_cat['look_ruby_cat_sidebar'] ) {
	$look_ruby_options['blog_sidebar_position'] = $look_ruby_meta_cat['look_ruby_cat_sidebar'];
} else {
	$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'category_sidebar_position' );
}

if ( 'default' == $look_ruby_options['blog_sidebar_position'] ) {
	$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'site_sidebar_position' );
}

if ( ! empty( $look_ruby_meta_cat['look_ruby_cat_big_first'] ) ) {
	if ( 'default' != $look_ruby_meta_cat['look_ruby_cat_big_first'] ) {
		$look_ruby_options['big_first'] = $look_ruby_meta_cat['look_ruby_cat_big_first'];
	} else {
		$look_ruby_options['big_first'] = look_ruby_core::get_option( 'category_big_post_first' );
	}
} else {
	$look_ruby_options['big_first'] = 0;
}

if ( ! empty( $look_ruby_meta_cat['look_ruby_cat_sidebar_name'] ) && 'look_ruby_default_from_theme_options' != $look_ruby_meta_cat['look_ruby_cat_sidebar_name'] ) {
	$look_ruby_options['blog_sidebar_name'] = $look_ruby_meta_cat['look_ruby_cat_sidebar_name'];
} else {
	$look_ruby_options['blog_sidebar_name'] = look_ruby_core::get_option( 'category_sidebar' );
}

echo look_ruby_render_page_header_category( $look_ruby_meta_cat );

look_ruby_blog_layout( $look_ruby_options );

get_footer();