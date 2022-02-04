<?php

/**
 * Class look_ruby_fw_block_video
 * render fullwidth block 4 (overlay grid layout)
 */
if ( ! class_exists( 'look_ruby_fw_block_video' ) ) {
	class look_ruby_fw_block_video extends look_ruby_block {

		/**
		 * @param $block
		 *
		 * @return string
		 * render block layout
		 */
		static function render( $block ) {


			// add block data
			$block['block_type']                   = 'full_width';
			$block['block_classes']                = 'fw-block fw-block-video';
			$block['block_options']['wrap_mode']   = 0;
			$block['block_options']['post_format'] = 'video';

			$str = '';
			$str .= parent::open_block( $block );
			$str .= '<div class="ruby-container">';
			$str .= parent::render_header( $block );
			$str .= self::render_content( $block );
			$str .= '</div>';
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
			$str     = '';
			$options = $block['block_options'];

			$str .= parent::open_block_content( 'row' );

			// create class
			if ( ! empty( $options['auto_play'] ) ) {
				$classes = 'video-playlist-outer video-playlist-autoplay';
			} else {
				$classes = 'video-playlist-outer';
			}

			// render layout
			$str .= '<div class="' . esc_attr( $classes ) . '">';
			$str .= '<div class="video-playlist-wrap row clearfix">';
			$str .= '<div class="col-md-8 col-sm-12">';
			$str .= '<div class="video-playlist-iframe">';

			while ( $data_query->have_posts() ) {
				$data_query->the_post();

				$str .= '<div class="post-outer video-playlist-iframe-el">';
				$str .= '<div class="post-thumb-outer">';
				$str .= look_ruby_template_thumbnail::render_video();
				$str .= '</div>';
				$str .= '</div>';
				break;
			}
			$str .= '</div>';
			$str .= '</div>';
			$str .= '<div class="col-md-4 col-sm-12 video-playlist-iframe-nav-outer">';
			$str .= '<div class="video-playlist-iframe-nav">';

			// reset loop
			$data_query->rewind_posts();

			while ( $data_query->have_posts() ) {
				$data_query->the_post();

				// post nav
				$str .= '<div class="post-outer video-playlist-iframe-nav-el is-light-text" data-post_video_nav_id="' . get_the_ID() . '">';
				ob_start();
				get_template_part( 'templates/module/layout', 'list_small' );
				$str .= ob_get_clean();
				$str .= '</div>';
			}
			$str .= '</div>';
			$str .= '</div>';
			$str .= '</div>';
			$str .= '</div>';
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
				'title'          => '',
				'title_color'    => true,
				'title_url'      => true,
				'category_id'    => true,
				'category_ids'   => true,
				'tags'           => true,
				'post_format'    => false,
				'authors'        => true,
				'orderby'        => true,
				'posts_per_page' => 6,
				'offset'         => true,
				'auto_play'      => true
			);
		}
	}
}
