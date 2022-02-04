<?php
/**
 * this file config meta boxes for theme
 */

//theme directory
$look_ruby_theme_directory = get_template_directory();

//including config file
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_audio.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_gallery.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_video.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_post.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_page.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_review.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_sidebar.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_comment.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_credit.php';
require_once $look_ruby_theme_directory . '/metaboxes/metabox_panels/panel_composer.php';

if ( ! function_exists( 'look_ruby_theme_meta_boxes_config' ) ) {

	add_filter( 'rwmb_meta_boxes', 'look_ruby_theme_meta_boxes_config' );

	/**-------------------------------------------------------------------------------------------------------------------------
	 * @return array
	 * meta box config
	 */
	function look_ruby_theme_meta_boxes_config( $meta_boxes ) {

		//check
		if ( ! class_exists( 'RW_Meta_Box' ) ) {
			return false;
		}

		$meta_boxes[] = look_ruby_metabox_single_page();
        $meta_boxes[] = look_ruby_metabox_s_page_toc();
		$meta_boxes[] = look_ruby_metabox_single_post_subtitle();
		$meta_boxes[] = look_ruby_metabox_single_post();
        $meta_boxes[] = look_ruby_metabox_s_post_toc();
		$meta_boxes[] = look_ruby_metabox_credit_text();
		$meta_boxes[] = look_ruby_metabox_post_review();
		$meta_boxes[] = look_ruby_metabox_post_audio();
		$meta_boxes[] = look_ruby_metabox_post_video();
		$meta_boxes[] = look_ruby_metabox_post_gallery();
		$meta_boxes[] = look_ruby_metabox_sidebar();
		$meta_boxes[] = look_ruby_metabox_comment_box();
		$meta_boxes[] = look_ruby_metabox_composer();

		return $meta_boxes;
	}
};