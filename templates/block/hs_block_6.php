<?php

/**
 * Class look_ruby_hs_block_6
 * render has sidebar block 6
 */
if ( ! class_exists( 'look_ruby_hs_block_6' ) ) {
	class look_ruby_hs_block_6 extends look_ruby_block {

		/**
		 * @param $block
		 *
		 * @return string
		 * render block layout
		 */
		static function render( $block ) {


			// add block data
			$block['block_type']    = 'has_sidebar';
			$block['block_classes'] = 'hs-block hs-block-6';

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

			// query data
			$data_query = parent::get_data( $block );

			// render
			$str = '';
			$str .= parent::open_block_content( 'row' );

			// check empty
			if ( empty( $data_query->post_count ) ) {
				$str .= parent::no_content();
			} else {
				ob_start();
				while ( $data_query->have_posts() ) :
					$data_query->the_post();

					// render block
					echo '<div class="col-sm-4 col-xs-6">';
					get_template_part( 'templates/module/layout', 'grid_small_s' );
					echo '</div>';

				endwhile;

				$str .= ob_get_clean();
			}

			$str .= parent::close_block_content();

			// reset post data
			wp_reset_postdata();

			return $str;
		}


		/**
		 * @return array
		 * init block options
		 */
		static function block_config() {
			return array(
				'title'          => esc_html__( 'latest posts', 'look' ),
				'title_color'    => true,
				'title_url'      => true,
				'category_id'    => true,
				'category_ids'   => true,
				'tags'           => true,
				'post_format'    => true,
				'authors'        => true,
				'orderby'        => true,
				'posts_per_page' => 3,
				'offset'         => true,
				'view_more'      => true,
				'view_more_text' => true,
				'view_more_link' => true
			);
		}
	}
}
