<?php
/**
 * this file support google ads responsive
 */
if ( ! class_exists( 'look_ruby_ad_support' ) ) {
	class look_ruby_ad_support {
		/**
		 * @param $google_ads_code
		 * @param $type
		 *
		 * @return string
		 * render google ads code
		 */
		static function render_google_ads( $google_ads_code, $type = 'sidebar_ad' ) {

			// check empty
			if ( empty( $google_ads_code ) ) {
				return false;
			}

			$settings              = array();
			$settings['id']        = 'ruby-' . trim( $type );
			$settings['ad_script'] = $google_ads_code;
			$settings['ad_size']   = 1;
			switch ( $type ) {
				case 'header_ad' :
				case 'content_ad' :
				case 'footer_ad' :
					$settings['ad_size_desktop'] = 1;
					$settings['ad_size_table']   = 2;
					$settings['ad_size_mobile']  = 3;
					break;
				default :
					$settings['ad_size_desktop'] = 11;
					$settings['ad_size_table']   = 10;
					$settings['ad_size_mobile']  = 10;

					break;
			}

			if ( function_exists( 'look_ruby_ad_script' ) ) {
				ob_start();
				look_ruby_ad_script( $settings );
				return ob_get_clean();
			}

			return false;
		}
	}
}
