<?php
/*
 * This page display single page
 */

get_header();

$look_ruby_page_title         = look_ruby_single::check_page_title();
$look_ruby_sidebar_position   = look_ruby_single::get_sidebar_position_page();
$look_ruby_sidebar_name       = look_ruby_single::get_sidebar_name_page();
$look_ruby_page_content_width = get_post_meta( get_the_ID(), 'look_ruby_page_content_width', true );

look_ruby_template_wrapper::open_page_wrap( 'single-wrap', $look_ruby_sidebar_position );
look_ruby_template_wrapper::open_page_inner( 'single-inner', $look_ruby_sidebar_position );

if ( have_posts() ) {
	if ( ! empty( $look_ruby_page_content_width ) && ( 'none' == $look_ruby_sidebar_position ) ) {
		echo '<div class="post-wrap single-page-post" style="max-width: ' . intval( esc_attr( $look_ruby_page_content_width ) ) . 'px">';
	} else {
		echo '<div class="post-wrap single-page-post">';
	}

	while ( have_posts() ) {

		the_post();

		$page_title = get_the_title();

		if ( ! empty( $look_ruby_page_title ) && 'none' != $look_ruby_page_title && ! empty( $page_title ) ) {
			echo '<div class="single-header">';
			echo '<div class="single-title post-title is-big-title">';
			echo '<h1 class="entry-title">' . $page_title . '</h1>';
			echo '</div>';
			if ( has_post_thumbnail() ) {
				echo look_ruby_template_thumbnail::render_image_single( 'full' );
			}
			echo '</div>';
		}

		echo '<div class="entry">';
		the_content();

		echo '<div class="clearfix"></div>';
		wp_link_pages(
			array(
				'before'      => '<div class="single-page-links"><div class="pagination-num">',
				'after'       => '</div></div>',
				'link_before' => '<span class="page-numbers">',
				'link_after'  => '</span>',
				'echo'        => true
			)
		);
		echo '</div>';

		get_template_part( 'templates/single/box', 'comment' );
	}

	echo '</div>';
}


look_ruby_template_wrapper::close_page_inner();

if ( ! empty( $look_ruby_sidebar_position ) && 'none' != $look_ruby_sidebar_position ) {
	look_ruby_template_wrapper::sidebar( $look_ruby_sidebar_name );
}

look_ruby_template_wrapper::close_page_wrap();

get_footer();