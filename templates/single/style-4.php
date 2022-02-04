<?php

//single styling
$look_ruby_review                     = look_ruby_post_review::has_review();
$look_ruby_single_post_box_navigation = look_ruby_core::get_option( 'single_post_box_navigation' );
$look_ruby_sidebar_position           = look_ruby_single::get_sidebar_position_post();
$look_ruby_sidebar_name               = look_ruby_single::get_sidebar_name_post();

//render
look_ruby_template_wrapper::open_page_wrap( 'single-wrap single-style-4', $look_ruby_sidebar_position );
look_ruby_template_wrapper::open_page_inner( 'single-inner', $look_ruby_sidebar_position ); ?>
	<article id="post-<?php the_ID(); ?>" <?php look_ruby_markup_article(); ?> <?php post_class( 'post-wrap' ); ?>>
		<?php
		look_ruby_template_single::open_header( 'is-left' );
		look_ruby_template_single::post_cat_info();
		look_ruby_template_single::post_title();
		look_ruby_template_single::post_thumb( 'look_ruby_760_510' );
		look_ruby_template_single::post_meta_info_bar();
		look_ruby_template_single::close_header();
		look_ruby_template_single::post_content(); ?>
	</article>
<?php

if ( ! empty( $look_ruby_single_post_box_navigation ) ) {
	get_template_part( 'templates/single/box', 'navigation' );
}
get_template_part( 'templates/single/box', 'author' );
get_template_part( 'templates/single/box', 'related' );
get_template_part( 'templates/single/box', 'comment' );
look_ruby_template_wrapper::close_single_wrap();
look_ruby_template_wrapper::close_page_inner();

look_ruby_template_wrapper::sidebar( $look_ruby_sidebar_name );
look_ruby_template_wrapper::close_page_wrap();
