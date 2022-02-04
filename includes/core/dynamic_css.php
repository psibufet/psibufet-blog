<?php
/**
 * @return string
 * this file get options and create css code as string
 */
if ( ! function_exists( 'look_ruby_dynamic_css' ) ) {
	function look_ruby_dynamic_css() {

		// get cache
		$dynamic_css_cache = get_option( 'look_ruby_dynamic_style', '' );

		if ( empty( $dynamic_css_cache ) ) {
			$str = '';

			$post_font = look_ruby_core::get_option( 'post_title_font' );

			// entry h tag font
			if ( ! empty( $post_font['font-family'] ) ) {
				$str .= 'h1, h2, h3, h4, h5, h6, .h3, .h5,';
				$str .= '.post-counter, .logo-text, .banner-content-wrap, .post-review-score,';
				$str .= '.woocommerce .price, blockquote';
				$str .= '{ font-family :' . $post_font['font-family'] . ';';
				if ( ! empty( $post_font['font-weight'] ) ) {
					$str .= 'font-weight :' . $post_font['font-weight'] . ';';
				}
				$str .= '}';
			}

			$post_meta_font = look_ruby_core::get_option( 'post_meta_info_font' );
			if ( ! empty( $post_meta_font['font-family'] ) ) {
				$str .= 'input, textarea, h3.comment-reply-title, .comment-title h3,';
				$str .= '.counter-element-right, .pagination-wrap';
				$str .= '{ font-family :' . $post_meta_font['font-family'] . ';}';
			}


			/** POST FONT SIZE */
			$post_title_font_size_big    = look_ruby_core::get_option( 'post_title_font_size_big' );
			$post_title_font_size_medium = look_ruby_core::get_option( 'post_title_font_size_medium' );
			$post_title_font_size_small  = look_ruby_core::get_option( 'post_title_font_size_small' );
			$post_title_font_size_single = look_ruby_core::get_option( 'post_title_font_size_single' );
			$post_excerpt_font_size      = look_ruby_core::get_option( 'post_excerpt_font_size' );

			if ( ! empty( $post_title_font_size_big ) ) {
				$str .= '.post-title.is-big-title';
				$str .= '{ font-size: ' . esc_attr( intval( $post_title_font_size_big ) ) . 'px; }';
			}
			if ( ! empty( $post_title_font_size_medium ) ) {
				$str .= '.post-title.is-medium-title';
				$str .= '{ font-size: ' . esc_attr( intval( $post_title_font_size_medium ) ) . 'px; }';
			}
			if ( ! empty( $post_title_font_size_small ) ) {
				$str .= '.post-title.is-small-title, .post-title.is-mini-title';
				$str .= '{ font-size: ' . esc_attr( intval( $post_title_font_size_small ) ) . 'px; }';
			}
			if ( ! empty( $post_title_font_size_single ) ) {
				$str .= '.single .post-title.single-title';
				$str .= '{ font-size: ' . esc_attr( intval( $post_title_font_size_single ) ) . 'px; }';
			}

			if ( ! empty( $post_excerpt_font_size ) ) {
				$str .= '.post-excerpt ';
				$str .= '{ font-size: ' . esc_attr( intval( $post_excerpt_font_size ) ) . 'px; }';
			}

			// title font line-height
			$post_title_font_lh_big       = look_ruby_core::get_option( 'post_title_font_lineheight_big' );
			$post_title_font_lh_medium    = look_ruby_core::get_option( 'post_title_font_lineheight_medium' );
			$post_title_font_lh_small     = look_ruby_core::get_option( 'post_title_font_lineheight_small' );
			$post_title_font_lh_single    = look_ruby_core::get_option( 'post_title_font_lineheight_single' );
			$post_excerpt_font_lineheight = look_ruby_core::get_option( 'post_excerpt_font_lineheight' );

			if ( ! empty( $post_title_font_lh_big ) ) {
				$str .= '.post-title.is-big-title > *';
				$str .= '{ line-height: ' . esc_attr( intval( $post_title_font_lh_big ) ) . 'px; }';

				$str .= '@media only screen and (max-width: 1199px) and (min-width: 992px) {';
				$str .= '.post-title.is-big-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_big ) * .8925 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 991px) {';
				$str .= '.post-title.is-big-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_big ) * .8775 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 767px) {';
				$str .= '.post-title.is-big-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_big ) * 0.85 ) ) . 'px; }';
				$str .= '}';
			}

			if ( ! empty( $post_title_font_lh_medium ) ) {
				$str .= '.post-title.is-medium-title > *';
				$str .= '{ line-height: ' . esc_attr( intval( $post_title_font_lh_medium ) ) . 'px; }';

				$str .= '@media only screen and (max-width: 1199px) and (min-width: 992px) {';
				$str .= '.post-title.is-medium-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_medium ) * .8925 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 991px) {';
				$str .= '.post-title.is-medium-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_medium ) * .8775 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 767px) {';
				$str .= '.post-title.is-medium-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_medium ) * 0.85 ) ) . 'px; }';
				$str .= '}';
			}

			if ( ! empty( $post_title_font_lh_small ) ) {
				$str .= '.post-title.is-small-title > *';
				$str .= '{ line-height: ' . esc_attr( intval( $post_title_font_lh_small ) ) . 'px; }';

				$str .= '@media only screen and (max-width: 1199px) and (min-width: 992px) {';
				$str .= '.post-title.is-small-title > *, .post-title.is-mini-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_small ) * .8925 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 991px) {';
				$str .= '.post-title.is-small-title > *, .post-title.is-mini-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_small ) * .8775 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 767px) {';
				$str .= '.post-title.is-small-title > *, .post-title.is-mini-title > *';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_small ) * 0.85 ) ) . 'px; }';
				$str .= '}';
			}

			if ( ! empty( $post_title_font_lh_single ) ) {
				$str .= '.single .post-title.single-title h1';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_single ) ) ) . 'px; }';

				$str .= '@media only screen and (max-width: 1199px) and (min-width: 992px) {';
				$str .= '.single .post-title.single-title h1';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_single ) * .8925 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 991px) {';
				$str .= '.single .post-title.single-title h1';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_single ) * .8775 ) ) . 'px; }';
				$str .= '}';

				$str .= '@media only screen and (max-width: 767px) {';
				$str .= '.single .post-title.single-title h1';
				$str .= '{ line-height: ' . esc_attr( round( intval( $post_title_font_lh_single ) * 0.85 ) ) . 'px; }';
				$str .= '}';
			}

			if ( ! empty( $post_excerpt_font_lineheight ) ) {
				$str .= '.post-excerpt';
				$str .= '{ line-height: ' . esc_attr( intval( $post_excerpt_font_lineheight ) ) . 'px; }';
			}

			/** BODY LINE HEIGHT */
			$body_font = look_ruby_core::get_option( 'body_font' );
			if ( ! empty( $body_font['line-height'] ) ) {
				$str .= '.entry { line-height:' . esc_attr( $body_font['line-height'] ) . ';}';
			}

            /** LOGO PADDING */
            $logo_padding = look_ruby_core::get_option( 'logo_padding' );
            if ( ! empty( $logo_padding ) ) {
                $str .= '.header-style-1 .header-banner-wrap {';
                $str .= 'padding-top: ' . esc_attr( intval( $logo_padding ) ) . 'px;';
                $str .= 'padding-bottom: ' . esc_attr( intval( $logo_padding ) ) . 'px;';
                $str .= '}';
            }

			/** CATEGORY COLOR */
			$taxonomy_cat = get_option( 'look_ruby_cat_option' ) ? get_option( 'look_ruby_cat_option' ) : array();
			foreach ( $taxonomy_cat as $cat_id => $val ) {
				if ( ! empty( $cat_id ) ) {
					if ( ! empty( $val['look_ruby_cat_color_picker'] ) && '#111111' != strtolower( $val['look_ruby_cat_color_picker'] ) ) {
						$str .= '.cat-info-el.is-cat-' . esc_attr( $cat_id );
						$str .= '{ color: ' . esc_attr( $val['look_ruby_cat_color_picker'] ) . ';}';
						$str .= '.cat-info-el.is-cat-' . esc_attr( $cat_id ) . ':after';
						$str .= '{ background-color: ' . esc_attr( $val['look_ruby_cat_color_picker'] ) . ';}';
					}
				}
			}

			$header_layout_manager = look_ruby_core::get_option( 'header_layout_manager' );
			if ( ! empty( $header_layout_manager['enabled'] ) ) {
				if ( ! empty( $header_layout_manager['enabled']['placebo'] ) ) {
					unset ( $header_layout_manager['enabled']['placebo'] );
				}
				$key = ( array_keys( $header_layout_manager['enabled'] ) );
				if ( ! empty( $key[0] ) && 'main_nav' == $key[0] ) {
					$str .= '.single .header-banner-wrap, .page-template-default .header-banner-wrap,';
					$str .= '.page-template-author-team .header-banner-wrap, .post-type-archive .header-banner-wrap,';
					$str .= '.error404 .header-banner-wrap';
					$str .= '{ border-bottom: 1px solid #f2f2f2;}';
				}
			}

			/** MAIN NAVIGATION */
			$main_nav_background       = look_ruby_core::get_option( 'main_nav_background' );
			$main_nav_text_color       = look_ruby_core::get_option( 'main_nav_text_color' );
			$main_nav_text_color_hover = look_ruby_core::get_option( 'main_nav_text_color_hover' );
			$main_navigation_height    = look_ruby_core::get_option( 'main_navigation_height' );

			$main_sub_nav_background             = look_ruby_core::get_option( 'main_sub_nav_background' );
			$main_nav_sub_level_text_color       = look_ruby_core::get_option( 'main_nav_sub_level_text_color' );
			$main_nav_sub_level_text_color_hover = look_ruby_core::get_option( 'main_nav_sub_level_text_color_hover' );

			if ( ! empty( $main_nav_background ) ) {
				$str .= '.header-nav-inner, .header-style-2 .header-nav-inner';
				$str .= ' {background-color:' . esc_attr( $main_nav_background ) . ';}';
				// remove border
				$str .= '.header-nav-holder {border: none;}';

				// add shadow
				$str .= '.header-style-2 .header-nav-inner {';
				$str .= '-webkit-box-shadow: 1px 4px 10px -2px rgba(0, 0, 0, 0.05);';
				$str .= 'box-shadow: 1px 4px 10px -2px rgba(0, 0, 0, 0.05);';
				$str .= '}';
			}

			if ( ! empty( $main_nav_text_color ) ) {
				$str .= '.header-outer .main-nav-inner > li > a, .header-outer .nav-search-wrap, .header-style-2 .header-nav-inner .nav-search-wrap,';
				$str .= '.header-style-2 .logo-text, .header-style-2 .nav-search-outer';
				$str .= '{color:' . esc_attr( $main_nav_text_color ) . '; !important}';

				$str .= '.header-outer .ruby-trigger .icon-wrap, .header-outer .ruby-trigger .icon-wrap:before, .header-outer .ruby-trigger .icon-wrap:after';
				$str .= '{background-color:' . esc_attr( $main_nav_text_color ) . ';}';
			}

			if ( ! empty( $main_nav_text_color_hover ) ) {
				$str .= '.main-nav-inner > li > a:hover, .main-nav-inner > li > a:focus, .nav-search-wrap a:hover {';
				$str .= 'opacity: 1;';
				$str .= 'color:' . esc_attr( $main_nav_text_color_hover ) . ';}';

				$str .= '.ruby-trigger:hover .icon-wrap, .ruby-trigger:hover .icon-wrap:before, .ruby-trigger:hover .icon-wrap:after';
				$str .= '{background-color:' . esc_attr( $main_nav_text_color_hover ) . ';}';
			}

			if ( ! empty( $main_navigation_height ) ) {
				$str .= '.main-nav-inner > li > a , .header-style-2 .nav-search-outer {';
				$str .= 'line-height: ' . esc_attr( intval( $main_navigation_height ) ) . 'px;';
				$str .= 'height: ' . esc_attr( intval( $main_navigation_height ) ) . 'px;';
				$str .= '}';

				$str .= '.header-style-2 .logo-image img {';
				$str .= 'max-height: ' . esc_attr( intval( $main_navigation_height ) ) . 'px;';
				$str .= 'height: ' . esc_attr( intval( $main_navigation_height ) ) . 'px;';
				$str .= '}';
			}

			// sub menu
			if ( ! empty( $main_sub_nav_background ) ) {
				$str .= '.main-nav-inner .is-sub-menu {';
				$str .= 'border-color: transparent;';
				$str .= 'background-color: ' . esc_attr( $main_sub_nav_background ) . ';';
				$str .= '}';
			}

			if ( ! empty( $main_nav_sub_level_text_color ) ) {
				$str .= '.main-nav-inner .is-sub-menu';
				$str .= '{color: ' . esc_attr( $main_nav_sub_level_text_color ) . ';}';
			}

			if ( ! empty( $main_nav_sub_level_text_color_hover ) ) {
				$str .= '.main-nav-inner .is-sub-menu:not(.mega-category-menu) a:hover {';
				$str .= 'opacity: 1;';
				$str .= 'color: ' . esc_attr( $main_nav_sub_level_text_color_hover ) . ';';
				$str .= '}';
			}

			/** SITE WIDTH */
			$site_container_width = look_ruby_core::get_option( 'site_container_width' );
			if ( ! empty( $site_container_width ) & '1200' != $site_container_width ) {
				$str .= '@media only screen and (min-width: 992px) { .ruby-container { max-width: ' . esc_attr( $site_container_width ) . 'px; } }';
			}

			/** REVIEW COLOR */
			$review_icon_color = look_ruby_core::get_option( 'post_review_icon_color' );
			if ( ! empty( $review_icon_color ) && strtolower( $review_icon_color ) != '#111111' ) {
				$str .= '.post-review-score, .score-bar { background-color: ' . $review_icon_color . ';}';
			}

			/** FOOTER SOCIAL BAR BACKGROUND */
			$footer_social_bar_bg = look_ruby_core::get_option( 'footer_social_bar_bg' );
			if ( ! empty( $footer_social_bar_bg ) ) {
				$str .= '.footer-social-bar-wrap { background-color: ' . $footer_social_bar_bg . ';}';
			}

			$main_theme_color = look_ruby_core::get_option( 'main_theme_color' );
			if ( ! empty( $main_theme_color ) && '#111111' != strtolower( $main_theme_color ) ) {
				$str .= '.post-share-bar-inner:before, .block-view-more a, .single-share-bar-total.share-bar-total, .header-social-wrap a:hover,';
				$str .= '.is-light-text .footer-social-wrap a:hover, .post-counter,';
				$str .= '.off-canvas-wrap .off-canvas-social-wrap a:hover, .off-canvas-wrap .off-canvas-social-wrap a:focus,';
				$str .= '.entry a:not(.button), .excerpt a, .block-fw-subscribe .subscribe-box .mc4wp-form-fields input[type=submit]:hover+i';
				$str .= '{ color: ' . esc_attr( $main_theme_color ) . ';}';

                $str .= '.table-content-header i, .rb-table-contents .inner a.h5:hover';
                $str .= '{ color: ' . esc_attr( $main_theme_color ) . ' !important;}';

                $str .= '.rb-table-contents .inner a.h5:hover:before';
                $str .= '{ background-color: ' . esc_attr( $main_theme_color ) . ' !important;}';

				$str .= 'button[type="submit"], input[type="submit"], .single-tag-wrap .tag-title,';
				$str .= '.page-numbers.current, a.page-numbers:hover, a.page-numbers:focus,';
				$str .= '.share-bar-el:hover i, .share-bar-icon:hover i, .sb-widget-social-counter .counter-element:hover,';
				$str .= '.ruby-trigger:hover .icon-wrap, .ruby-trigger:focus .icon-wrap,';
				$str .= '.ruby-trigger:hover .icon-wrap:before, .ruby-trigger:focus .icon-wrap:before,';
				$str .= '.ruby-trigger:hover .icon-wrap:after, .ruby-trigger:focus .icon-wrap:after';
				$str .= '{ background-color: ' . esc_attr( $main_theme_color ) . ';}';

				$str .= '.post-grid-small:hover .post-header-inner,';
				$str .= '.page-numbers.current, a.page-numbers:hover, a.page-numbers:focus,';
				$str .= '.share-bar-el:hover i, .share-bar-icon:hover i';
				$str .= '{ border-color: ' . esc_attr( $main_theme_color ) . ';}';
			}


			/** USER CUSTOM CSS */
			$custom_css = look_ruby_core::get_option( 'custom_css' );

			if ( ! empty( $custom_css ) ) {
				$str .= $custom_css;
			}

			// save to database
			$cache = addslashes( $str );
			delete_option( 'look_ruby_dynamic_style' );
			add_option( 'look_ruby_dynamic_style', $cache );
		} else {
			$str = stripslashes( $dynamic_css_cache );
		}

		if ( ! empty( $str ) ) {
			wp_add_inline_style( 'look_ruby_responsive_style', $str );
		}
	}
}

if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'look_ruby_dynamic_css', 99 );
}

if ( ! function_exists( 'look_ruby_delete_dynamic_css_cache' ) ) {
	function look_ruby_delete_dynamic_css_cache() {
		delete_option( 'look_ruby_dynamic_style' );
	}
}

//  delete css cache
add_action( 'redux/options/look_ruby_theme_options/saved', 'look_ruby_delete_dynamic_css_cache' );
add_action( 'redux/options/look_ruby_theme_options/reset', 'look_ruby_delete_dynamic_css_cache' );
add_action( 'redux/options/look_ruby_theme_options/section/reset', 'look_ruby_delete_dynamic_css_cache' );
add_action( 'save_post', 'look_ruby_delete_dynamic_css_cache' );
add_action( 'edit_category_form', 'look_ruby_delete_dynamic_css_cache' );