<?php
if ( ! function_exists( 'look_ruby_register_taxonomy_cat' ) && class_exists( 'RW_Taxonomy_Meta' ) ) {
	function look_ruby_register_taxonomy_cat() {
		$meta_sections   = array();
		$meta_sections[] = array(
			'id'         => 'look_ruby_cat_option',
			'title'      => esc_html__( 'LOOK CATEGORY OPTIONS', 'look' ),
			'taxonomies' => array( 'category' ),
			'fields'     => array(
				array(
					'id'      => 'look_ruby_cat_layout',
					'name'    => esc_html__( 'Category Layout:', 'look' ),
					'desc'    => esc_html__( 'Select the layout for this category.', 'look' ),
					'type'    => 'select',
					'options' => array(
						'default'              => esc_html__( 'Default form Theme Options', 'look' ),
						'layout_list'          => esc_html__( 'List Layout', 'look' ),
						'layout_classic'       => esc_html__( 'Classic Layout', 'look' ),
						'layout_classic_lite'  => esc_html__( 'Classic Lite Layout', 'look' ),
						'layout_grid'          => esc_html__( 'Grid Layout', 'look' ),
						'layout_grid_small'    => esc_html__( 'Grid Small Layout', 'look' ),
						'layout_grid_small_s'  => esc_html__( 'Grid Small Square Layout', 'look' ),
						'layout_overlay_small' => esc_html__( 'Grid Overlay Layout', 'look' ),
					),
					'std'     => 'default',
				),
				array(
					'id'      => 'look_ruby_cat_big_first',
					'name'    => esc_html__( '1st Classic Layout:', 'look' ),
					'desc'    => esc_html__( 'Select the 1st classic post for this category.', 'look' ),
					'type'    => 'select',
					'options' => array(
						'default' => esc_html__( 'Default form Theme Options', 'look' ),
						'1'       => esc_html__( 'Enable', 'look' ),
						'0'       => esc_html__( 'Disable', 'look' ),
					),
					'std'     => 'default',
				),
				array(
					'name'    => esc_html__( 'Category Sidebar Name:', 'look' ),
					'id'      => 'look_ruby_cat_sidebar_name',
					'desc'    => esc_html__( 'Select a sidebar for this category.', 'look' ),
					'type'    => 'select',
					'options' => look_ruby_theme_config::sidebar_name( true ),
					'std'     => 'look_ruby_default_from_theme_options',
				),
				array(
					'id'      => 'look_ruby_cat_sidebar',
					'name'    => esc_html__( 'Category Sidebar Position:', 'look' ),
					'desc'    => esc_html__( 'Select the layout for this category.', 'look' ),
					'type'    => 'select',
					'options' => array(
						'default' => esc_html__( 'Default form Theme Options', 'look' ),
						'right'   => esc_html__( 'Right', 'look' ),
						'left'    => esc_html__( 'Left', 'look' ),
						'none'    => esc_html__( 'None', 'look' ),
					),
					'std'     => 'default',
				),
				array(
					'id'   => 'look_ruby_cat_color_picker',
					'name' => esc_html__( 'Category Color Picker:', 'look' ),
					'desc' => esc_html__( 'input color for this category', 'look' ),
					'type' => 'color',
					'std'  => '#111111',
				),
				array(
					'id'   => 'look_ruby_cat_bg',
					'name' => esc_html__( 'Category Background Image URL:', 'look' ),
					'desc' => esc_html__( 'input background image URL for this category', 'look' ),
					'type' => 'text',
					'std'  => '',
				),
				array(
					'id'      => 'look_ruby_cat_pagination',
					'name'    => esc_html__( 'Category Pagination:', 'look' ),
					'desc'    => esc_html__( 'select a pagination type for this category', 'look' ),
					'type'    => 'select',
					'options' => array(
						'default'         => esc_html__( 'Default form Theme Options', 'look' ),
						'number'          => esc_html__( 'Numeric', 'look' ),
						'loadmore'        => esc_html__( 'Load More', 'look' ),
						'infinite_scroll' => esc_html__( 'Infinite Scroll', 'look' )
					),
					'std'     => 'default',
				),
			)
		);

		foreach ( $meta_sections as $meta_section ) {
			new RW_Taxonomy_Meta( $meta_section );
		}
	}

	add_action( 'admin_init', 'look_ruby_register_taxonomy_cat' );
}
