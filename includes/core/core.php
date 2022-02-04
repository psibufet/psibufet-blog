<?php
/**
 * Class look_ruby_core
 * this file manager options for theme
 */
if ( ! class_exists( 'look_ruby_core' ) ) {
	class look_ruby_core {

		/**
		 * @param $option_name
		 *
		 * @return string
		 * load value from theme options
		 */
		static function get_option( $option_name ) {

			$options = get_option( 'look_ruby_theme_options' );
			if ( empty( $options ) ) {
				$options = look_ruby_redux_default_val();
			}

			if ( empty( $options[ $option_name ] ) ) {
				return false;
			} else {
				return $options[ $option_name ];
			}
		}

		/**
		 * @param $number
		 *
		 * @return int|string
		 * show over 100k
		 */
		static function show_over_100k( $number ) {
			$number = intval( $number );
			if ( $number > 100000 ) {
				$number = round( $number / 1000, 1 ) . esc_attr__( 'k', 'look' );
			}

			return $number;
		}

        static function look_total_word( $content = '' ) {

            if ( empty( $content ) ) {
                return false;
            }
            $count   = 0;
            $content = preg_replace( '/(<\/[^>]+?>)(<[^>\/][^>]*?>)/', '$1 $2', $content );
            $content = nl2br( $content );
            $content = strip_tags( $content );

            if ( preg_match( "/[\x{4e00}-\x{9fa5}]+/u", $content ) ) {
                $content = preg_replace( '/[\x80-\xff]{1,3}/', ' ', $content, - 1, $n );
                $count += str_word_count( $content );
            } else {
                $count = count( preg_split( '/\s+/', $content ) );
            }

            return $count;
        }

		/**
		 * @return mixed
		 * get category page id
		 */
		static function get_page_cat_id() {
			global $wp_query;

			return $wp_query->get_queried_object_id();
		}
	}
}


if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}