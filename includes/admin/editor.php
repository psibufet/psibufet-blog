<?php
/** delete cache */
add_action( 'after_switch_theme', 'look_delete_editor_styles_cache' );
add_action( 'redux/options/look_ruby_theme_options/saved', 'look_delete_editor_styles_cache' );
add_action( 'redux/options/look_ruby_theme_options/reset', 'look_delete_editor_styles_cache' );
add_action( 'redux/options/look_ruby_theme_options/section/reset', 'look_delete_editor_styles_cache' );

/** create font link */
if ( ! function_exists( 'look_default_font_urls' ) ) {
	function look_default_font_urls() {

		$options   = get_option( 'look_ruby_theme_options', array() );
		$pre_fonts = array();
		$fonts     = array();
		$subsets   = array();
		$link      = '';

		foreach ( $options as $field ) {
			if ( ! empty( $field['font-family'] ) ) {
				$field['font-family'] = str_replace( ' ', '+', $field['font-family'] );
				if ( ! isset( $field['font-style'] ) ) {
					$field['font-style'] = '';
				}
				if ( ! empty( $field['font-weight'] ) ) {
					$field['font-style'] = $field['font-weight'] . $field['font-style'];
				}
				array_push( $pre_fonts, $field );
			}
		}

		foreach ( $pre_fonts as $field ) {
			if ( ! isset( $fonts[ $field['font-family'] ] ) ) {
				$fonts[ $field['font-family'] ]               = $field;
				$fonts[ $field['font-family'] ]['font-style'] = array();
				array_push( $fonts[ $field['font-family'] ]['font-style'], $field['font-style'] );
			} else {
				if ( ! empty( $field['font-style'] ) ) {
					if ( ! in_array( $field['font-style'], $fonts[ $field['font-family'] ]['font-style'] ) ) {
						array_push( $fonts[ $field['font-family'] ]['font-style'], $field['font-style'] );
					}
				}
			}
		}

		foreach ( $fonts as $family => $font ) {
			if ( ! empty( $link ) ) {
				$link .= "%7C";
			}
			$link .= $family;

			if ( ! empty( $font['font-style'] ) || ! empty( $font['all-styles'] ) ) {
				$link .= ':';
				if ( ! empty( $font['all-styles'] ) ) {
					$link .= implode( ',', $font['all-styles'] );
				} else if ( ! empty( $font['font-style'] ) ) {
					$link .= implode( ',', $font['font-style'] );
				}
			}

			if ( ! empty( $font['subset'] ) ) {
				foreach ( $font['subset'] as $subset ) {
					if ( ! in_array( $subset, $subsets ) ) {
						array_push( $subsets, $subset );
					}
				}
			}
		}

		/** default fonts */
		if ( empty( $link ) ) {
			$link = 'family:Raleway:400,400i,600,700,700i|Playfair+Display:400,700';
		}

		if ( ! empty( $subsets ) ) {
			$link .= "&subset=" . implode( ',', $subsets );
		}
		$link .= "&font-display=swap";

		return '//fonts.googleapis.com/css?family=' . str_replace( '|', '%7C', $link );
	}
}


/** dynamic editor */
if ( ! function_exists( 'look_editor_dynamic' ) ) {
	function look_editor_dynamic() {

		$cache = get_option( 'look_editor_cache' );
		if ( empty( $cache ) ) {
			$editor_css = '';

			$body_font    = look_ruby_core::get_option( 'body_font' );
			$heading_font = look_ruby_core::get_option( 'post_title_font' );

			$editor_css .= '#editor .editor-styles-wrapper, .edit-post-layout__content p, .edit-post-layout__content, .editor-styles-wrapper, .wp-block-file,';
			$editor_css .= '.edit-post-layout__content .wp-block-latest-comments__comment-link, .edit-post-layout__content .wp-block-latest-posts__list a,';
			$editor_css .= '.editor-styles-wrapper p, .edit-post-layout__content, .editor-styles-wrapper, .wp-block-file,';
			$editor_css .= '.editor-styles-wrapper .wp-block-latest-comments__comment-link, .editor-styles-wrapper .wp-block-latest-posts__list a,';
			$editor_css .= '.editor-styles-wrapper p, .block-editor__container .editor-styles-wrapper .mce-content-body';
			$editor_css .= '{';
			if ( ! empty( $body_font['font-family'] ) ) {
				$editor_css .= 'font-family: "' . $body_font['font-family'] . '" !important;';
			}
			if ( ! empty( $body_font['font-weight'] ) ) {
				$editor_css .= 'font-weight: ' . $body_font['font-weight'] . ';';
			}
			if ( ! empty( $body_font['letter-spacing'] ) ) {
				$editor_css .= 'letter-spacing: ' . $body_font['letter-spacing'] . ';';
			}
			$editor_css .= '}';

			$editor_css .= '.editor-styles-wrapper .editor-post-title__block .editor-post-title__input,';
			$editor_css .= '.wp-block-cover h2, .wp-block-quote, .wp-block-pullquote, .wp-block-quote:not(.is-large):not(.is-style-large),';
			$editor_css .= '.edit-post-layout__content .wp-block-quote, .edit-post-layout__content .wp-block-quote:not(.is-large):not(.is-style-large), ';
			$editor_css .= '.editor-styles-wrapper h1, .editor-styles-wrapper h2,';
			$editor_css .= '.editor-styles-wrapper h3, .editor-styles-wrapper h4,';
			$editor_css .= '.editor-styles-wrapper h5, .editor-styles-wrapper h6,';
			$editor_css .= '.editor-post-title__block .editor-post-title__input,';
			$editor_css .= '.wp-block-cover h2, .wp-block-quote, .wp-block-pullquote, .wp-block-quote:not(.is-large):not(.is-style-large),';
			$editor_css .= '.editor-styles-wrapper .wp-block-quote, .editor-styles-wrapper .wp-block-quote:not(.is-large):not(.is-style-large)';
			$editor_css .= '{';
			if ( ! empty( $heading_font['font-family'] ) ) {
				$editor_css .= 'font-family: "' . $heading_font['font-family'] . '" !important;';
			}
			if ( ! empty( $heading_font['font-weight'] ) ) {
				$editor_css .= 'font-weight: ' . $heading_font['font-weight'] . ';';
			}
			if ( ! empty( $heading_font['letter-spacing'] ) ) {
				$editor_css .= 'letter-spacing: ' . $heading_font['letter-spacing'] . ';';
			}
			if ( ! empty( $heading_font['text-transform'] ) ) {
				$editor_css .= 'letter-spacing: ' . $heading_font['text-transform'] . ';';
			}
			$editor_css .= '}';

			delete_option( 'look_editor_cache' );
			add_option( 'look_editor_cache', addslashes( $editor_css ) );
		} else {
			$editor_css = stripslashes( $cache );
		}

		if ( ! empty( $editor_css ) ) {
			wp_add_inline_style( 'look-editor-style', $editor_css );
		}
	}
}

/** delete dynamic css */
if ( ! function_exists( 'look_delete_editor_styles_cache' ) ) {
	function look_delete_editor_styles_cache() {
		delete_option( 'look_editor_cache' );

		return false;
	}
}


/** create typography css */
if ( ! function_exists( 'look_create_typo_css' ) ) {
	function look_create_typo_css( $settings = array() ) {

		if ( ! is_array( $settings ) ) {
			return '';
		}

		if ( isset( $settings['google'] ) ) {
			unset ( $settings['google'] );
		}

		if ( isset( $settings['subsets'] ) ) {
			unset ( $settings['subsets'] );
		}
		if ( isset( $settings['font-options'] ) ) {
			unset ( $settings['font-options'] );
		}

		$dynamic_css = '';

		if ( ! empty( $settings['font-backup'] ) && ! empty( $settings['font-family'] ) ) {
			$settings['font-family'] = $settings['font-family'] . ',' . $settings['font-backup'];
			unset ( $settings['font-backup'] );
		}

		foreach ( $settings as $key => $val ) {
			if ( '' != trim( $val ) ) {
				$dynamic_css .= $key . ':' . $val . ';';
			}
		}

		return $dynamic_css;
	}
}