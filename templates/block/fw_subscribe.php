<?php

/**
 * Class look_ruby_fw_subscribe
 * render has has sidebar block code
 */
if ( ! class_exists( 'look_ruby_fw_subscribe' ) ) {
	class look_ruby_fw_subscribe extends look_ruby_block {

		/**
		 * @param $block
		 *
		 * @return string
		 * render block layout
		 */
		static function render( $block ) {


			// add block data
			$block['block_type']                 = 'full_width';
			$block['block_classes']              = 'fw-block block-fw-subscribe';
			$block['block_options']['wrap_mode'] = 1;

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
			$str .= '<aside class="subscribe-box">';
			$str .= '<div class="subscribe-content">';
			if ( ! empty( $block['block_options']['title'] ) ) {
				$str .= '<h3 class="subscribe-title">' . apply_filters( 'the_title', esc_html( $block['block_options']['title'] ) ) . '</h3>';
			}
			if ( ! empty( $block['block_options']['content'] ) ) {
				$str .= '<p class="subscribe-description">' . wp_kses_post( $block['block_options']['content'] ) . '</p>';
			}
			$str .= '</div>';
			if ( ! empty( $block['block_options']['shortcode'] ) ) {
				$str .= '<div class="subscribe-form">';
				$str .= '<div class="subscribe-form-inner">' . do_shortcode( $block['block_options']['shortcode'] ) . '</div>';
				$str .= '</div>';
			}
			$str .= '</aside>';
			$str .= parent::close_block_content();

			return $str;
		}


		/**
		 * @return array
		 * init block options
		 */
		static function block_config() {
			return array(
				'title'     => true,
				'content'   => true,
				'shortcode' => true
			);
		}
	}
}
