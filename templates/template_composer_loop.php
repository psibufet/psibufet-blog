<?php
/**
 * Class look_ruby_template_parts
 * This file render some part template for theme
 */

if ( ! class_exists( 'look_ruby_template_composer_loop' ) ) {
	class look_ruby_template_composer_loop {

		/**
		 * @return string
		 * render latest blog section
		 */
		static function render() {

			global $paged;
			$post_id                = get_the_ID();
			$get_paged              = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$get_page               = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
			$options                = array();
			$block_inner_class_name = 'ruby-block-inner';

			// get settings
			$composer_latest_title            = get_post_meta( $post_id, 'look_ruby_composer_latest_title', true );
			$composer_latest_layout           = get_post_meta( $post_id, 'look_ruby_composer_latest_layout', true );
			$composer_latest_number           = get_post_meta( $post_id, 'look_ruby_composer_latest_number', true );
			$composer_latest_offset           = get_post_meta( $post_id, 'look_ruby_composer_latest_offset', true );
			$composer_latest_sidebar          = get_post_meta( $post_id, 'look_ruby_composer_latest_sidebar', true );
			$composer_latest_sidebar_position = get_post_meta( $post_id, 'look_ruby_composer_latest_sidebar_position', true );
			$composer_latest_sidebar_sticky   = get_post_meta( $post_id, 'look_ruby_composer_sidebar_sticky', true );
			$composer_latest_big_first        = get_post_meta( $post_id, 'look_ruby_composer_latest_big_first', true );
			$composer_latest_category_ids     = get_post_meta( $post_id, 'look_ruby_composer_latest_category', true );
			$composer_latest_unique           = get_post_meta( $post_id, 'look_ruby_composer_latest_unique', true );

			if ( $get_paged > $get_page ) {
				$paged = $get_paged;
			} else {
				$paged = $get_page;
			}

			if ( empty( $composer_latest_layout ) ) {
				$composer_latest_layout = 'layout_classic';
			}

			if ( empty( $composer_latest_number ) ) {
				$composer_latest_number = get_option( 'posts_per_page' );
			}

			if ( empty( $composer_latest_sidebar ) ) {
				$composer_latest_sidebar = 'look_ruby_sidebar_default';
			}

			if ( empty( $composer_latest_sidebar_position ) ) {
				$composer_latest_sidebar_position = 'right';
			}

			if ( empty( $composer_latest_offset ) ) {
				$composer_latest_offset = 0;
			} else {
				$composer_latest_offset = intval( esc_attr( $composer_latest_offset ) );
			}

			if ( ! empty( $composer_latest_category_ids ) ) {
				$composer_latest_category_ids = esc_attr( $composer_latest_category_ids );
			} else {
				$composer_latest_category_ids = '';
			}

			if ( ! empty( $composer_latest_big_first ) ) {
				$options['big_first'] = true;
			} else {
				$options['big_first'] = false;
			}

			// query data
			$param = array(
				'posts_per_page' => $composer_latest_number,
				'no_found_rows'  => false,
				'category_ids'   => $composer_latest_category_ids,
				'offset'         => $composer_latest_offset,
			);

			if ( ! empty( $composer_latest_unique ) && 'default' == $composer_latest_unique ) {
				$composer_latest_unique = look_ruby_core::get_option( 'unique_post' );
			}

			// unique post
			if ( ! empty( $composer_latest_unique ) ) {
				global $look_ruby_unique;
				$unique_data = get_option( 'look_ruby_unique_data' );

				if ( 1 == $paged ) {
					$param['unique_filter'] = true;

					if ( ! empty( $look_ruby_unique ) && empty( $unique_data ) ) {
						delete_option( 'look_ruby_unique_data' );
						add_option( 'look_ruby_unique_data', $look_ruby_unique );
					}
				}

				if ( ( 1 != $paged ) && ! empty( $unique_data ) ) {
					$param['post_not_in'] = $unique_data;
				}
			}

			$data_query = look_ruby_query::get_custom_query( $param, $paged );

			$options['blog_sidebar_position'] = $composer_latest_sidebar_position;

			// render
			$str = '';

			if ( ! empty( $composer_latest_sidebar ) && 'none' != $composer_latest_sidebar_position ) {
				$str .= look_ruby_composer_render::open_section_hs( 'ruby-composer-latest-blog', $composer_latest_sidebar_position );
			} else {
				$str .= look_ruby_composer_render::open_section_fw( 'ruby-composer-latest-blog' );
				$block_inner_class_name = 'ruby-block-inner ruby-container';
			}

			$str .= look_ruby_composer_render::open_section_hs_content( $composer_latest_sidebar_position );

			if ( empty( $composer_latest_big_first ) ) {
				$str .= '<div class="ruby-block-wrap block-composer-latest-blog ' . esc_attr( $composer_latest_layout ) . '">';
			} else {
				$str .= '<div class="ruby-block-wrap block-composer-latest-blog is-big-first ' . esc_attr( $composer_latest_layout ) . '">';
			}

			$str .= '<div class="' . $block_inner_class_name . '">';
			// block title
			if ( ! empty( $composer_latest_title ) ) {
				$str .= self::render_block_title( $composer_latest_title );
			}

			// blog content
			$str .= '<div class="block-content-wrap">';
			if ( $data_query->have_posts() ) {
				switch ( $composer_latest_layout ) {
					case 'layout_classic':
						$str .= self::render_layout_classic( $data_query );
						break;
					case 'layout_classic_lite':
						$str .= self::render_layout_classic_lite( $data_query );
						break;
					case 'layout_list' :
						$str .= self::render_layout_list( $data_query, $options );
						break;
					case 'layout_grid' :
						$str .= self::render_layout_grid( $data_query, $options );
						break;
					case 'layout_grid_small_s' :
						$str .= self::render_layout_grid_small_s( $data_query, $options );
						break;
					case 'layout_grid_small' :
						$str .= self::render_layout_grid_small( $data_query, $options );
						break;
					case 'layout_overlay_small':
						$str .= self::render_layout_overlay_small( $data_query, $options );
						break;

				}
			}

			$str .= look_ruby_template_part::page_pagination( $data_query, $composer_latest_offset );

			wp_reset_postdata();

			$str .= '</div>';
			$str .= '</div>';
			$str .= '</div>';

			$str .= look_ruby_composer_render::close_section_hs_content();

			// render sidebar
			if ( ! empty( $composer_latest_sidebar ) && 'none' != $composer_latest_sidebar_position ) {
				$str .= look_ruby_composer_render::open_sidebar( $composer_latest_sidebar_sticky );
				$str .= look_ruby_composer_render::render_sidebar( $composer_latest_sidebar );
				$str .= look_ruby_composer_render::close_sidebar();
			}

			// close section
			$str .= look_ruby_composer_render::close_section_hs();

			return $str;

		}


		/**
		 * @param string $block_title
		 *
		 * @return string
		 * render header
		 */
		static function render_block_title( $block_title = '' ) {
			$str = '';
			$str .= '<div class="block-header-wrap">';
			$str .= '<div class="block-header-inner">';
			$str .= '<div class="block-title"><h3>' . esc_html( $block_title ) . '</h3></div>';
			$str .= '</div>';
			$str .= '</div>';

			return $str;
		}

		/**
		 * @param $data_query
		 *
		 * @return string
		 * render layout classic
		 */
		static function render_layout_classic( $data_query ) {
			ob_start();
			while ( $data_query->have_posts() ) :
				$data_query->the_post();
				get_template_part( 'templates/module/layout', 'classic' );
			endwhile;

			return ob_get_clean();
		}

		/**
		 * @param $data_query
		 *
		 * @return string
		 * render layout classic lite
		 */
		static function render_layout_classic_lite( $data_query ) {
			ob_start();
			while ( $data_query->have_posts() ) :
				$data_query->the_post();
				get_template_part( 'templates/module/layout', 'classic_lite' );
			endwhile;

			return ob_get_clean();
		}


		/**
		 * @param $data_query
		 *
		 * @return string
		 * render layout list
		 */
		static function render_layout_list( $data_query, $look_ruby_options = array() ) {
			ob_start();
			$flag = true;
			while ( $data_query->have_posts() ) :
				$data_query->the_post();

				if ( ( true === $flag ) && ! empty( $look_ruby_options['big_first'] ) ) {
					get_template_part( 'templates/module/layout', 'classic_lite' );
					$flag = false;
					continue;
				}
				get_template_part( 'templates/module/layout', 'list' );
			endwhile;

			return ob_get_clean();
		}


		/**
		 * @param $data_query
		 *
		 * @return string
		 * render layout grid
		 */
		static function render_layout_grid( $data_query, $look_ruby_options = array() ) {

			$flag    = true;
			$counter = 1;

			// check fullwidth
			if ( ! empty( $look_ruby_options['blog_sidebar_position'] ) && 'none' == $look_ruby_options['blog_sidebar_position'] ) {
				$classes_col = 'col-sm-4 col-xs-12 post-outer';
			} else {
				$classes_col = 'col-sm-6 col-xs-12 post-outer';
			}

			ob_start();
			while ( $data_query->have_posts() ) :
				$data_query->the_post();

				if ( ( true === $flag ) && ! empty( $look_ruby_options['big_first'] ) ) {
					echo '<div class="first-post-wrap col-sx-12 post-outer">';
					get_template_part( 'templates/module/layout', 'classic_lite' );
					echo '</div>';
					$flag = false;
					continue;
				} else {

					// render block
					echo '<div class="' . esc_attr( $classes_col ) . '">';
					get_template_part( 'templates/module/layout', 'grid' );
					echo '</div>';


					$counter ++;
				}

			endwhile;

			return ob_get_clean();
		}

		/**
		 * @param $data_query
		 *
		 * @return string
		 * render layout grid small
		 */
		static function render_layout_grid_small( $data_query, $look_ruby_options = array() ) {

			$flag = true;

			if ( ! empty( $look_ruby_options['blog_sidebar_position'] ) && 'none' == $look_ruby_options['blog_sidebar_position'] ) {
				$classes_col = 'col-sm-3 col-xs-6 post-outer';
			} else {
				$classes_col = 'col-sm-4 col-xs-6 post-outer';
			}

			ob_start();
			while ( $data_query->have_posts() ) :
				$data_query->the_post();

				if ( ( true === $flag ) && ! empty( $look_ruby_options['big_first'] ) ) {
					echo '<div class="first-post-wrap col-sx-12 post-outer">';
					get_template_part( 'templates/module/layout', 'classic_lite' );
					echo '</div>';

					$flag = false;
					continue;
				} else {
					// render block
					echo '<div class="' . esc_attr( $classes_col ) . '">';
					get_template_part( 'templates/module/layout', 'grid_small' );
					echo '</div>';
				}

			endwhile;

			return ob_get_clean();
		}


		/**
		 * @param $data_query
		 *
		 * @return string
		 * render layout grid small square
		 */
		static function render_layout_grid_small_s( $data_query, $look_ruby_options = array() ) {

			$flag = true;

			if ( ! empty( $look_ruby_options['blog_sidebar_position'] ) && 'none' == $look_ruby_options['blog_sidebar_position'] ) {
				$classes_col = 'col-sm-3 col-xs-6 post-outer';
			} else {
				$classes_col = 'col-sm-4 col-xs-6 post-outer';
			}

			ob_start();
			while ( $data_query->have_posts() ) :
				$data_query->the_post();

				if ( ( true === $flag ) && ! empty( $look_ruby_options['big_first'] ) ) {
					echo '<div class="first-post-wrap col-sx-12 post-outer">';
					get_template_part( 'templates/module/layout', 'classic_lite' );
					echo '</div>';

					$flag = false;
					continue;
				} else {

					// render block
					echo '<div class="' . esc_attr( $classes_col ) . '">';
					get_template_part( 'templates/module/layout', 'grid_small_s' );
					echo '</div>';

				}

			endwhile;

			return ob_get_clean();
		}


		/**
		 * @param $data_query
		 *
		 * @return string
		 * render layout overlay small
		 */
		static function render_layout_overlay_small( $data_query, $look_ruby_options = array() ) {

			$flag = true;

			if ( ! empty( $look_ruby_options['blog_sidebar_position'] ) && 'none' == $look_ruby_options['blog_sidebar_position'] ) {
				$classes_col = 'col-sm-4 col-xs-12 post-outer';
			} else {
				$classes_col = 'col-sm-6 col-xs-12 post-outer';
			}

			ob_start();
			while ( $data_query->have_posts() ) :
				$data_query->the_post();

				if ( ( true === $flag ) && ! empty( $look_ruby_options['big_first'] ) ) {
					echo '<div class="first-post-wrap col-sx-12 post-outer">';
					get_template_part( 'templates/module/layout', 'classic_lite' );
					echo '</div>';
					$flag = false;

					continue;
				} else {
					echo '<div class="' . esc_attr( $classes_col ) . '">';
					get_template_part( 'templates/module/layout', 'overlay_small' );
					echo '</div>';
				}

			endwhile;

			return ob_get_clean();
		}

	}
}