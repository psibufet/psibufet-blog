<?php
/** Don't load directly */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'look_register_options_table_contents' ) ) {
    /**
     * @return array
     * table of contents
     */
    function look_register_options_table_contents() {
        return array(
            'title'  => esc_html__( 'Table of Contents', 'look' ),
            'id'     => 'look_config_section_table_contents',
            'desc'   => esc_html__( 'Select settings for table of contents.', 'look' ),
            'icon'   => 'el el-th-list',
            'fields' => array(
                array(
                    'id'     => 'section_start_table_contents_ptype',
                    'type'   => 'section',
                    'class'  => 'ruby-section-start',
                    'title'  => esc_html__( 'Post Type Supported', 'look' ),
                    'indent' => true
                ),
                array(
                    'id'       => 'table_contents_post',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support Single Post', 'look' ),
                    'subtitle' => esc_html__( 'Enable or disable the table of content for the single post.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_page',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support Single Page', 'look' ),
                    'subtitle' => esc_html__( 'Enable or disable the table of content for the single.', 'look' ),
                    'default'  => '0'
                ),
                array(
                    'id'     => 'section_end_table_contents_ptype',
                    'type'   => 'section',
                    'class'  => 'ruby-section-end',
                    'indent' => false
                ),
                array(
                    'id'     => 'section_start_table_contents_heading',
                    'type'   => 'section',
                    'class'  => 'ruby-section-start',
                    'title'  => esc_html__( 'Heading Tag Supported', 'look' ),
                    'indent' => true
                ),
                array(
                    'id'       => 'table_contents_h1',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support H1', 'look' ),
                    'subtitle' => esc_html__( 'Support H1 tag, Turn this option off if you would like to exclude H1 tag out of the table of contents.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_h2',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support H2', 'look' ),
                    'subtitle' => esc_html__( 'Support H2 tag, Turn this option off if you would like to exclude H2 tag out of the table of contents.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_h3',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support H3', 'look' ),
                    'subtitle' => esc_html__( 'Support H3 tag, Turn this option off if you would like to exclude H3 tag out of the table of contents.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_h4',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support H4', 'look' ),
                    'subtitle' => esc_html__( 'Support H4 tag, Turn this option off if you would like to exclude H4 tag out of the table of contents.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_h5',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support H5', 'look' ),
                    'subtitle' => esc_html__( 'Support H5 tag, Turn this option off if you would like to exclude H5 tag out of the table of contents.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_h6',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Support H6', 'look' ),
                    'subtitle' => esc_html__( 'Support H6 tag, Turn this option off if you would like to exclude H6 tag out of the table of contents.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'     => 'section_end_table_contents_heading',
                    'type'   => 'section',
                    'class'  => 'ruby-section-end',
                    'indent' => false
                ),
                array(
                    'id'     => 'section_start_table_contents_layout',
                    'type'   => 'section',
                    'class'  => 'ruby-section-start',
                    'title'  => esc_html__( 'Layout Settings', 'look' ),
                    'indent' => true
                ),
                array(
                    'id'       => 'table_contents_layout',
                    'title'    => esc_html__( 'layout', 'look' ),
                    'subtitle' => esc_html__( 'Select a layout for the table of contents.', 'look' ),
                    'type'     => 'select',
                    'options'  => array(
                        '1' => esc_html__( 'Full Width', 'look' ),
                        '2' => esc_html__( 'Half Width', 'look' )
                    ),
                    'default'  => '1'
                ),
                array(
                    'id'       => 'table_contents_enable',
                    'type'     => 'text',
                    'class'    => 'small-text',
                    'validate' => 'numeric',
                    'title'    => esc_html__( 'Enable When', 'look' ),
                    'subtitle' => esc_html__( 'Input a minimum value for total heading tags to show the table of contents box.', 'look' ),
                    'default'  => 2
                ),
                array(
                    'id'       => 'table_contents_heading',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Table of Contents Heading', 'look' ),
                    'subtitle' => esc_html__( 'Input the heading for the table of contents box.', 'look' ),
                    'default'  => esc_html( 'Contents', 'look' )
                ),
                array(
                    'id'       => 'table_contents_position',
                    'class'    => 'small-text',
                    'validate' => 'numeric',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Display Position', 'look' ),
                    'subtitle' => esc_html__( 'Input a position (After x paragraph) to display the table of contents box.', 'look' ),
                    'default'  => '1'
                ),
                array(
                    'id'       => 'table_contents_hierarchy',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Show Hierarchy', 'look' ),
                    'subtitle' => esc_html__( 'Enable or disable hierarchy for the table of contents box.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_numlist',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Show Number list', 'look' ),
                    'subtitle' => esc_html__( 'Enable or disable the number list items.', 'look' ),
                    'default'  => 1
                ),
                array(
                    'id'       => 'table_contents_scroll',
                    'type'     => 'switch',
                    'title'    => esc_html__( 'Smooth Scroll', 'look' ),
                    'subtitle' => esc_html__( 'Enable or disable smooth scroll effect to jumb to the anchor link.', 'look' ),
                ),
                array(
                    'id'     => 'section_end_table_contents_layout',
                    'type'   => 'section',
                    'class'  => 'ruby-section-end no-border',
                    'indent' => false
                ),
            )
        );
    }
}