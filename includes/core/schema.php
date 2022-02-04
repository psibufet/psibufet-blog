<?php
/**
 * this file create chema makup for theme
 */
if ( ! class_exists( 'look_ruby_schema' ) ) {
	class look_ruby_schema {

		/**
		 * @param $context
		 * @param $echo
		 *
		 * @return bool|string
		 * schema markup, good for search engine
		 */
		static function markup( $context, $echo = true ) {

			$str  = '';
			$data = array();

			$protocol = 'http';

			if ( is_ssl() ) {
				$protocol = 'https';
			}

			switch ( $context ) {
				case 'body' :
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/WebPage';
					break;

				case 'article' :
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/NewsArticle';
					break;
				case 'review' :
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/Review';
					break;

				case 'navigation':
					$data['role']      = 'navigation';
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/SiteNavigationElement';
					break;

				case 'header':
					$data['role']      = 'banner';
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/WPHeader';
					break;

				case 'sidebar':
					$data['role']      = 'complementary';
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/WPSideBar';
					break;

				case 'footer':
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/WPFooter';
					break;

				case 'logo' :
					$data['itemscope'] = true;
					$data['itemtype']  = $protocol . '://schema.org/Organization';
					break;
			};

			if ( empty( $data ) ) {
				return false;
			}

			foreach ( $data as $k => $v ) {
				if ( true === $v ) {
					$str .= ' ' . $k . ' ';
				} else {
					$str .= ' ' . $k . '="' . $v . '" ';
				}
			}

			//check & return
			if ( true === $echo ) {
				echo strip_tags( $str );
			} else {
				return strip_tags( $str );
			}
		}
	}
}

/**
 * @param bool $echo
 *
 * @return bool|string
 * article
 */
if ( ! function_exists( 'look_ruby_markup_article' ) ) {
	function look_ruby_markup_article( $echo = true ) {
		$protocol = 'http';

		if ( is_ssl() ) {
			$protocol = 'https';
		}

		if ( $echo == true ) {
			echo 'itemscope itemtype="' . esc_attr( $protocol ) . '://schema.org/Article" ';

			return false;
		}

		return 'itemscope itemtype="' . esc_attr( $protocol ) . '://schema.org/Article" ';
	}
}

