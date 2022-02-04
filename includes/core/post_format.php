<?php
/**
 * Class look_ruby_post_support
 * This file handling video and audio for post

 */
if ( ! class_exists( 'look_ruby_post_format' ) ) {
	class look_ruby_post_format {

		/**
		 * @return string
		 * check post format
		 */
		static function check_post_format() {
			$post_format = get_post_format();
			$post_id     = get_the_ID();

			if ( 'video' == $post_format ) {
				$url             = get_post_meta( $post_id, 'look_ruby_single_vlook_ruby_single_video_embedideo_url', true );
				$embed           = get_post_meta( $post_id, '', true );
				$self_host_video = get_post_meta( $post_id, 'look_ruby_single_self_host_video', true );

				if ( ! empty( $url ) || ! empty( $embed ) || ! empty( $self_host_video ) ) {
					return 'video';
				} else {
					return 'thumbnail';
				}
			} elseif ( 'audio' == $post_format ) {
				$url             = get_post_meta( $post_id, 'look_ruby_single_audio_url', true );
				$embed           = get_post_meta( $post_id, 'look_ruby_single_audio_embed', true );
				$self_host_audio = get_post_meta( $post_id, 'look_ruby_single_self_host_audio', true );

				if ( ! empty( $url ) || ! empty( $embed ) || ! empty( $self_host_audio ) ) {
					return 'audio';
				} else {
					return 'thumbnail';
				}
			} elseif ( 'gallery' == $post_format ) {
				$gallery = get_post_meta( $post_id, 'look_ruby_single_post_gallery_data', false );
				if ( ! empty( $gallery ) ) {
					return 'gallery';
				} else {
					return 'thumbnail';
				}
			} else {
				return 'thumbnail';
			}
		}


		/**
		 * @return string
		 * render audio
		 */
		static function audio_embed() {

			if ( 'audio' != get_post_format() ) {
				return false;
			}

			$post_id         = get_the_ID();
			$audio_url       = get_post_meta( $post_id, 'look_ruby_single_audio_url', true );
			$audio_embed     = get_post_meta( $post_id, 'look_ruby_single_audio_embed', true );
			$self_host_audio = get_post_meta( $post_id, 'look_ruby_single_self_host_audio', true );

			if ( ! empty( $self_host_audio ) ) {
				return self::render_self_hosted_audio( $self_host_audio );
			} elseif ( ! empty( $audio_url ) ) {
				$embed = wp_oembed_get( $audio_url, array( 'height' => 505, 'width' => 900 ) );
				if ( ! empty( $embed ) ) {
					return $embed;
				} else {
					return false;
				}
			} elseif ( ! empty( $audio_embed ) ) {
				return html_entity_decode( wp_kses( $audio_embed, array(
					'iframe' => array(
						'src'             => array(),
						'height'          => array(),
						'width'           => array(),
						'frameborder'     => array(),
						'allowfullscreen' => array(),
					)
				) ) );
			} else {
				return false;
			}

		}


		/**
		 * @return string
		 * render video
		 */
		static function video_embed() {

			if ( 'video' != get_post_format() ) {
				return false;
			}

			$post_id         = get_the_ID();
			$video_url       = get_post_meta( $post_id, 'look_ruby_single_video_url', true );
			$video_embed     = get_post_meta( $post_id, 'look_ruby_single_video_embed', true );
			$self_host_video = get_post_meta( $post_id, 'look_ruby_single_self_host_video', true );

			if ( ! empty( $self_host_video ) ) {
				return self::render_self_hosted_video( $self_host_video );
			} elseif ( ! empty( $video_url ) ) {

				$embed = wp_oembed_get( $video_url, array( 'height' => 505, 'width' => 900 ) );

				if ( empty( $embed ) ) {

					$server   = look_ruby_video_detect_url( $video_url );
					$protocol = 'http';
					if ( is_ssl() ) {
						$protocol = 'https';
					}

					switch ( $server ) {
						case 'youtube':
							$embed = '<iframe id="rubyYoutbePlayer" width="900" height="505" src="' . esc_attr( $protocol ) . '://www.youtube.com/embed/' . look_ruby_video_id_youtube( $video_url ) . '?feature=oembed&amp;wmode=opaque' . esc_attr( self::youtube_time( $video_url ) ) . '"></iframe>';
							break;
						case 'vimeo':
							$embed = '<iframe  width="900" height="205" src="' . esc_attr( $protocol ) . '://player.vimeo.com/video/' . look_ruby_video_id_vimeo( $video_url ) . '"></iframe>';
							break;
						case 'dailymotion':
							$embed = '<iframe width="900" height="505" src="' . esc_attr( $protocol ) . '://www.dailymotion.com/embed/video/' . look_ruby_video_id_dailymotion( $video_url ) . '"></iframe>';
							break;
						default :
							$embed = '';
							break;
					}
				}

				if ( ! empty( $embed ) ) {
					return $embed;
				} else {
					return false;
				}
			} elseif ( ! empty( $video_embed ) ) {

				return html_entity_decode( wp_kses( $video_embed, array(
					'iframe' => array(
						'src'             => array(),
						'height'          => array(),
						'width'           => array(),
						'frameborder'     => array(),
						'allowfullscreen' => array(),
					)
				) ) );
			} else {
				return false;
			}
		}


		/**
		 * @param $video_url
		 *
		 * @return string
		 * youtube time
		 */
		static function youtube_time( $video_url ) {
			$s = array();
			parse_str( parse_url( $video_url, PHP_URL_QUERY ), $s );

			if ( ! empty( $s["t"] ) ) {
				if ( strpos( $s["t"], 'm' ) ) {
					$explode_m   = explode( 'm', $s["t"] );
					$min         = trim( $explode_m[0] );
					$explode_sec = explode( 's', $explode_m[1] );
					$sec         = trim( $explode_sec[0] );

					$start_time = ( intval( $min ) * 60 ) + intval( $sec );
				} else {
					$explode_s = explode( 's', $s["t"] );
					$sec       = trim( $explode_s[0] );

					$start_time = $sec;
				}

				return '&start=' . $start_time;
			} else {
				return false;
			}
		}


		/**
		 * @param $video_id
		 *
		 * @return string
		 * render self hosted video
		 */
		static function render_self_hosted_video( $video_id ) {

			$wp_version = floatval( get_bloginfo( 'version' ) );

			if ( $wp_version < "3.6" ) {
				return '<p class="ruby-error">' . esc_html__( 'Current WordPress version do not support self-hosted video, please update WordPress to latest version to display this video', 'look' ) . '</p>';
			}
			$self_hosted_url = wp_get_attachment_url( $video_id );

			$params = array(
				'src'    => $self_hosted_url,
				'width'  => 740,
				'height' => 415
			);

			return wp_video_shortcode( $params );
		}


		/**
		 * @param $audio_id
		 *
		 * @return string
		 * render self hosted audio
		 */
		static function render_self_hosted_audio( $audio_id ) {

			$wp_version = floatval( get_bloginfo( 'version' ) );

			if ( $wp_version < "3.6" ) {
				return '<p class="ruby-error">' . esc_html__( 'Current WordPress version do not support self-hosted video, please update WordPress to latest version to display this video', 'look' ) . '</p>';
			}
			$self_hosted_url = wp_get_attachment_url( $audio_id );

			$params = array(
				'src' => $self_hosted_url,
			);

			return wp_audio_shortcode( $params );
		}

	}
}
