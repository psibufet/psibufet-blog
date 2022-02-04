<?php
$look_ruby_infinite_scroll = look_ruby_core::get_option( 'single_post_infinite_scroll' );
$look_ruby_pre_post        = get_previous_post();
if ( ! empty( $look_ruby_infinite_scroll ) && ! empty( $look_ruby_pre_post ) ) {
	//enable for ajax cal
	global $withcomments;
	$withcomments = true;
}

comments_template();

	