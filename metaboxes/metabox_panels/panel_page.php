<?php

//meta box page config
if ( ! function_exists( 'look_ruby_metabox_single_page' ) ) {
	function look_ruby_metabox_single_page() {
		return array(
			'id'         => 'look_ruby_metabox_single_page_options',
			'title'      => esc_html__( 'PAGE OPTIONS', 'look' ),
			'post_types' => array( 'page' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'fields'     => array(
				array(
					'id'      => 'look_ruby_page_title',
					'type'    => 'select',
					'name'    => esc_html__( 'page title', 'look' ),
					'desc'    => esc_html__( 'Enable or disable for this page, This option will override "Theme Options -> Page Settings -> Single Page -> Title" option', 'look' ),
					'options' => array(
						'default' => esc_html__( 'Default From Theme Options', 'look' ),
						'show'    => esc_html__( 'Show', 'look' ),
						'none'    => esc_html__( 'None', 'look' )
					),
					'std'     => 'default'
				),
				array(
					'id'   => 'look_ruby_page_content_width',
					'type' => 'text',
					'name' => esc_html__( 'content max width', 'look' ),
					'desc' => esc_html__( 'input max width value (in px) of the content of this page when you disable sidebar. Please blank or set O if you want set default value.', 'look' ),
					'std'  => ''
				)
			)
		);
	}
}

if ( ! function_exists( 'look_ruby_metabox_s_page_toc' ) ) {
    function look_ruby_metabox_s_page_toc() {

        return array(
            'id'         => 'look_ruby_metabox_s_page_toc',
            'title'      => esc_html__( 'TABLE OF CONTENTS', 'look' ),
            'post_types' => array( 'page' ),
            'priority'   => 'high',
            'context'    => 'normal',
            'fields'     => array(
                array(
                    'id'      => 'table_contents_page',
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