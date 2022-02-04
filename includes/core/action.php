<?php
/**
 * redirect to active plugin
 */
if ( ! function_exists( 'look_ruby_after_theme_active' ) ) {
	function look_ruby_after_theme_active() {

		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {

			$first_active = get_option( 'look_ruby_first_active_theme', '' );
			if ( ! empty( $first_active ) ) {
				update_option( 'look_ruby_first_active_theme', '1' );
			} else {
				add_option( 'look_ruby_first_active_theme', '1' );
			}

			// redirect
			wp_redirect( admin_url( 'admin.php?page=look-plugins' ) );
			exit;
		}
	}

	add_action( 'after_switch_theme', 'look_ruby_after_theme_active' );
}


/**
 * @param $body_classes
 *
 * @return array
 * add class to body
 */
if ( ! function_exists( 'look_ruby_body_add_classes' ) ) {
	function look_ruby_body_add_classes( $body_classes ) {

		$body_classes[] = 'ruby-body';
		if ( 'is-boxed' == look_ruby_core::get_option( 'main_site_layout' ) ) {
			$body_classes[] = 'is-boxed';
			$site_bg        = look_ruby_core::get_option( 'site_background' );
			if ( ! empty( $site_bg ) ) {
				$body_classes[] = 'is-site-bg';
			}
			$site_bg_link = look_ruby_core::get_option( 'site_background_link' );
			if ( ! empty( $site_bg_link ) ) {
				$body_classes[] = 'is-site-link';
			}
		} else {
			$body_classes[] = 'is-full-width';
		}

		// sticky navigation
		$sticky_nav = look_ruby_core::get_option( 'sticky_navigation' );
		if ( ! empty( $sticky_nav ) ) {
			$body_classes[] = 'is-sticky-nav';

			// smart sticky
			$sticky_nav_smart = look_ruby_core::get_option( 'sticky_navigation_smart' );
			if ( ! empty( $sticky_nav_smart ) ) {
				$body_classes[] = 'is-smart-sticky';
			}
		}

		// enable smooth scrolling
		$smooth_scroll = look_ruby_core::get_option( 'site_smooth_scroll' );
		if ( ! empty( $smooth_scroll ) ) {
			$body_classes[] = 'is-site-smooth-scroll';
		}

		// enable smooth display
		$smooth_scroll = look_ruby_core::get_option( 'site_smooth_display' );
		if ( ! empty( $smooth_scroll ) ) {
			$body_classes[] = 'is-site-smooth-display';
		}

		// social tooltips
		$social_tooltip = look_ruby_core::get_option( 'social_tooltip' );
		if ( ! empty( $social_tooltip ) ) {
			$body_classes[] = 'is-social-tooltip';
		}

		if ( is_single() ) {
			$infinite_scroll = look_ruby_core::get_option( 'single_post_infinite_scroll' );
			$hide_sidebar    = look_ruby_core::get_option( 'single_post_scroll_hide_sidebar' );
			$left_margin     = look_ruby_core::get_option( 'single_content_margin' );

			if ( ! empty( $infinite_scroll ) && ! empty( $hide_sidebar ) ) {
				$body_classes[] = 'is-hide-sidebar';
			}

			if ( ! empty( $left_margin ) && ! empty( $left_margin ) ) {
				$body_classes[] = 'is-left-margin';
			}
		}

		// return
		return $body_classes;
	}

	add_filter( 'body_class', 'look_ruby_body_add_classes' );
}


/**
 * add favicon & BookmarkLet to header
 */
if ( ! function_exists( 'look_ruby_wp_header' ) ) {
	function look_ruby_wp_header() {
		// get theme options
		$apple_icon = look_ruby_core::get_option( 'apple_touch_ion' );
		$metro_icon = look_ruby_core::get_option( 'metro_icon' );

		// iso bookmark
		if ( ! empty( $apple_icon['url'] ) ) {
			echo '<link rel="apple-touch-icon" href="' . esc_url( $apple_icon['url'] ) . '" />';
		}

		// metro bookmark
		if ( ! empty( $metro_icon['url'] ) ) {
			echo '<meta name="msapplication-TileColor" content="#ffffff">';
			echo '<meta name="msapplication-TileImage" content="' . esc_url( $metro_icon['url'] ) . '" />';
		}
	}

	add_action( 'wp_head', 'look_ruby_wp_header', 3 );
}


/**
 * remove page in search result
 */
if ( ! function_exists( 'look_ruby_filter_search' ) ) {
	function look_ruby_filter_search() {

		if ( is_admin() ) {
			return false;
		}

		global $wp_post_types;

		$wp_post_types['page']->exclude_from_search = true;
	}

	add_action( 'init', 'look_ruby_filter_search' );
};


/**
 * add options to javascript
 */
if ( ! function_exists( 'look_ruby_script_options_value' ) ) {
	function look_ruby_script_options_value() {
		// get theme options

		// back to top
		$back_to_top        = look_ruby_core::get_option( 'site_back_to_top' );
		$back_to_top_mobile = intval( look_ruby_core::get_option( 'site_back_to_top_mobile' ) );
		$single_image_popup = look_ruby_core::get_option( 'single_post_image_popup' );
		$body_bg_link       = look_ruby_core::get_option( 'site_background_link' );

		// move to js script
		if ( ! empty( $back_to_top ) ) {
			wp_localize_script( 'look_ruby_main_script', 'look_ruby_to_top', array( strval( $back_to_top ) ) );
		}
		if ( ! empty( $back_to_top_mobile ) ) {
			wp_localize_script( 'look_ruby_main_script', 'look_ruby_to_top_mobile', array( strval( $back_to_top_mobile ) ) );
		}
		if ( ! empty( $single_image_popup ) ) {
			wp_localize_script( 'look_ruby_main_script', 'look_ruby_single_image_popup', array( strval( $single_image_popup ) ) );
		}
		if ( ! empty( $body_bg_link ) ) {
			wp_localize_script( 'look_ruby_main_script', 'look_ruby_site_bg_link', array( $body_bg_link ) );
		}

	}

	add_action( 'wp_footer', 'look_ruby_script_options_value', 10 );
}

/**
 * total word of content
 */
if ( ! function_exists( 'look_add_total_word' ) ) {
    function look_add_total_word( $post_id = '' ) {

        if ( empty( $post_id ) ) {
            $post_id = get_the_ID();
        }

        $content    = get_post_field( 'post_content', $post_id );
        $total_word = look_ruby_core::look_total_word( $content );
        update_post_meta( $post_id, 'look_total_word', $total_word );

        return $total_word;
    }

    add_action( 'save_post', 'look_add_total_word', 100, 1 );
}


/**
 * add span wrap for category number in widget
 */
if ( ! function_exists( 'look_ruby_category_post_count' ) ) {
	function look_ruby_category_post_count( $str ) {
		$pos = strpos( $str, '</a> (' );
		if ( false != $pos ) {
			$str = str_replace( '</a> (', '<span class="number-post-count">', $str );
			$str = str_replace( ')', '</span></a>', $str );
		}

		return $str;
	}

	add_filter( 'wp_list_categories', 'look_ruby_category_post_count' );
};


/**
 * add span wrap for archives number in widget
 */
if ( ! function_exists( 'look_ruby_archives_post_count' ) ) {
	function look_ruby_archives_post_count( $str ) {
		$pos = strpos( $str, '</a>&nbsp;(' );
		if ( false != $pos ) {
			$str = str_replace( '</a>&nbsp;(', '<span class="number-post-count">', $str );
			$str = str_replace( ')', '</span></a>', $str );
		}

		return $str;
	}

	add_filter( 'get_archives_link', 'look_ruby_archives_post_count' );
}


/**
 * ajax video playlist
 */
if ( ! function_exists( 'look_ruby_playlist_video' ) ) {
	add_action( 'wp_ajax_nopriv_look_ruby_playlist_video', 'look_ruby_playlist_video' );
	add_action( 'wp_ajax_look_ruby_playlist_video', 'look_ruby_playlist_video' );

	function look_ruby_playlist_video() {

		// get and validate request data
		$str = '';

		if ( ! empty( $_POST['post_id'] ) ) {
			$post_id = esc_attr( $_POST['post_id'] );
		}

		if ( ! empty( $post_id ) ) {

			global $post;
			$post = get_post( $post_id );
			setup_postdata( $post );

			$str .= '<div class="post-thumb-outer">';
			$str .= look_ruby_template_thumbnail::render_video();
			$str .= '</div>';
		}

		wp_reset_postdata();

		die( json_encode( $str ) );
	}
}


/**
 * @param $redirect_url
 *
 * @return bool
 * permalinks
 */
if ( ! function_exists( 'look_ruby_pagination_redirect' ) ) {
	function look_ruby_pagination_redirect( $redirect_url ) {
		global $wp_query;

		if ( is_page() && ! is_feed() && isset( $wp_query->queried_object ) && get_query_var( 'page' ) && 'page-composer.php' == get_page_template_slug( $wp_query->queried_object->ID ) ) {
			return false;
		}

		return $redirect_url;
	}

	add_filter( 'redirect_canonical', 'look_ruby_pagination_redirect', 10 );
}


/* wc action */
if ( class_exists( 'WooCommerce' ) ) {
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 15 );
}


/**
 * @param $options
 *
 * @return string
 * blog ajax param
 */
if ( ! function_exists( 'look_ruby_blog_ajax_param' ) ) {
	function look_ruby_blog_ajax_param( $options ) {

		if ( empty( $options['blog_pagination'] ) || 'number' == $options['blog_pagination'] ) {
			return false;
		}

		global $wp_query;

		$str   = '';
		$param = array();

		$param['data-blog_page_current'] = 1;

		if ( get_query_var( 'paged' ) ) {
			$param['data-blog_page_current'] = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$param['data-blog_page_current'] = get_query_var( 'page' );
		}

		if ( ! empty( $wp_query->max_num_pages ) ) {
			$param['data-blog_page_max'] = $wp_query->max_num_pages;
		}

		if ( ! empty( $options['blog_layout'] ) ) {
			$param['data-blog_layout'] = $options['blog_layout'];
		}

		if ( ! empty( $options['big_first'] ) ) {
			$param['data-big_first'] = 1;
		}

		$param['data-posts_per_page'] = get_option( 'posts_per_page' );


		if ( ! empty( $options['blog_sidebar_position'] ) ) {
			$param['data-blog_sidebar_position'] = $options['blog_sidebar_position'];
		}

		// archive pages
		if ( is_author() ) {
			$param['data-author_id'] = get_the_author_meta( 'ID' );
		} elseif ( is_tag() ) {
			$param['data-tags'] = single_tag_title( '', false );
		} elseif ( is_category() ) {
			global $wp_query;
			$param['data-category_id'] = $wp_query->get_queried_object_id();
		}

		// foreach
		foreach ( $param as $k => $v ) {
			if ( ! empty( $k ) ) {
				$str .= esc_attr( $k ) . '= ' . esc_attr( $v ) . ' ';
			}
		}

		return $str;
	}
}


/**
 * blog ajax pagination data
 */
if ( ! function_exists( 'look_ruby_pagination_data' ) ) {
	function look_ruby_pagination_data() {

		$param         = array();
		$data_response = array();

		if ( ! empty( $_POST['data'] ) ) {
			$param = look_ruby_data_validate( $_POST['data'] );
		}

		if ( empty( $param['blog_page_next'] ) ) {
			$param['blog_page_next'] = 2;
		}

		$data_query = look_ruby_query::get_custom_query( $param, intval( $param['blog_page_next'] ) );

		if ( ! empty( $data_query->max_num_pages ) ) {
			$data_response['blog_page_max'] = $data_query->max_num_pages;
		}

		if ( ! empty( $data_query->paged ) ) {
			$data_response['blog_page_current'] = $data_query->paged;
		} else {
			$data_response['blog_page_current'] = $param['blog_page_next'];
		}

		// get post data
		$data_response['content'] = look_ruby_pagination_data_content( $data_query, $param );

		wp_reset_postdata();

		die( json_encode( $data_response ) );
	}
}
add_action( 'wp_ajax_nopriv_look_ruby_pagination_data', 'look_ruby_pagination_data' );
add_action( 'wp_ajax_look_ruby_pagination_data', 'look_ruby_pagination_data' );


/**
 * get block content
 */
if ( ! function_exists( 'look_ruby_pagination_data_content' ) ) {
	function look_ruby_pagination_data_content( $data_query, $param ) {

		ob_start();

		if ( ! empty( $param['blog_layout'] ) ) {
			switch ( $param['blog_layout'] ) {
				// case classic
				case 'layout_classic' :

					look_ruby_template_wrapper::open_blog_content_wrap();
					while ( $data_query->have_posts() ) {
						$data_query->the_post();
						get_template_part( 'templates/module/layout', 'classic' );
					}
					look_ruby_template_wrapper::close_blog_content_wrap();

					break;
				case 'layout_classic_lite' :

					look_ruby_template_wrapper::open_blog_content_wrap();
					while ( $data_query->have_posts() ) {
						$data_query->the_post();
						get_template_part( 'templates/module/layout', 'classic_lite' );
					}
					look_ruby_template_wrapper::close_blog_content_wrap();

					break;
				case 'layout_list' :

					$flag = true;
					look_ruby_template_wrapper::open_blog_content_wrap();
					while ( $data_query->have_posts() ) {
						$data_query->the_post();

						if ( ( true === $flag ) && ! empty( $param['big_first'] ) ) {
							get_template_part( 'templates/module/layout', 'classic_lite' );
							$flag = false;
							continue;
						}

						get_template_part( 'templates/module/layout', 'list' );
						look_ruby_template_wrapper::close_blog_content_wrap();

					}
					break;
				case 'layout_grid' :

					$flag    = true;
					$counter = 1;

					// check fullwidth
					if ( ! empty( $param['blog_sidebar_position'] ) && 'none' == $param['blog_sidebar_position'] ) {
						$classes_col  = 'col-sm-4 col-xs-12';
						$divider_step = 3;
					} else {
						$classes_col  = 'col-sm-6 col-xs-12';
						$divider_step = 2;
					}

					look_ruby_template_wrapper::open_blog_content_wrap();
					while ( $data_query->have_posts() ) {
						$data_query->the_post();

						if ( ( true === $flag ) && ! empty( $param['big_first'] ) ) {
							echo '<div class="first-post-wrap col-sx-12">';
							get_template_part( 'templates/module/layout', 'classic_lite' );
							echo '</div>';
							$flag = false;
							continue;
						} else {

							// render block
							echo '<div class="' . esc_attr( $classes_col ) . '">';
							get_template_part( 'templates/module/layout', 'grid' );
							echo '</div>';

							if ( 0 == $counter % $divider_step ) {
								look_ruby_template_part::render_divider();
							}

							$counter ++;
						}
					}
					look_ruby_template_wrapper::close_blog_content_wrap();

					break;

				case 'layout_grid_small' :

					$flag = true;
					if ( ! empty( $param['blog_sidebar_position'] ) && 'none' == $param['blog_sidebar_position'] ) {
						$classes_col = 'col-sm-3 col-xs-6';
					} else {
						$classes_col = 'col-sm-4 col-xs-6';
					}

					look_ruby_template_wrapper::open_blog_content_wrap();
					if ( empty( $param['big_first'] ) ) {
						echo '<div class="blog-content-inner">';
					}

					while ( $data_query->have_posts() ) {
						$data_query->the_post();

						if ( ( true === $flag ) && ! empty( $param['big_first'] ) ) {
							echo '<div class="first-post-wrap col-sx-12">';
							get_template_part( 'templates/module/layout', 'classic_lite' );
							echo '</div>';

							echo '<div class="blog-content-inner">';

							$flag = false;
							continue;
						} else {
							// render block
							echo '<div class="' . esc_attr( $classes_col ) . '">';
							get_template_part( 'templates/module/layout', 'grid_small' );
							echo '</div>';
						}
					}

					echo '</div>';
					look_ruby_template_wrapper::close_blog_content_wrap();

					break;

				case 'layout_grid_small_s' :
					$flag = true;
					if ( ! empty( $param['blog_sidebar_position'] ) && 'none' == $param['blog_sidebar_position'] ) {
						$classes_col = 'col-sm-3 col-xs-6';
					} else {
						$classes_col = 'col-sm-4 col-xs-6';
					}

					look_ruby_template_wrapper::open_blog_content_wrap();

					if ( empty( $param['big_first'] ) ) {
						echo '<div class="blog-content-inner">';
					}

					while ( $data_query->have_posts() ) {
						$data_query->the_post();

						if ( ( true === $flag ) && ! empty( $param['big_first'] ) ) {
							echo '<div class="first-post-wrap col-sx-12">';
							get_template_part( 'templates/module/layout', 'classic_lite' );
							echo '</div>';

							echo '<div class="blog-content-inner">';
							$flag = false;
							continue;
						} else {

							// render block
							echo '<div class="' . esc_attr( $classes_col ) . '">';
							get_template_part( 'templates/module/layout', 'grid_small_s' );
							echo '</div>';

						}
					}

					echo '</div>';
					look_ruby_template_wrapper::close_blog_content_wrap();

					break;
				case 'layout_overlay_small' :
					$flag    = true;
					$counter = 1;

					if ( ! empty( $param['blog_sidebar_position'] ) && 'none' == $param['blog_sidebar_position'] ) {
						$classes_col  = 'col-sm-4 col-xs-12';
						$divider_step = 3;
					} else {
						$classes_col  = 'col-sm-6 col-xs-12';
						$divider_step = 2;
					}

					look_ruby_template_wrapper::open_blog_content_wrap();

					while ( $data_query->have_posts() ) {
						$data_query->the_post();

						if ( ( true === $flag ) && ! empty( $param['big_first'] ) ) {
							echo '<div class="first-post-wrap col-sx-12">';
							get_template_part( 'templates/module/layout', 'classic_lite' );
							echo '</div>';
							$flag = false;
							continue;
						} else {

							// render block
							echo '<div class="' . esc_attr( $classes_col ) . '">';
							get_template_part( 'templates/module/layout', 'overlay_small' );
							echo '</div>';

							if ( 0 == $counter % $divider_step ) {
								look_ruby_template_part::render_divider();
							}

							$counter ++;
						}
					}

					look_ruby_template_wrapper::close_blog_content_wrap();

					break;
			}
		}

		wp_reset_postdata();

		return ob_get_clean();
	}
}

/**
 * @param $param
 *
 * @return array|string
 * validate
 */
if ( ! function_exists( 'look_ruby_data_validate' ) ) {
	function look_ruby_data_validate( $param ) {
		if ( is_array( $param ) ) {
			foreach ( $param as $key => $val ) {
				$key           = sanitize_text_field( $key );
				$param[ $key ] = sanitize_text_field( $val );
			}
		} elseif ( is_string( $param ) ) {
			$param = sanitize_text_field( $param );
		} else {
			$param = '';
		}

		return $param;
	}
}

// fix translate for plugin
if ( ! function_exists( 'look_ruby_widget_translate_fix' ) ) {
	function look_ruby_widget_translate_fix( $name ) {
		switch ( $name ) {
			case 'fans' :
				return esc_html__( 'fans', 'look' );
			case 'like' :
				return esc_html__( 'like', 'look' );
			case 'followers' :
				return esc_html__( 'followers', 'look' );
			case 'follow' :
				return esc_html__( 'follow', 'look' );
			case 'pin' :
				return esc_html__( 'pin', 'look' );
			case 'subscribers' :
				return esc_html__( 'subscribers', 'look' );
			case 'subscribe' :
				return esc_html__( 'subscribe', 'look' );
			case 'likes' :
				return esc_html__( 'Likes', 'look' );
		}
	}
}

/**
 * active look ruby core notice
 */
if ( ! function_exists( 'look_ruby_update_notice' ) ) {
	function look_ruby_update_notice() {

		$current_screen = get_current_screen();
		if ( ! empty( $current_screen->id ) && 'appearance_page_look-plugins' == $current_screen->id ) {
			return false;
		}

		if ( file_exists( WP_PLUGIN_DIR . '/' . 'look-ruby-core/look-ruby-core.php' ) ) {
			$plugin_data = get_plugin_data( WP_PLUGIN_DIR . '/' . 'look-ruby-core/look-ruby-core.php' );
			if ( intval( $plugin_data['Version'] ) < 2.0 ) {
				$message = esc_html__( 'LOOK requires to update and activate "Look Ruby Core" plugin to enable all features and widgets.', 'look' );
				$plugin  = esc_html__( 'Please Navigate to ', 'look' ) . '<a href="' . admin_url( 'themes.php?page=look-plugins' ) . '">' . esc_html__( 'Appearance > Install Plugins', 'look' ) . ' </a>' . esc_html__( ' to do this.', 'look' );
				printf( '<div style="font-weight: 600" class="notice notice-error is-dismissible"><p>%1$s<br/>%2$s</div>', esc_html( $message ), $plugin );
			}
		} else {
			$message = esc_html__( 'LOOK requires to install "Look Ruby Core" plugin to enable all features and widgets.', 'look' );
			$plugin  = esc_html__( 'Please Navigate to ', 'look' ) . '<a href="' . admin_url( 'themes.php?page=look-plugins' ) . '">' . esc_html__( 'Appearance > Install Plugins', 'look' ) . ' </a>' . esc_html__( ' to do this.', 'look' );
			printf( '<div style="font-weight: 600" class="notice notice-error is-dismissible"><p>%1$s<br/>%2$s</div>', esc_html( $message ), $plugin );
		}
	}
}

add_action( 'admin_notices', 'look_ruby_update_notice', 1 );
add_action( 'after_setup_theme', 'look_retina_support', 20 );

/** add retina size */
if ( ! function_exists( 'look_retina_support' ) ) {
	function look_retina_support() {

		$options = get_option( 'look_ruby_theme_options' );
		if ( empty( $options['retina_support'] ) ) {
			return false;
		}

		add_image_size( 'look_retina_1400_580', 1750, 725, array( 'center', 'top' ) );
		add_image_size( 'look_retina_760_510', 1140, 765, array( 'center', 'top' ) );
		add_image_size( 'look_retina_300_300', 600, 600, array( 'center', 'top' ) );
		add_image_size( 'look_retina_300_270', 600, 540, array( 'center', 'top' ) );
		add_image_size( 'look_retina_360_250', 720, 500, array( 'center', 'top' ) );
		add_image_size( 'look_retina_320_400', 640, 800, array( 'center', 'top' ) );
		add_image_size( 'look_retina_110x85', 220, 170, array( 'center', 'top' ) );

		return false;
	}
}

add_filter( 'pvc_post_views_html', 'look_post_views_remove', 999 );

/**
 * @param $html
 *
 * @return bool
 * remove post view
 */
if ( ! function_exists( 'look_post_views_remove' ) ) :
	function look_post_views_remove( $html ) {
		if ( is_single() ) {
			return false;
		} else {
			return $html;
		}
	}
endif;