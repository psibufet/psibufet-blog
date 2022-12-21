<?php
/** ruby composers */
if ( ! function_exists( 'look_composer_blocks' ) ) {
	function look_composer_blocks() {
		return array(

			'look_ruby_fw_block_slider_fw'    => array(
				'title'         => esc_html__( 'FullWidth Slider', 'look' ),
				'description'   => esc_html__( 'Featured - show slider (fullwidth mode) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-slider-fw.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_slider_fw::block_config()
			),
			'look_ruby_fw_block_slider_fw_2'  => array(
				'title'         => esc_html__( 'FullWidth Slider', 'look' ),
				'description'   => esc_html__( 'Featured - show slider (fullwidth mode) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-slider-fw-2.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_slider_fw_2::block_config()
			),
			'look_ruby_fw_block_slider_hw'    => array(
				'title'         => esc_html__( 'Wrapper Slider', 'look' ),
				'description'   => esc_html__( 'Featured -show slider (wrapper mode) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-slider-hw.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_slider_hw::block_config()
			),
			'look_ruby_fw_block_carousel'     => array(
				'title'         => esc_html__( 'FullWidth Carousel', 'look' ),
				'description'   => esc_html__( 'Featured - show carousel in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-carousel.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_carousel::block_config()
			),
			'look_ruby_fw_block_carousel_1'   => array(
				'title'         => esc_html__( 'FullWidth Carousel', 'look' ),
				'description'   => esc_html__( 'Featured - show carousel in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-carousel-1.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_carousel_1::block_config()
			),
			'look_ruby_fw_block_grid'         => array(
				'title'         => esc_html__( 'Wrapper Grid', 'look' ),
				'description'   => esc_html__( 'Featured - show featured gird in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-feat-grid.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_grid::block_config()
			),
			'look_ruby_fw_block_grid_overlay' => array(
				'title'         => esc_html__( 'Overlay Grid', 'look' ),
				'description'   => esc_html__( 'Featured - show featured overlay gird in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-feat-grid-overlay.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_grid_overlay::block_config()
			),
			'look_ruby_fw_block_video'        => array(
				'title'         => esc_html__( 'Video Playlist', 'look' ),
				'description'   => esc_html__( 'Show video playlist in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-video.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_video::block_config()
			),
			'look_ruby_fw_block_1'            => array(
				'title'         => esc_html__( 'Block 1 (Grid)', 'look' ),
				'description'   => esc_html__( 'show block grid (3 columns) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-1.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_1::block_config()
			),
			'look_ruby_fw_block_2'            => array(
				'title'         => esc_html__( 'Block 2 (small grid)', 'look' ),
				'description'   => esc_html__( 'show block 2 (4 columns small grid layout) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-2.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_2::block_config()
			),
			'look_ruby_fw_block_3'            => array(
				'title'         => esc_html__( 'Block 3 (small grid)', 'look' ),
				'description'   => esc_html__( 'show block 3 (4 columns small grid layout) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-3.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_3::block_config()
			),
			'look_ruby_fw_block_4'            => array(
				'title'         => esc_html__( 'Block 4 (overlay)', 'look' ),
				'description'   => esc_html__( 'show block 4 (3 columns overlay grid layout) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-4.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_4::block_config()
			),
			'look_ruby_fw_block_5'            => array(
				'title'         => esc_html__( 'Block 5 (overlay)', 'look' ),
				'description'   => esc_html__( 'show block 5 (2 columns overlay grid layout) in fullwidth section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/fw-block-5.png',
				'section'       => 'section_full_width',
				'block_options' => look_ruby_fw_block_5::block_config()
			),
			'look_ruby_fw_block_code'         => array(
				'title'         => esc_html__( 'HTML/shortcodes', 'look' ),
				'description'   => esc_html__( 'show custom HTML or shortcodes in fullwidth section', 'look' ),
				'section'       => 'section_full_width',
				'img'           => get_template_directory_uri() . '/assets/images/block-code-box.png',
				'block_options' => look_ruby_fw_block_code::block_config()
			),
			'look_ruby_fw_block_ad_box'       => array(
				'title'         => esc_html__( 'Ad Box', 'look' ),
				'description'   => esc_html__( 'Show Advertisement box in fullwidth section', 'look' ),
				'section'       => 'section_full_width',
				'img'           => get_template_directory_uri() . '/assets/images/block-ad-box.png',
				'block_options' => look_ruby_fw_block_ad_box::block_config()
			),
			'look_ruby_fw_subscribe'          => array(
				'title'         => esc_html__( 'Subscribe Box', 'look' ),
				'description'   => esc_html__( 'Subscribe Box : Subscribe Newsletter', 'look' ),
				'section'       => 'section_full_width',
				'img'           => get_template_directory_uri() . '/assets/images/subscribe.png',
				'block_options' => look_ruby_fw_subscribe::block_config()
			),
			'look_ruby_hs_block_1'            => array(
				'title'         => esc_html__( 'Block 1 (List)', 'look' ),
				'description'   => esc_html__( 'Show block post 1 (list layout) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-1.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_1::block_config()
			),
			'look_ruby_hs_block_2'            => array(
				'title'         => esc_html__( 'Block 2 (Grid)', 'look' ),
				'description'   => esc_html__( 'Show block post 2 (grid layout) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-2.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_2::block_config()
			),
			'look_ruby_hs_block_3'            => array(
				'title'         => esc_html__( 'Block 3 (Classic)', 'look' ),
				'description'   => esc_html__( 'Show block post 3 (classic layout) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-3.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_3::block_config()
			),
			'look_ruby_hs_block_4'            => array(
				'title'         => esc_html__( 'Block 4 (overlay)', 'look' ),
				'description'   => esc_html__( 'Show block post 4 (2 columns overlay grid layout) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-4.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_4::block_config()
			),
			'look_ruby_hs_block_5'            => array(
				'title'         => esc_html__( 'Block 5 (small grid)', 'look' ),
				'description'   => esc_html__( 'Show block post 5 (3 columns small grid layout) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-5.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_5::block_config()
			),
			'look_ruby_hs_block_6'            => array(
				'title'         => esc_html__( 'Block 6 (small grid)', 'look' ),
				'description'   => esc_html__( 'Show block post 6 (3 columns small grid layout) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-6.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_6::block_config()
			),
			'look_ruby_hs_block_7'            => array(
				'title'         => esc_html__( 'Block 7', 'look' ),
				'description'   => esc_html__( 'Show block post 7 (left overlay layout & right list post) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-7.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_7::block_config()
			),
			'look_ruby_hs_block_8'            => array(
				'title'         => esc_html__( 'Block 8', 'look' ),
				'description'   => esc_html__( 'Show block post 8 (left overlay layout & right list post) in has sidebar section', 'look' ),
				'img'           => get_template_directory_uri() . '/assets/images/hs-block-8.png',
				'section'       => 'section_has_sidebar',
				'block_options' => look_ruby_hs_block_8::block_config()
			),
			'look_ruby_hs_block_code'         => array(
				'title'         => esc_html__( 'HTML/shortcodes', 'look' ),
				'description'   => esc_html__( 'Show Custom HTML code in has sidebar section', 'look' ),
				'section'       => 'section_has_sidebar',
				'img'           => get_template_directory_uri() . '/assets/images/block-code-box.png',
				'block_options' => look_ruby_hs_block_code::block_config()
			),
			'look_ruby_hs_block_ad_box'       => array(
				'title'         => esc_html__( 'Ad Box', 'look' ),
				'description'   => esc_html__( 'Show Advertisement box in has sidebar section', 'look' ),
				'section'       => 'section_has_sidebar',
				'img'           => get_template_directory_uri() . '/assets/images/block-ad-box.png',
				'block_options' => look_ruby_hs_block_ad_box::block_config()
			),
		);
	}

}


/**
 * this file render ruby composer layouts
 */
if ( ! class_exists( 'look_ruby_composer_render' ) ) {
	class look_ruby_composer_render {

		/**
		 * @return bool|string
		 * render page composer
		 */
		static function render_page() {
			// check
			global $paged;

			$page_composer_data = get_post_meta( get_the_ID(), 'look_ruby_composer_page_data', true );
			$paged              = intval( get_query_var( 'paged' ) );
			if ( empty( $paged ) ) {
				$paged = intval( get_query_var( 'page' ) );
			}

			if ( empty( $page_composer_data ) || ! is_array( $page_composer_data ) || $paged > 1 ) {
				return false;
			}

			// render sections
			$str = '';
			foreach ( $page_composer_data as $section_data ) {
				$str .= self::render_section( $section_data );
			}

			return $str;
		}


		/**
		 * @param $section_data
		 *
		 * @return string
		 * render page section
		 */
		static function render_section( $section_data ) {
			// check
			if ( empty( $section_data['section_type'] ) ) {
				return false;
			}

			// render
			$str = '';
			switch ( $section_data['section_type'] ) {
				case 'section_full_width' :
					$str .= self::render_section_fw( $section_data );
					break;
				case 'section_has_sidebar' :
					$str .= self::render_section_hs( $section_data );
					break;
			}

			return $str;
		}


		/**
		 * @param $section_data
		 *
		 * @return string
		 * render fw section
		 */
		static function render_section_fw( $section_data ) {
			// check blocks
			if ( empty( $section_data['blocks'] ) || ! is_array( $section_data['blocks'] ) ) {
				return false;
			}

			if ( ! empty( $section_data['section_id'] ) ) {
				$section_id = $section_data['section_id'];
			} else {
				$section_id = '';
			}

			// render
			$str = '';
			$str .= self::open_section_fw( $section_id );
			foreach ( $section_data['blocks'] as $block ) {
				$str .= look_ruby_composer_block::render( 'section_full_width', $block );
			}
			$str .= self::close_section_fw();

			return $str;
		}


		/**
		 * @param $section_data
		 *
		 * @return string
		 * render has sidebar section
		 */
		static function render_section_hs( $section_data ) {
			// check blocks
			if ( empty( $section_data['blocks'] ) || ! is_array( $section_data['blocks'] ) ) {
				return false;
			}

			if ( ! empty( $section_data['section_id'] ) ) {
				$section_id = $section_data['section_id'];
			} else {
				$section_id = '';
			}

			// check sidebar position
			if ( ! empty( $section_data['section_sidebar_position'] ) ) {
				$sidebar_position = $section_data['section_sidebar_position'];
			} else {
				$sidebar_position = 'right';
			}

			if ( ! empty( $section_data['section_sidebar_sticky'] ) ) {
				$sidebar_sticky = $section_data['section_sidebar_sticky'];
			} else {
				$sidebar_sticky = 'default';
			}

			// check sidebar name
			if ( ! empty( $section_data['section_sidebar'] ) ) {
				$sidebar_name = $section_data['section_sidebar'];
			} else {
				$sidebar_name = 'look_ruby_sidebar_default';
			}


			// render
			$str = '';
			$str .= self::open_section_hs( $section_id, $sidebar_position );

			// content
			$str .= self::open_section_hs_content( $sidebar_position );
			foreach ( $section_data['blocks'] as $block ) {
				$str .= look_ruby_composer_block::render( 'section_has_sidebar', $block );
			}
			$str .= self::close_section_hs_content();

			// render sidebar
			$str .= self::open_sidebar( $sidebar_sticky );
			$str .= self::render_sidebar( $sidebar_name );
			$str .= self::close_sidebar();

			$str .= self::close_section_hs();

			return $str;
		}


		/**
		 * @param $sidebar_name
		 *
		 * @return bool|string
		 * render sidebar
		 */
		static function render_sidebar( $sidebar_name ) {

			// check sidebar
			if ( empty( $sidebar_name ) ) {
				return false;
			}

			ob_start();
			if ( is_active_sidebar( $sidebar_name ) ) {
				dynamic_sidebar( $sidebar_name );
			}

			return ob_get_clean();

		}


		/**
		 * @param $section_id
		 *
		 * @return string
		 * open section full width
		 */
		static function open_section_fw( $section_id ) {
			if ( ! empty( $section_id ) ) {
				return '<div id="' . esc_attr( $section_id ) . '" class="ruby-section-fw ruby-section clearfix">';
			} else {
				return '<div class="ruby-section-fw ruby-section clearfix">';
			}
		}


		/**
		 * @return string
		 * close fw section
		 */
		static function close_section_fw() {
			return '</div>';
		}


		/**
		 * @param        $section_id
		 * @param string $sidebar_position
		 *
		 * @return string
		 */
		static function open_section_hs( $section_id, $sidebar_position = 'right' ) {
			$str = '';
			if ( ! empty( $section_id ) ) {
				$str .= '<div id="' . esc_attr( $section_id ) . '" class="ruby-section ruby-section-hs clearfix row is-sidebar-' . esc_attr( $sidebar_position ) . '">';
				$str .= '<div class="ruby-container">';
			} else {
				$str .= '<div class="ruby-section ruby-section-hs clearfix row is-sidebar-' . esc_attr( $sidebar_position ) . '">';
				$str .= '<div class="ruby-container">';
			}

			return $str;
		}


		/**
		 * @return string
		 * close sidebar section
		 */
		static function close_section_hs() {
			return '</div></div>';
		}


		/**
		 * @param string $sidebar_position
		 *
		 * @return string
		 * open has content of section has sidebar
		 */
		static function open_section_hs_content( $sidebar_position = 'right' ) {
			if ( 'none' == $sidebar_position ) {
				return '<div class="ruby-content-wrap content-without-sidebar col-xs-12">';
			} else {
				return '<div class="ruby-content-wrap content-with-sidebar col-sm-8 col-xs-12 cleafix">';
			}
		}


		/**
		 * @return string
		 * close sidebar section content
		 */
		static function close_section_hs_content() {
			return '</div>';
		}


		/**
		 * @return string
		 * render sidebar wrap
		 */
		static function open_sidebar( $sticky = null ) {

			// sticky config
			if ( empty( $sticky ) || 'default' == $sticky ) {
				$sticky = look_ruby_core::get_option( 'sticky_sidebar' );
			} elseif ( 'none' == $sticky ) {
				$sticky = false;
			} else {
				$sticky = true;
			}

			if ( ! empty( $sticky ) ) {
				return '<aside class="sidebar-wrap ruby-sidebar-sticky col-sm-4 col-xs-12"><div class="sidebar-inner">';
			} else {
				return '<aside class="sidebar-wrap col-sm-4 col-xs-12"><div class="sidebar-inner">';
			}
		}

		/**
		 * @return string
		 * close sidebar wrap
		 */
		static function close_sidebar() {
			if(has_tag('nowi-wlasciciele')){
				return '<div class="sidebarBanner"><a href="' . get_field('sidebar_banner_link_wlasciciele', 'option') . '"><img class="desktop" src="' . get_field('sidebar_banner_desktop_wlasciciele', 'option')['url'] . '"/><img class="mobile" src="' . get_field('sidebar_banner_mobile_wlasciciele', 'option')['url'] . '"/></a></div></div></aside>';
			}else{
				return '<div class="sidebarBanner"><a href="' . get_field('sidebar_banner_link', 'option') . '"><img class="desktop" src="' . get_field('sidebar_banner_desktop', 'option')['url'] . '"/><img class="mobile" src="' . get_field('sidebar_banner_mobile', 'option')['url'] . '"/></a></div></div></aside>';
			}
		}
	}
}

/**
 * @param $block
 *
 * @return mixed
 * render blocks
 */
if ( ! class_exists( 'look_ruby_composer_block' ) ) {
	class look_ruby_composer_block {
		static function render( $section, $block ) {
			if ( 'section_full_width' == $section ) {
				switch ( $block['block_name'] ) {

					case 'look_ruby_fw_block_ad_box' :
						return look_ruby_fw_block_ad_box::render( $block );

					case 'look_ruby_fw_block_code' :
						return look_ruby_fw_block_code::render( $block );

					case 'look_ruby_fw_block_slider_fw' :
						return look_ruby_fw_block_slider_fw::render( $block );

					case 'look_ruby_fw_block_slider_fw_2' :
						return look_ruby_fw_block_slider_fw_2::render( $block );

					case 'look_ruby_fw_block_slider_hw' :
						return look_ruby_fw_block_slider_hw::render( $block );

					case 'look_ruby_fw_block_carousel' :
						return look_ruby_fw_block_carousel::render( $block );

					case 'look_ruby_fw_block_carousel_1' :
						return look_ruby_fw_block_carousel_1::render( $block );

					case 'look_ruby_fw_block_grid' :
						return look_ruby_fw_block_grid::render( $block );

					case 'look_ruby_fw_block_grid_overlay' :
						return look_ruby_fw_block_grid_overlay::render( $block );

					case 'look_ruby_fw_block_video' :
						return look_ruby_fw_block_video::render( $block );

					case 'look_ruby_fw_block_1' :
						return look_ruby_fw_block_1::render( $block );

					case 'look_ruby_fw_block_2' :
						return look_ruby_fw_block_2::render( $block );

					case 'look_ruby_fw_block_3' :
						return look_ruby_fw_block_3::render( $block );

					case 'look_ruby_fw_block_4' :
						return look_ruby_fw_block_4::render( $block );

					case 'look_ruby_fw_block_5' :
						return look_ruby_fw_block_5::render( $block );

					case 'look_ruby_fw_subscribe' :
						return look_ruby_fw_subscribe::render( $block );

					default :
						return false;
				}
			} else {
				switch ( $block['block_name'] ) {

					case 'look_ruby_hs_block_ad_box' :
						return look_ruby_hs_block_ad_box::render( $block );

					case 'look_ruby_hs_block_code' :
						return look_ruby_hs_block_code::render( $block );

					case 'look_ruby_hs_block_1' :
						return look_ruby_hs_block_1::render( $block );

					case 'look_ruby_hs_block_2' :
						return look_ruby_hs_block_2::render( $block );

					case 'look_ruby_hs_block_3' :
						return look_ruby_hs_block_3::render( $block );

					case 'look_ruby_hs_block_7' :
						return look_ruby_hs_block_7::render( $block );

					case 'look_ruby_hs_block_5' :
						return look_ruby_hs_block_5::render( $block );

					case 'look_ruby_hs_block_6' :
						return look_ruby_hs_block_6::render( $block );

					case 'look_ruby_hs_block_4' :
						return look_ruby_hs_block_4::render( $block );

					case 'look_ruby_hs_block_8' :
						return look_ruby_hs_block_8::render( $block );

					default :
						return false;
				}
			}
		}
	}
}
