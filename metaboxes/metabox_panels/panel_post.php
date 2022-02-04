<?php
//meta box post config
if ( ! function_exists( 'look_ruby_metabox_single_post' ) ) {
	function look_ruby_metabox_single_post() {
		return array(
			'id'         => 'look_ruby_metabox_single_post_options',
			'title'      => esc_html__( 'POST OPTIONS', 'look' ),
			'post_types' => array( 'post' ),
			'priority'   => 'high',
			'context'    => 'normal',
			'fields'     => array(

				array(
					'id'      => 'look_ruby_template_single',
					'type'    => 'image_select',
					'name'    => esc_html__( 'post layout', 'look' ),
					'desc'    => esc_html__( 'Select layout for this post', 'look' ),
					'options' => look_ruby_theme_config::metabox_single_layout(),
					'std'     => 'default'
				),
				array(
					'name'        => esc_html__( 'Primary Category', 'look' ),
					'id'          => 'look_ruby_single_primary_category',
					'type'        => 'taxonomy_advanced',
					'taxonomy'    => 'category',
					'placeholder' => esc_html__( 'Select a category', 'look' ),
					'desc'        => esc_html__( 'If the posts has multiple category, You can one select here and it will appears in the meta category info.', 'look' ),
					'field_type'  => 'select',
					'std'         => ''
				)
			),
		);
	}
}

/**
 * @return array
 * metabox single post subtitle
 */
if ( ! function_exists( 'look_ruby_metabox_single_post_subtitle' ) ) {
	function look_ruby_metabox_single_post_subtitle() {
		return array(
			'id'         => 'look_ruby_metabox_section_single_post_subtitle',
			'title'      => esc_attr__( 'SUBTITLE OPTION', 'look' ),
			'post_types' => array( 'post' ),
			'priority'   => 'high',
			'context'    => 'normal',
			'fields'     => array(
				array(
					'id'   => 'look_ruby_meta_post_subtitle',
					'name' => esc_attr__( 'Post Subtitle', 'look' ),
					'desc' => esc_attr__( 'input subtitle for this post, it will show at under the post title', 'look' ),
					'type' => 'text',
					'std'  => ''
				)
			)
		);
	}
}

if ( ! function_exists( 'look_ruby_metabox_s_post_toc' ) ) {
    function look_ruby_metabox_s_post_toc() {

        return array(
            'id'         => 'look_ruby_metabox_s_post_toc',
            'title'      => esc_html__( 'TABLE OF CONTENTS', 'look' ),
            'post_types' => array( 'post' ),
            'priority'   => 'high',
            'context'    => 'normal',
            'fields'     => array(
                array(
                    'id'      => 'table_contents_post',
                    'name'    => esc_html__( 'Table of Contents', 'look' ),
                    'desc'    => esc_html__( 'Enable or disable the table content for this post.', 'look' ),
                    'type'    => 'select',
                    'options' => array(
                        'default' => esc_html__( '- Default -', 'look' ),
                        '1'       => esc_html__( 'Enable', 'look' ),
                        '-1'      => esc_html__( 'Disable', 'look' )
                    ),
                    'default' => 'default'
                ),
                array(
                    'id'      => 'table_contents_layout',
                    'name'    => esc_html__( 'layout', 'look' ),
                    'desc'    => esc_html__( 'Select a layout for the table of contents of this post.', 'look' ),
                    'type'    => 'select',
                    'options' => array(
                        'default' => esc_html__( '- Default -', 'look' ),
                        '1'       => esc_html__( 'Full Width', 'look' ),
                        '2'       => esc_html__( 'Half Width', 'look' )
                    ),
                    'default' => 'default'
                ),
                array(
                    'id'      => 'table_contents_position',
                    'type'    => 'text',
                    'name'    => esc_html__( 'Display Position', 'look' ),
                    'desc'    => esc_html__( 'Input a position (After x paragraph) to display the table of contents box. Leave blank to use the theme option setting, Set "-1" for displaying at the top.', 'look' ),
                    'default' => ''
                ),
            ),
        );
    }
}
