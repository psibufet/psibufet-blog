<?php
//Color Set
if ( ! function_exists( 'look_ruby_theme_options_color' ) ) {
	function look_ruby_theme_options_color() {
		return array(
			'id'     => 'look_ruby_theme_ops_section_color',
			'title'  => esc_html__( 'Color Options', 'look' ),
			'desc'   => esc_html__( 'Select color for theme. Leave blank if you want set default of theme.', 'look' ),
			'icon'   => 'el el-tint',
			'fields' => array(

				//Theme color
				array(
					'id'     => 'section_start_theme_color',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'Main Color Option', 'look' ),
					'indent' => true
				),
				array(
					'id'          => 'main_theme_color',
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
					'title'       => esc_html__( 'Main Theme Color', 'look' ),
					'subtitle'    => esc_html__( 'Select main theme color.  Leave blank if you want set to default (#111111 color)', 'look' ),
				),
				array(
					'id'     => 'section_end_theme_color',
					'type'   => 'section',
					'class'  => 'ruby-section-end no-border',
					'indent' => false
				)
			)
		);
	}
}
