<?php
//post options
if ( ! function_exists( 'look_ruby_theme_options_single' ) ) {
	function look_ruby_theme_options_single() {

		return array(
			'title'  => esc_html__( 'Single Options', 'look' ),
			'id'     => 'look_ruby_theme_ops_section_single_post',
			'desc'   => esc_html__( 'Select options for single post page', 'look' ),
			'icon'   => 'el el-file',
			'fields' => array(
				array(
					'id'     => 'section_start_single_post_options',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'single post layout option', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'default_single_post_layout',
					'type'     => 'image_select',
					'title'    => esc_html__( 'single layout', 'look' ),
					'subtitle' => esc_html__( 'select default layout for single post', 'look' ),
					'options'  => look_ruby_theme_config::single_layout(),
					'default'  => 'style_1',
				),
				array(
					'id'       => 'single_content_margin',
					'title'    => esc_html__( 'Left Content Margin', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable the left content margin', 'look' ),
					'type'     => 'switch',
					'default'  => '1',
				),
				array(
					'id'     => 'section_end_single_post_options',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_single_infinite_scroll_options',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'infinite loading option', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'single_post_infinite_scroll',
					'title'    => esc_html__( 'infinite loading posts', 'look' ),
					'subtitle' => esc_html__( 'enable or disable infinite scrolling to load previous article', 'look' ),
					'type'     => 'switch',
					'default'  => '0',
				),
				array(
					'id'       => 'single_post_scroll_hide_sidebar',
					'title'    => esc_html__( 'Hide Sidebar On Mobile', 'look' ),
					'subtitle' => esc_html__( 'Hide the sidebar in the single page when enable infinite scroll on mobile devices', 'look' ),
					'required' => array( 'single_post_infinite_scroll', '=', '1' ),
					'type'     => 'switch',
					'default'  => '1',
				),
				array(
					'id'     => 'section_end_single_infinite_scroll_options',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_single_post_styling_options',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'meta info options', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'single_post_category_info',
					'title'    => esc_html__( 'Single category info', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable category information bar in single page', 'look' ),
					'type'     => 'switch',
					'default'  => 1
				),
				array(
					'id'       => 'single_post_meta_info_manager',
					'type'     => 'sorter',
					'title'    => esc_html__( 'entry meta bar manager', 'look' ),
					'subtitle' => esc_html__( 'Organize how you want the entry meta bar to appear on single page', 'look' ),
					'options'  => array(
						'enabled'  => array(
							'author' => esc_html__( 'Author', 'look' ),
							'date'   => esc_html__( 'Date', 'look' ),
						),
						'disabled' => array(
							'cat'     => esc_html__( 'Category', 'look' ),
							'comment' => esc_html__( 'Comment', 'look' ),
							'tag'     => esc_html__( 'Tags', 'look' ),
							'view'    => esc_html__( 'View', 'look' ),
                            'read'    => esc_html__( 'Reading Time', 'look' ),
						)
					),
				),
				array(
					'id'       => 'single_post_share_bar',
					'type'     => 'switch',
					'title'    => esc_html__( 'social share icons', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable share on social bar at top of the content of single page', 'look' ),
					'switch'   => true,
					'default'  => 1
				),
				array(
					'id'       => 'default_single_post_review_position',
					'title'    => esc_html__( 'Review Box Position', 'look' ),
					'subtitle' => esc_html__( 'Select review position in single post page', 'look' ),
					'type'     => 'image_select',
					'options'  => look_ruby_theme_config::review_position(),
					'default'  => 'left_top'
				),
				array(
					'id'       => 'single_post_image_popup',
					'type'     => 'switch',
					'title'    => esc_html__( 'image popup', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable popup image in single content', 'look' ),
					'switch'   => true,
					'default'  => 1
				),
				array(
					'id'     => 'section_end_single_post_styling_options',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_single_post_box_options',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'share to socials options', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'single_post_box_author',
					'type'     => 'switch',
					'title'    => esc_html__( 'Show Author Box', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable the author box', 'look' ),
					'switch'   => true,
					'default'  => 1
				),
				array(
					'id'       => 'default_single_post_box_comment',
					'type'     => 'switch',
					'title'    => esc_html__( 'Comment Box', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable the comments on the pages, Default this option is disable', 'look' ),
					'switch'   => true,
					'default'  => 1
				),
				array(
					'id'       => 'enable_website_comment_box',
					'type'     => 'switch',
					'title'    => esc_html__( 'Show Website Input Form', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable website input form', 'look' ),
					'switch'   => true,
					'required' => array( 'default_single_post_box_comment', '=', '1' ),
					'default'  => 1
				),
				array(
					'id'       => 'single_post_box_navigation',
					'type'     => 'switch',
					'title'    => esc_html__( 'Show Next and Pre Posts', 'look' ),
					'subtitle' => esc_html__( 'Show or hide `next` and `previous` posts', 'look' ),
					'switch'   => true,
					'default'  => 1
				),
				array(
					'id'       => 'single_post_social_like',
					'type'     => 'switch',
					'title'    => esc_html__( 'Show Post LIKE/TWEET/G+', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable the post like/tweet/g+ on post', 'look' ),
					'switch'   => true,
					'default'  => 0
				),
				array(
					'id'     => 'section_end_single_post_box_options',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_single_post_box_related',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'related post options', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'single_post_related_box',
					'type'     => 'switch',
					'title'    => esc_html__( 'Related posts', 'look' ),
					'subtitle' => esc_html__( 'Enable or disable the related posts on the single post page', 'look' ),
					'switch'   => true,
					'default'  => 1
				),
				array(
					'id'       => 'single_post_related_box_title',
					'title'    => esc_html__( 'Related box title', 'look' ),
					'subtitle' => esc_html__( 'input the the title for related box', 'look' ),
					'type'     => 'text',
					'required' => array( 'single_post_related_box', '=', '1' ),
					'default'  => 'you might also like'
				),
				array(
					'id'       => 'single_post_related_where',
					'type'     => 'select',
					'required' => array( 'single_post_related_box', '=', '1' ),
					'title'    => esc_html__( 'Display Related Posts', 'look' ),
					'subtitle' => esc_html__( 'What posts should be displayed', 'look' ),
					'options'  => array(
						'all'        => esc_html__( 'Same tags & categories', 'look' ),
						'tag'       => esc_html__( 'Same tags', 'look' ),
						'cat' => esc_html__( 'Same categories', 'look' ),
					),
					'default'  => 'all'
				),
				array(
					'id'       => 'single_post_related_number_of_post',
					'type'     => 'text',
					'required' => array( 'single_post_related_box', '=', '1' ),
					'class'    => 'small-text',
					'validate' => 'numeric',
					'title'    => esc_html__( 'Number of Related Posts', 'look' ),
					'subtitle' => esc_html__( 'select number of related posts', 'look' ),
					'default'  => 3
				),
				array(
					'id'     => 'section_end_single_post_related_box',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_single_post_sidebar',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'sidebar options', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'default_single_post_sidebar',
					'type'     => 'select',
					'title'    => esc_html__( 'Default Post Sidebar', 'look' ),
					'subtitle' => esc_html__( 'Select sidebar for single post page', 'look' ),
					'options'  => look_ruby_theme_config::sidebar_name(),
					'default'  => 'look_ruby_sidebar_default'
				),
				array(
					'id'       => 'default_single_post_sidebar_position',
					'type'     => 'image_select',
					'title'    => esc_html__( 'Default Sidebar Position', 'look' ),
					'subtitle' => esc_html__( 'Select Position sidebar for single post page, this option will override default sidebar position option.', 'look' ),
					'options'  => look_ruby_theme_config::sidebar_position(),
					'default'  => 'default'
				),
				array(
					'id'     => 'section_end_single_post_sidebar',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_single_ad_top',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Single post top advertising', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'single_ad_top_type',
					'type'     => 'select',
					'title'    => esc_html__( 'single post - top advertising type', 'look' ),
					'subtitle' => esc_html__( 'select advertising type, this advertising will display at the top post content of single post page', 'look' ),
					'options'  => array(
						'script' => esc_html__( 'Script', 'look' ),
						'custom' => esc_html__( 'Custom Image', 'look' ),
					),
					'default'  => 'script',
				),
				array(
					'id'       => 'single_ad_top_script',
					'type'     => 'textarea',
					'validate' => 'js',
					'required' => array( 'single_ad_top_type', '=', 'script' ),
					'title'    => esc_html__( 'advertising code', 'look' ),
					'subtitle' => esc_html__( 'Paste in your advertising code (with "script" tag), the theme will modify the codes to responsive your advertising on all devices.', 'look' ),
				),
				array(
					'id'       => 'single_ad_top_image',
					'type'     => 'media',
					'url'      => true,
					'preview'  => true,
					'required' => array( 'single_ad_top_type', '=', 'custom' ),
					'title'    => esc_html__( 'advertising image', 'look' ),
					'subtitle' => esc_html__( 'upload your advertising image (recommended size is about 728x90px)', 'look' ),
				),
				array(
					'id'       => 'single_ad_top_url',
					'type'     => 'text',
					'required' => array( 'single_ad_top_type', '=', 'custom' ),
					'title'    => esc_html__( 'advertising URL', 'look' ),
					'subtitle' => esc_html__( 'input your custom advertising URL', 'look' ),
					'validate' => 'url',
					'default'  => '',
				),
				array(
					'id'     => 'section_end_single_ad_top',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_single_ad_bottom',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'single post bottom advertising', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'single_ad_bottom_type',
					'type'     => 'select',
					'title'    => esc_html__( 'single post - bottom advertising type', 'look' ),
					'subtitle' => esc_html__( 'select advertising type, this advertising will display at the bottom post content of single post page', 'look' ),
					'options'  => array(
						'script' => esc_html__( 'Script', 'look' ),
						'custom' => esc_html__( 'Custom Image', 'look' ),
					),
					'default'  => 'script',
				),
				array(
					'id'       => 'single_ad_bottom_script',
					'type'     => 'textarea',
					'validate' => 'js',
					'required' => array( 'single_ad_bottom_type', '=', 'script' ),
					'title'    => esc_html__( 'advertising code', 'look' ),
					'subtitle' => esc_html__( 'Paste in your entire advertising code', 'look' ),
				),
				array(
					'id'       => 'single_ad_bottom_image',
					'type'     => 'media',
					'url'      => true,
					'preview'  => true,
					'required' => array( 'single_ad_bottom_type', '=', 'custom' ),
					'title'    => esc_html__( 'advertising image', 'look' ),
					'subtitle' => esc_html__( 'upload your advertising image (recommended size is about 728x90px)', 'look' ),
				),
				array(
					'id'       => 'single_ad_bottom_url',
					'type'     => 'text',
					'required' => array( 'single_ad_bottom_type', '=', 'custom' ),
					'title'    => esc_html__( 'advertising URL', 'look' ),
					'subtitle' => esc_html__( 'input your custom advertising URL', 'look' ),
					'validate' => 'url',
					'default'  => '',
				),
				array(
					'id'     => 'section_end_single_ad_bottom',
					'type'   => 'section',
					'class'  => 'ruby-section-end no-border',
					'indent' => false
				)

			)
		);
	}
}
