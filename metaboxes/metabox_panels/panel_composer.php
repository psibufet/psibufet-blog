<?php
//meta box page composer config
if ( ! function_exists( 'look_ruby_metabox_composer' ) ) {
	function look_ruby_metabox_composer() {
		return array(
			'id'         => 'look_ruby_metabox_composer_options',
			'title'      => esc_html__( 'COMPOSER LATEST BLOG', 'look' ),
			'post_types' => array( 'page' ),
			'priority'   => 'default',
			'context'    => 'normal',
			'fields'     => array(
				array(
					'id'      => 'look_ruby_composer_latest',
					'name'    => esc_html__( 'latest blog listing section', 'look' ),
					'desc'    => esc_html__( 'enable or disable latest blog listing section', 'look' ),
					'type'    => 'select',
					'options' => array(
						'0' => esc_html__( '--Disable--', 'look' ),
						'1' => esc_html__( 'Enable', 'look' )
					),
					'std'     => '0'
				),
				array(
					'id'   => 'look_ruby_composer_latest_title',
					'name' => esc_html__( 'latest blog title', 'look' ),
					'desc' => esc_html__( 'input title for latest blog listing', 'look' ),
					'type' => 'text',
					'std'  => esc_html__( 'latest posts', 'look' )
				),
				array(
					'id'      => 'look_ruby_composer_latest_layout',
					'name'    => esc_html__( 'latest blog layout', 'look' ),
					'desc'    => esc_html__( 'select layout for latest blog listing', 'look' ),
					'type'    => 'image_select',
					'options' => look_ruby_theme_config::metabox_blog_layout(),
					'std'     => 'layout_list'
				),
				array(
					'id'      => 'look_ruby_composer_latest_big_first',
					'name'    => esc_html__( '1st Classic Layout', 'look' ),
					'desc'    => esc_html__( 'enable or disable 1st classic layout', 'look' ),
					'type'    => 'select',
					'options' => array(
						'0' => esc_html__( '--Disable--', 'look' ),
						'1' => esc_html__( 'Enable', 'look' )
					),
					'std'     => '0'
				),
				array(
					'id'   => 'look_ruby_composer_latest_category',
					'name' => esc_html__( 'Category filter', 'look' ),
					'desc' => esc_html__( 'input category ids you want to filter, separated by commas (example: 1,2,3). Please blank if you want to display all', 'look' ),
					'type' => 'text',
					'std'  => ''
				),
				array(
					'id'   => 'look_ruby_composer_latest_number',
					'name' => esc_html__( 'number of posts', 'look' ),
					'desc' => esc_html__( 'select number of posts for latest blog listing', 'look' ),
					'type' => 'text',
					'std'  => '6'
				),
				array(
					'id'   => 'look_ruby_composer_latest_offset',
					'name' => esc_html__( 'post offset', 'look' ),
					'desc' => esc_html__( 'Number of post to displace or pass over', 'look' ),
					'type' => 'text',
					'std'  => '',
				),
				array(
					'id'      => 'look_ruby_composer_latest_unique',
					'name'    => esc_html__( 'Unique Posts', 'look' ),
					'desc'    => esc_html__( 'Enable or disable unique post for this section.', 'look' ),
					'type'    => 'select',
					'options' => array(
						'default' => esc_html__( 'Default form Theme Options', 'look' ),
						'1'       => esc_html__( 'Enable', 'look' ),
						'0'       => esc_html__( 'Disable', 'look' ),
					),
					'std'     => 'default',
				),
				array(
					'id'      => 'look_ruby_composer_latest_sidebar',
					'type'    => 'select',
					'name'    => esc_html__( 'sidebar name', 'look' ),
					'desc'    => esc_html__( 'Select sidebar for latest blog listing', 'look' ),
					'options' => look_ruby_theme_config::sidebar_name( false ),
					'std'     => 'look_ruby_sidebar_default'
				),
				array(
					'id'       => 'look_ruby_composer_latest_sidebar_position',
					'class'    => 'ruby-sidebar-select',
					'name'     => esc_html__( 'sidebar position', 'look' ),
					'desc'     => esc_html__( 'select sidebar position for latest blog listing', 'look' ),
					'type'     => 'image_select',
					'multiple' => false,
					'options'  => look_ruby_theme_config::metabox_composer_sidebar_position(),
					'std'      => 'right'
				),
				array(
					'id'      => 'look_ruby_composer_sidebar_sticky',
					'name'    => esc_html__( 'Sticky Sidebar', 'look' ),
					'desc'    => esc_html__( 'Enable or disable sidebar sticky for this section.', 'look' ),
					'type'    => 'select',
					'options' => array(
						'default' => esc_html__( 'Default form Theme Options', 'look' ),
						'stick'   => esc_html__( 'Stick', 'look' ),
						'none'    => esc_html__( 'None', 'look' ),
					),
					'std'     => 'default',
				),
			)
		);
	}
}