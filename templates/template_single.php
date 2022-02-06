<?php
/**
 * Class look_ruby_template_parts
 * This file render some part template for theme
 */

if ( ! class_exists( 'look_ruby_template_single' ) ) {
	class look_ruby_template_single {

		/**-------------------------------------------------------------------------------------------------------------------------
		 * render single post title
		 */
		static function post_title() {

			echo '<header class="entry-header single-title post-title is-big-title ">';
			if ( get_the_title() ) {
				echo '<h1 class="entry-title" itemprop="headline">' . get_the_title() . '</h1>';
			}
			//render subtitle
			echo self::post_title_sub();
			echo '</header>';
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @return bool|string
		 * render subtitle
		 */
		static function post_title_sub() {
			//get subtitle
			$subtitle = get_post_meta( get_the_ID(), 'look_ruby_meta_post_subtitle', true );
			if ( empty( $subtitle ) ) {
				return false;
			}

			$str = '';
			$str .= '<div class="single-subtitle">';
			$str .= '<h3>';
			$str .= esc_html( $subtitle );
			$str .= '</h3>';
			$str .= '</div>';

			return $str;
		}

		/**-------------------------------------------------------------------------------------------------------------------------
		 * render single post cate info
		 */
		static function post_cat_info() {

			//check
			$single_post_category_info = look_ruby_core::get_option( 'single_post_category_info' );
			if ( empty( $single_post_category_info ) ) {
				return false;
			}

			look_ruby_template_part::render_post_cat_info( 'is-relative', false );
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * render single tag bar
		 */
		static function post_meta_info() {
			$single_post_meta_info = look_ruby_core::get_option( 'single_post_meta_info_manager' );

			if ( ! empty( $single_post_meta_info['enabled']['placebo'] ) ) {
				unset( $single_post_meta_info['enabled']['placebo'] );
			}

			if ( ! empty( $single_post_meta_info['enabled'] ) ) {
				echo '<div class="post-meta-info">';
				foreach ( $single_post_meta_info['enabled'] as $key => $val ) {
					switch ( $key ) {
						case 'date' :
							get_template_part( 'templates/meta/el', 'date' );
							break;
						case 'author' :
							get_template_part( 'templates/meta/el', 'author_single' );
							break;
						case 'cat' :
							look_ruby_meta_el_category();
							break;
						case 'tag' :
							get_template_part( 'templates/meta/el', 'tag' );
							break;
						case 'view' :
							get_template_part( 'templates/meta/el', 'view' );
							break;
						case 'comment' :
							get_template_part( 'templates/meta/el', 'comment' );
							break;
                        case 'read' :
                            get_template_part( 'templates/meta/el', 'read' );
                            break;
					};
				}
				echo '</div>';

			}
		}

		/**-------------------------------------------------------------------------------------------------------------------------
		 * render single tag bar
		 */
		static function post_share_bar() {

			if ( ! class_exists( 'look_ruby_social_share_post' ) ) {
				return false;
			}

			//check settings
			$single_post_share_bar = look_ruby_core::get_option( 'single_post_share_bar' );
			if ( empty( $single_post_share_bar ) ) {
				return false;
			}

			$single_post_share_bar_total = look_ruby_core::get_option( 'post_share_bar_total' );
			echo '<div class="single-share-bar clearfix">';

			if ( ! empty( $single_post_share_bar_total ) && class_exists( 'look_ruby_social_share_count' ) ) {
				//get total share
				$total_share = look_ruby_social_share_count::count_all_share();

				echo '<span class="single-share-bar-total share-bar-total">';
				echo intval( $total_share['all'] ) . ' ' . '<span class="share-bar-total-text">' . esc_html__( 'shares', 'look' ) . '</span>';
				echo '</span>';
			} else {
				echo '<span class="single-share-bar-total share-bar-total">';
				echo '<span class="share-bar-total-text">' . esc_html__( 'udostępnij', 'look' ) . '</span>';
				echo '</span>';
			}
			echo '<div class="single-share-bar-inner">';
			echo look_ruby_social_share_post::render_post_share_bar();
			echo '</div>';


			echo '</div>';
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * render single meta info bar
		 */
		static function post_meta_info_bar() {

			ob_start();
			self::post_meta_info();
			self::post_share_bar();
			$meta_info_bar = ob_get_clean();

			if ( ! empty( $meta_info_bar ) ) {
				echo '<div class="single-meta-info-bar clearfix">' . $meta_info_bar . '</div>';
			}
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @param string $classes_name
		 * render single header
		 */
		static function open_header( $classes_name = '' ) {
			echo '<div class="single-header ' . esc_attr( $classes_name ) . '">';
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * close single header
		 */
		static function close_header() {
			echo '</div>';
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @param $size
		 * render single featured
		 */
		static function post_thumb( $size = 'full' ) {

			$single_post_format = look_ruby_post_format::check_post_format();

			echo '<div class="post-thumb-outer single-thumb-outer">';
			switch ( $single_post_format ) {
				case 'gallery' :
					echo look_ruby_template_thumbnail::render_gallery( 'is-single-thumb' );
					break;
				case 'video':
					echo look_ruby_template_thumbnail::render_video( 'is-single-thumb' );
					break;
				case 'audio' :
					echo look_ruby_template_thumbnail::render_audio( 'is-single-thumb' );
					break;
				default :
					echo look_ruby_template_thumbnail::render_image_single( $size );
					break;
			}
			echo '</div>';
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * render single post content
		 */
		static function post_content() {

			$review          = look_ruby_post_review::has_review();
			$review_position = look_ruby_post_review::review_box_position();

			echo self::single_post_ad_top();
			echo '<div class="entry post-content entry-content single-entry" itemprop="articleBody">';

			if ( true === $review && 'left_top' == $review_position ) {
				echo self::post_review( 'is-left-top' );
			}

			global $more;
			$more = 1;

			the_content();

			echo '<div class="clearfix"></div>';
			//single pagination
			wp_link_pages(
				array(
					'before'      => '<div class="single-page-links"><div class="pagination-num">',
					'after'       => '</div></div>',
					'link_before' => '<span class="page-numbers">',
					'link_after'  => '</span>',
					'echo'        => true
				)
			);

			if ( true === $review && 'bottom' == $review_position ) {
				echo self::post_review( 'is-review-bottom' );
			}

			echo '<footer class="article-footer">';
			get_template_part( 'templates/single/box', 'tag' );
			get_template_part( 'templates/single/box', 'like' );
			get_template_part( 'templates/single/box', 'newsletter' );
			echo '</footer>';
			get_template_part( 'templates/meta/el', 'meta_footer' );
			echo '<div class="clearfix"></div>';
			echo '</div>';

			echo self::single_post_ad_bottom();
		}


		static function post_review( $classes_name = '' ) {
			$post_id        = get_the_ID();
			$review_summary = get_post_meta( $post_id, 'look_ruby_review_summary', true );
			$total_score    = get_post_meta( $post_id, 'look_ruby_as', true );
			$review_data    = array(
				array(
					'look_ruby_cd' => get_post_meta( $post_id, 'look_ruby_cd1', true ),
					'look_ruby_cs' => get_post_meta( $post_id, 'look_ruby_cs1', true ),
				),
				array(
					'look_ruby_cd' => get_post_meta( $post_id, 'look_ruby_cd2', true ),
					'look_ruby_cs' => get_post_meta( $post_id, 'look_ruby_cs2', true ),
				),
				array(
					'look_ruby_cd' => get_post_meta( $post_id, 'look_ruby_cd3', true ),
					'look_ruby_cs' => get_post_meta( $post_id, 'look_ruby_cs3', true ),
				),
				array(
					'look_ruby_cd' => get_post_meta( $post_id, 'look_ruby_cd4', true ),
					'look_ruby_cs' => get_post_meta( $post_id, 'look_ruby_cs4', true ),
				),
				array(
					'look_ruby_cd' => get_post_meta( $post_id, 'look_ruby_cd5', true ),
					'look_ruby_cs' => get_post_meta( $post_id, 'look_ruby_cs5', true ),
				),
				array(
					'look_ruby_cd' => get_post_meta( $post_id, 'look_ruby_cd6', true ),
					'look_ruby_cs' => get_post_meta( $post_id, 'look_ruby_cs6', true ),
				),
			);

			//render
			$str = '';
			$str .= '<div class="review-box-wrap ' . esc_attr( $classes_name ) . '">';
			$str .= '<div class="review-box-inner">';
			$str .= '<div class="review-title block-title"><h3>' . esc_html__( 'Review overview', 'look' ) . '</h3></div>';
			$str .= '<div class="review-content-wrap">';
			foreach ( $review_data as $data ) {
				if ( ! empty( $data['look_ruby_cd'] ) ) {
					$str .= '<div class="review-el">';
					$str .= '<div class="review-el-inner">';
					$str .= '<span class="review-description">' . esc_attr( $data['look_ruby_cd'] ) . '</span>';
					$str .= '<span class="review-info-score">' . esc_attr( $data['look_ruby_cs'] ) . '</span>';
					$str .= '</div>';
					$str .= '<div class="score-bar-wrap">';
					$str .= '<div class="score-bar" style="width:' . esc_attr( $data['look_ruby_cs'] * 10 ) . '%"></div>';
					$str .= '</div>';
					$str .= '</div>';
				}
			}

			$str .= '<div class="review-summary-wrap">';
			$str .= '<div class="review-summary-inner">';
			$str .= '<h3>' . esc_html__( 'Summary', 'look' ) . '</h3>';
			$str .= '<p class="review-summary-desc">';
			$str .= '<span class="post-review-info">';
			$str .= '<span class="review-info-score">' . esc_attr( $total_score ) . '</span>';
			$str .= '</span>';
			$str .= esc_html( $review_summary );
			$str .= '</p>';
			$str .= '</div>';
			$str .= '</div>';
			$str .= '</div>';
			$str .= '</div>';
			$str .= '</div>';

			return $str;
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @return string
		 * render single schema makeup
		 */
		static function schema_markup() {

			$protocol = 'http';
			if ( is_ssl() ) {
				$protocol = 'https';
			}

			$publisher      = get_bloginfo( 'name' );
			$publisher_logo = '';

			$logo = look_ruby_core::get_option( 'logo' );
			if ( ! empty( $logo['url'] ) ) {
				$publisher_logo = esc_url( $logo['url'] );
			}

			$feat_attachment = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

			$str = '';
			$str .= '<aside class="post-meta hidden">';
			$str .= '<meta itemprop="mainEntityOfPage" content="' . get_permalink() . '">';
			$str .= '<span class="vcard author" itemprop="author" content="' . get_the_author_meta( 'display_name' ) . '"><span class="fn">' . get_the_author_meta( 'display_name' ) . '</span></span>';
			$str .= '<time class="date published entry-date" datetime="' . date( DATE_W3C, get_the_time( 'U', get_the_ID() ) ) . '" content="' . date( DATE_W3C, get_the_time( 'U', get_the_ID() ) ) . '" itemprop="datePublished">' . get_the_date( '', get_the_ID() ) . '</time>';
			$str .= '<meta class="updated" itemprop="dateModified" content="' . date( DATE_W3C, get_the_modified_date( 'U', get_the_ID() ) ) . '">';
			$str .= '<span itemprop="publisher" itemscope itemtype="' . esc_attr( $protocol ) . '://schema.org/Organization"';
			$str .= '<meta itemprop="name" content="' . esc_attr( $publisher ) . '">';
			$str .= '<span itemprop="logo" itemscope itemtype="' . esc_attr( $protocol ) . '://schema.org/ImageObject">';
			$str .= '<meta itemprop="url" content="' . esc_url( $publisher_logo ) . '">';
			$str .= '</span></span>';
			$str .= '<span itemprop="image" itemscope itemtype="' . esc_attr( $protocol ) . '://schema.org/ImageObject">';
			$str .= '<meta itemprop="url" content="' . esc_url( $feat_attachment[0] ) . '">';
			$str .= '<meta itemprop="width" content="' . esc_attr( $feat_attachment[1] ) . '">';
			$str .= '<meta itemprop="height" content="' . esc_attr( $feat_attachment[2] ) . '">';

//			$enable_review = look_ruby_post_review::has_review();
//			if ( ! empty( $enable_review ) ) {
//				$total_score    = get_post_meta( get_the_ID(), 'look_ruby_as', true );
//				$review_summary = get_post_meta( get_the_ID(), 'look_ruby_review_summary', true );
//
//				$str .= '<span itemprop="itemReviewed" itemscope itemtype="' . $protocol . '://schema.org/Thing">';
//				$str .= '<meta itemprop="name " content = "' . esc_attr( strip_tags( get_the_title() ) ) . '">';
//				$str .= '</span>';
//
//				$str .= '<meta itemprop="reviewBody" content = "' . esc_attr( strip_tags( $review_summary ) ) . '">';
//
//				//ratting
//				$str .= '<span style="display: none;" itemprop="reviewRating" itemscope itemtype="' . $protocol . '://schema.org/Rating">';
//				$str .= '<meta itemprop="worstRating" content = "1">';
//				$str .= '<meta itemprop="bestRating" content = "10">';
//				$str .= '<meta itemprop="ratingValue" content = "' . $total_score . '">';
//				$str .= '</span>';
//
//			}

			$str .= '</aside>';

			return $str;

		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @param string $script
		 * @param string $class_name
		 *
		 * @return string
		 * render single script ads
		 */
		static function post_ad_script( $script = '', $class_name = '' ) {

			if ( function_exists( 'wp_doing_ajax' ) && wp_doing_ajax() ) {
				return false;
			};

			//render
			$str = '';
			$str .= '<div class="single-post-ad is-ad-script ' . esc_attr( $class_name ) . '">';
			$str .= '<div>' . look_ruby_ad_support::render_google_ads( $script, 'content_ad' ) . '</div>';
			$str .= '</div>';

			return $str;
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @param array  $image
		 * @param string $url
		 * @param string $class_name
		 *
		 * @return string
		 * render custom ads
		 */
		static function post_ad_custom( $image = array(), $url = '#', $class_name = '' ) {

			//check
			if ( empty( $image['url'] ) ) {
				return false;
			}

			//render
			$str = '';
			$str .= '<div class="single-post-ad is-ad-custom ' . esc_attr( $class_name ) . '">';
			if ( ! empty( $url ) ) {
				$str .= '<a href="' . $url . '" target="_blank">';
				$str .= '<img src="' . esc_url( $image['url'] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
				$str .= '</a>';
			} else {
				$str .= '<img src="' . esc_url( $image['url'] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
			}
			$str .= '</div>';

			return $str;
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @return bool|void
		 * render single top advertising
		 */
		static function  single_post_ad_top() {

			$type   = look_ruby_core::get_option( 'single_ad_top_type' );
			$script = look_ruby_core::get_option( 'single_ad_top_script' );
			$image  = look_ruby_core::get_option( 'single_ad_top_image' );
			$url    = look_ruby_core::get_option( 'single_ad_top_url' );

			if ( 'script' == $type && ! empty( $script ) ) {
				return self::post_ad_script( $script, 'single-post-ad-top' );
			} elseif ( ! empty( $image['url'] ) ) {
				return self::post_ad_custom( $image, $url, 'single-post-ad-top' );
			} else {
				return false;
			}
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @return bool|void
		 * render single bottom advertising
		 */
		static function single_post_ad_bottom() {

			$type   = look_ruby_core::get_option( 'single_ad_bottom_type' );
			$script = look_ruby_core::get_option( 'single_ad_bottom_script' );
			$image  = look_ruby_core::get_option( 'single_ad_bottom_image' );
			$url    = look_ruby_core::get_option( 'single_ad_bottom_url' );

			if ( 'script' == $type && ! empty( $script ) ) {
				return self::post_ad_script( $script, 'single-post-ad-bottom' );
			} elseif ( ! empty( $image['url'] ) ) {
				return self::post_ad_custom( $image, $url, 'single-post-ad-bottom' );
			} else {
				return false;
			}
		}
	}
}


/**-------------------------------------------------------------------------------------------------------------------------
 * render single layout
 */
if ( ! function_exists( 'look_ruby_render_single_post' ) ) {
	function look_ruby_render_single_post() {

		look_ruby_post_view::add_view();

		echo '<div class="single-post-outer clearfix" data-post_url="' . esc_url( get_the_permalink() ) . '" data-post_id ="' . get_the_ID() . '" data-url="' . get_permalink() . '">';
		$look_ruby_single_layout = get_post_meta( get_the_ID(), 'look_ruby_template_single', true );
		if ( empty( $look_ruby_single_layout ) || 'default' == $look_ruby_single_layout ) {
			$look_ruby_single_layout = look_ruby_core::get_option( 'default_single_post_layout' );
			//change layout sticky post
			if ( is_sticky() ) {
				$look_ruby_single_layout = 'style_5';
			};
		}

		switch ( $look_ruby_single_layout ) {
			case 'style_2' :
				get_template_part( 'templates/single/style', '2' );
				break;
			case 'style_3' :
				get_template_part( 'templates/single/style', '3' );
				break;
			case 'style_4' :
				get_template_part( 'templates/single/style', '4' );
				break;
			case 'style_5' :
				get_template_part( 'templates/single/style', '5' );
				break;
			case 'style_6' :
				get_template_part( 'templates/single/style', '6' );
				break;
			default :
				get_template_part( 'templates/single/style', '1' );
				break;
		}

		echo '</div>';
	}
}


/**-------------------------------------------------------------------------------------------------------------------------
 * ajax single
 */
if ( ! function_exists( 'look_ruby_ajax_single_infinite_load' ) ) {
	add_action( 'wp_ajax_nopriv_look_ruby_ajax_single_infinite_load', 'look_ruby_ajax_single_infinite_load' );
	add_action( 'wp_ajax_look_ruby_ajax_single_infinite_load', 'look_ruby_ajax_single_infinite_load' );

	function look_ruby_ajax_single_infinite_load() {

		$data = array();
		global $post;

		if ( ! empty( $_POST['post_id'] ) ) {
			$post_id = esc_attr( $_POST['post_id'] );
		}

		if ( ! empty( $post_id ) ) {
			$post = get_post( $post_id );

			if ( ! empty( $post ) ) {
				//global $post;
				setup_postdata( $post );
				$pre_post = get_previous_post();
				//get pre post
				if ( ! empty( $pre_post ) ) {
					$data['next_post_id'] = $pre_post->ID;
				}

				ob_start();
				look_ruby_render_single_post();
				$data['content'] = ob_get_clean();
				wp_reset_postdata();
			}
		}

		die( json_encode( $data ) );
	}
}

