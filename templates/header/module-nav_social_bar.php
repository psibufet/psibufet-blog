<?php
// check option
$look_ruby_header_social_bar = look_ruby_core::get_option( 'main_navigation_social_bar' );
if ( empty( $look_ruby_header_social_bar ) ) {
	return false;
}

if ( ! empty( $look_ruby_header_social_bar ) ) {
	$look_ruby_social_data = look_ruby_social_data::web_data();
}

if ( ! empty( $look_ruby_social_data ) && class_exists( 'look_ruby_social_bar' ) ) {
	echo look_ruby_social_bar::render( $look_ruby_social_data, 'nav-social-wrap', true, false, true );
}