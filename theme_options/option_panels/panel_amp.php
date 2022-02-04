<?php
///amp_init
if ( ! function_exists( 'look_ruby_theme_options_amp' ) ) {
	function look_ruby_theme_options_amp() {
		return array(
			'id'     => 'look_ruby_config_section_amp',
			'title'  => esc_html__( 'AMP Options', 'look' ),
			'desc'   => html_entity_decode( esc_html__( 'Accelerated Mobile Pages support, This section requests to install the <a href="https://wordpress.org/plugins/amp/">Automattic AMP</a> plugin first.', 'look' ) ),
			'icon'   => 'el el-road',
			'class'  => 'section-amp',
			'fields' => look_ruby_theme_options_amp_config()
		);
	}
};


//amp config
if ( ! function_exists( 'look_ruby_theme_options_amp_config' ) ) {
	function look_ruby_theme_options_amp_config() {
		$amp_fields = array();
		if ( function_exists( 'amp_init' ) ) {
			$amp_fields = array(
				array(
					'id'     => 'section_start_amp_logo',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'AMP - Logo Option', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'amp_logo',
					'type'     => 'media',
					'url'      => true,
					'preview'  => true,
					'title'    => esc_html__( 'Logo Upload', 'look' ),
					'subtitle' => esc_html__( 'upload your AMP logo, allowed extensions are .jpg, .png and .gif.', 'look' )
				),
				array(
					'id'     => 'section_end_logo',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_amp_footer',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'AMP Footer Options', 'look' ),
					'indent' => true
				),
				array(
					'id'       => 'amp_back_top',
					'type'     => 'switch',
					'title'    => esc_html__( 'Back to Top', 'look' ),
					'subtitle' => esc_html__( 'enable or disable back to top button', 'look' )
				),
				array(
					'id'       => 'amp_footer_logo',
					'type'     => 'media',
					'url'      => true,
					'preview'  => true,
					'title'    => esc_html__( 'Footer Logo', 'look' ),
					'subtitle' => esc_html__( 'upload your AMP footer logo, allowed extensions are .jpg, .png and .gif.', 'look' )
				),
				array(
					'id'       => 'amp_footer_menu',
					'type'     => 'select',
					'data'     => 'menu',
					'title'    => esc_html__( 'Footer Menu', 'look' ),
					'subtitle' => esc_html__( 'select footer menu for AMP pages.', 'look' )
				),
				array(
					'id'       => 'amp_copyright_text',
					'type'     => 'textarea',
					'title'    => esc_html__( 'Copyright Text', 'look' ),
					'subtitle' => esc_html__( 'input your copyright text for AMP pages.', 'look' )
				),
				array(
					'id'     => 'section_end_amp_footer',
					'type'   => 'section',
					'class'  => 'ruby-section-end',
					'indent' => false
				),
				array(
					'id'     => 'section_start_amp_color',
					'type'   => 'section',
					'class'  => 'ruby-section-start',
					'title'  => esc_html__( 'AMP Color Options', 'look' ),
					'indent' => true
				),
				array(
					'id'          => 'amp_bg_body',
					'title'       => esc_html__( 'Body Background', 'look' ),
					'subtitle'    => esc_html__( 'select background color for the body of AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'          => 'amp_body_color',
					'title'       => esc_html__( 'Body Text Color', 'look' ),
					'subtitle'    => esc_html__( 'select color for the body text of AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'          => 'amp_header_bg',
					'title'       => esc_html__( 'Header Background', 'look' ),
					'subtitle'    => esc_html__( 'select background color for the header of AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'          => 'amp_title_color',
					'title'       => esc_html__( 'Title Color', 'look' ),
					'subtitle'    => esc_html__( 'select color for the headline of AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'          => 'amp_meta_color',
					'title'       => esc_html__( 'Meta Info Color', 'look' ),
					'subtitle'    => esc_html__( 'select color for the meta tags of AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'          => 'amp_link_color',
					'title'       => esc_html__( 'Hyperlink Color', 'look' ),
					'subtitle'    => esc_html__( 'select color for hyperlinks of AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'          => 'amp_footer_bg',
					'title'       => esc_html__( 'Footer Background', 'look' ),
					'subtitle'    => esc_html__( 'select footer background color for AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'          => 'amp_footer_color',
					'title'       => esc_html__( 'Footer Color', 'look' ),
					'subtitle'    => esc_html__( 'select footer color for AMP pages.', 'look' ),
					'type'        => 'color',
					'transparent' => false,
					'validate'    => 'color',
				),
				array(
					'id'     => 'section_end_amp_color',
					'type'   => 'section',
					'class'  => 'ruby-section-end no-border',
					'indent' => false
				),

			);
		};

		return $amp_fields;
	}
}


