<?php
/*
Template Name: Page Composer
*/

get_header();

echo look_ruby_composer_render::render_page();

$look_ruby_composer_latest_loop = get_post_meta( get_the_ID(), 'look_ruby_composer_latest', true );
if ( 1 == $look_ruby_composer_latest_loop ) {
	echo look_ruby_template_composer_loop::render();
}

get_footer();