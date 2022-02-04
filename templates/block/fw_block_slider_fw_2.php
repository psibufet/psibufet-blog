<?php
/**
 * Class block fw slider
 * render full width slider
 */
if ( ! class_exists( 'look_ruby_fw_block_slider_fw_2' ) ) {
	class look_ruby_fw_block_slider_fw_2 extends look_ruby_block {

		/**
		 * @param $block
		 *
		 * @return string
		 * render block layout
		 */
		static function render( $block ) {

			$block['block_type']                 = 'full_width';
			$block['block_classes']              = 'fw-block fw-block-slider-fw-2';
			$block['block_options']['wrap_mode'] = 0;

			if ( empty( $block['block_options']['posts_per_page'] ) ) {
				$block['block_options']['posts_per_page'] = 4;
			}

			$str = '';
			$str .= parent::open_block( $block );
			$str .= parent::render_header( $block );
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

			$data_query = parent::get_data( $block );

			$str = '';
			$str .= parent::open_block_content();

			if ( empty( $data_query->post_count ) ) {
				$str .= parent::no_content();
			} else {
				$slides     = array();
				$nav_slides = array();
				$total      = $data_query->post_count;

				$slide_index = 1;
				$nav_index   = $total;

				while ( $data_query->have_posts() ) :
					$data_query->the_post();
					ob_start(); ?>
					<div class="p-outer">
						<?php get_template_part( 'templates/module/fw', 'slider_2' ); ?>
					</div>
					<?php $slides[ $slide_index ] = ob_get_clean();
					ob_start();  ?>
					<div class="p-outer-nav">
						<?php get_template_part( 'templates/module/layout', 'fw_slider_nav' ); ?>
					</div>
					<?php $nav_slides[ $nav_index ] = ob_get_clean();

					$slide_index ++;
					if ( $nav_index == $total ) {
						$nav_index = 1;
					} else {
						$nav_index ++;
					}

				endwhile;

				$str .= '<div class="slider-wrap is-fw-slider">';
				$str .= '<div class="slider-loading"></div>';
				$str .= '<div class="ruby-slider-fw-2 slider-init">';
				for ( $index = 1; $index <= $total; $index ++ ) {
					$str .= '<div class="feat-2-el">';
					if ( ! empty( $slides[ $index ] ) ) {
						$str .= $slides[ $index ];
					}
					if ( ! empty( $nav_slides[ $index ] ) ) {
						$str .= $nav_slides[ $index ];
					}
					$str .= '</div>';
				}

				$str .= '</div>';
				$str .= '</div>';

			}

			$str .= parent::close_block_content();

			wp_reset_postdata();

			return $str;
		}

		/**
		 * @return array
		 * init block options
		 */
		static function block_config() {
			return array(
				'category_id'    => true,
				'category_ids'   => true,
				'tags'           => true,
				'post_format'    => true,
				'authors'        => true,
				'orderby'        => true,
				'posts_per_page' => 4,
				'offset'         => true
			);
		}
	}
}
