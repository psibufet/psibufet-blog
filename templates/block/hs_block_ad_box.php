<?php

/**
 * Class look_ruby_hs_block_ad_box
 * render has fullwidth block code
 */
if ( ! class_exists( 'look_ruby_hs_block_ad_box' ) ) {
	class look_ruby_hs_block_ad_box extends look_ruby_block {

		/**
		 * @param $block
		 *
		 * @return string
		 * render block layout
		 */
		static function render( $block ) {


			// add block data
			$block['block_type']    = 'has_sidebar';
			$block['block_classes'] = 'block-ad-box';

			$str = '';
			$str .= parent::open_block( $block );
			$str .= self::render_content( $block );
			$str .= parent::close_block();

			return $str;
		}

		/**
		 * @param $block
		 *
		 * @return string
		 * render block block content
		 */
		static function render_content( $block ) {

			// render
			$str = '';
			$str .= parent::open_block_content();

			if ( function_exists( 'look_ruby_ad_script' ) ) {
				$settings = array();

				if ( ! empty( $block['block_options']['ad_title'] ) ) {
					$settings['title'] = $block['block_options']['ad_title'];
				};

				if ( ! empty( $block['block_options']['ad_image'] ) ) {
					$settings['image'] = $block['block_options']['ad_image'];
					if ( ! empty( $block['block_options']['ad_url'] ) ) {
						$settings['destination'] = $block['block_options']['ad_url'];
					}
					ob_start();
					look_ruby_ad_image( $settings );
					$str .= ob_get_clean();
				} else {
					if ( ! empty( $block['block_options']['ad_script'] ) ) {
						$settings['ad_script']       = $block['block_options']['ad_script'];
						$settings['id']              = $block['block_id'];
						$settings['ad_size']         = $block['block_options']['ad_size'];
						$settings['ad_size_desktop'] = $block['block_options']['ad_size_desktop'];
						$settings['ad_size_table']   = $block['block_options']['ad_size_table'];
						$settings['ad_size_mobile']  = $block['block_options']['ad_size_mobile'];
					}
					ob_start();
					look_ruby_ad_script( $settings );
					$str .= ob_get_clean();
				}
			} else {
				$str .= '<div class="ruby-error">' . esc_html__( 'Missing Look Ruby Core plugin, Please install and active it: Appearance > Install Plugins', 'look' ) . '</div>';
			}

			$str .= parent::close_block_content();

			return $str;
		}


		/**
		 * @return array
		 * init block options
		 */
		static function block_config() {
			return array(
				'ad_title'        => esc_attr__( '- Advertisement -', 'look' ),
				'ad_image'        => true,
				'ad_url'          => true,
				'ad_script'       => true,
				'ad_size'         => true,
				'ad_size_desktop' => true,
				'ad_size_table'   => true,
				'ad_size_mobile'  => true,
			);
		}
	}
}
