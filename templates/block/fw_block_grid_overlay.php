<?php

/**
 * Class look_ruby_fw_block_grid_overlay
 * render fw block grid overlay
 */
if ( ! class_exists( 'look_ruby_fw_block_grid_overlay' ) ) {
	class look_ruby_fw_block_grid_overlay extends look_ruby_block {

		/**
		 * @param $block
		 *
		 * @return string
		 * render block layout
		 */
		static function render( $block ) {


			//add block data
			$block['block_type']                      = 'full_width';
			$block['block_classes']                   = 'fw-block fw-block-grid-overlay';
			$block['block_options']['wrap_mode']      = 1;
			$block['block_options']['posts_per_page'] = 3;

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
			//query data
			$data_query    = parent::get_data( $block );
			$counter       = 1;

			//render
			$str = '';
			$str .= parent::open_block_content();

			//check empty
			if ( empty( $data_query->post_count  ) || ($data_query-> post_count < 3)) {
				$str .= parent::not_enough_post();
			} else {
				ob_start();
				?>
				<div class="row">
					<?php while ($data_query->have_posts()) : ?>
					<?php $data_query->the_post(); ?>
					<?php if (1 == $counter) : ?>
					<div class="is-left-col col-sm-8 col-xs-12">
						<?php get_template_part( 'templates/module/layout', 'overlay_1' ); ?>
					</div>
					<div class="is-right-col col-sm-4 col-xs-12">
						<?php else: ?>
							<?php get_template_part( 'templates/module/layout', 'overlay_small' ); ?>
						<?php endif; ?>

						<?php $counter ++; ?>
						<?php endwhile; ?>
					</div>
				</div>
				<?php

				$str .= ob_get_clean();
			}

			$str .= parent::close_block_content();

			//reset post data
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
				'post_format'    => true,
				'authors'        => true,
				'orderby'        => true,
				'offset'         => true,
				'view_more'      => true,
				'view_more_text' => true,
				'view_more_link' => true
			);
		}
	}
}
