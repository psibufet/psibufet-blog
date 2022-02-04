<?php
// frontend script
if ( ! function_exists( 'look_ruby_register_frontend_script' ) ) {
	function look_ruby_register_frontend_script() {

		wp_enqueue_style( 'look_ruby_external_style', get_theme_file_uri( '/assets/external/external-style.css' ), array(), LOOK_THEME_VERSION, 'all' );

		if ( is_rtl() ) {
			wp_enqueue_style( 'look_ruby_external_rtl', get_theme_file_uri( '/assets/external/external-rtl.css' ), array( 'look_ruby_external_style' ), 'v1.0', 'all' );
			wp_enqueue_style( 'look_ruby_main_style', get_theme_file_uri( '/assets/css/theme-style.css' ), array(
				'look_ruby_external_style',
				'look_ruby_external_rtl'
			), LOOK_THEME_VERSION, 'all' );
			wp_enqueue_style( 'look_ruby_responsive_style', get_theme_file_uri( '/assets/css/theme-responsive.css' ), array(
				'look_ruby_external_style',
				'look_ruby_external_rtl',
				'look_ruby_main_style'
			), LOOK_THEME_VERSION, 'all' );
		} else {
			wp_enqueue_style( 'look_ruby_main_style', get_theme_file_uri( '/assets/css/theme-style.css' ), array( 'look_ruby_external_style' ), LOOK_THEME_VERSION, 'all' );
			wp_enqueue_style( 'look_ruby_responsive_style', get_theme_file_uri( '/assets/css/theme-responsive.css' ), array(
				'look_ruby_external_style',
				'look_ruby_main_style'
			), LOOK_THEME_VERSION, 'all' );
		}

		wp_enqueue_style( 'look_ruby_default_style', get_stylesheet_uri(), array(), LOOK_THEME_VERSION );

		if ( class_exists( 'Woocommerce' ) ) {
			wp_register_style( 'look_ruby_woocommerce_style', get_theme_file_uri( '/assets/css/shop.css' ), array(), LOOK_THEME_VERSION, 'all' );
			wp_enqueue_style( 'look_ruby_woocommerce_style' );
		}

		// load comment script
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script( 'look_ruby_external_script', get_theme_file_uri( '/assets/external/external-script.js' ), array( 'jquery' ), LOOK_THEME_VERSION, true );

		wp_enqueue_script( 'look_ruby_main_script', get_theme_file_uri( '/assets/js/theme-script.js' ), array(
			'jquery',
			'look_ruby_external_script',
		), LOOK_THEME_VERSION, true );

        wp_localize_script( 'look_ruby_main_script', 'look_ruby_ajax_url',  array( admin_url( 'admin-ajax.php' ) ) );
		wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/external/html5.js' ), array(), '3.7.3' );
		wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
	}

	if ( ! is_admin() ) {
		add_action( 'wp_enqueue_scripts', 'look_ruby_register_frontend_script' );
	}
}

if ( ! function_exists( 'look_add_default_fonts' ) ) {
	function look_add_default_fonts() {
		$link = look_default_font_urls();
		if ( ! empty( $link ) ) {
			wp_enqueue_style( 'google-font-themes', esc_url_raw( $link ), array(), LOOK_THEME_VERSION, 'all' );
		}
	}
}

/** load editor styles */
if ( ! function_exists( 'look_block_editor_styles' ) ) {
	function look_block_editor_styles() {
		wp_enqueue_style( 'look-editor-fonts', esc_url_raw( look_default_font_urls() ), array(), LOOK_THEME_VERSION, 'all' );
		wp_register_style( 'look-editor-style', get_theme_file_uri( '/assets/css/editor.css' ), array( 'look-editor-fonts' ), LOOK_THEME_VERSION, 'all' );
		wp_enqueue_style( 'look-editor-style' );
	}
}