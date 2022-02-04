<?php

/**
 * Class look_ruby_post_related
 * this file support related post
 */
if ( ! class_exists( 'look_ruby_post_related' ) ) {
	class look_ruby_post_related {
		static function get_data( $post_id = '', $paged = 1 ) {

			$where          = look_ruby_core::get_option( 'single_post_related_where' );
			$number_of_post = look_ruby_core::get_option( 'single_post_related_number_of_post' );

			$data_cat = get_the_category( $post_id );
			$data_tag = get_the_tags( $post_id );

			// set query
			$param                   = array();
			$param['category_ids']   = '';
			$param['tags']           = '';
			$param['where']          = $where;
			$param['posts_per_page'] = intval( $number_of_post );

			if ( empty( $post_id ) ) {
				$param['post_not_in'] = get_the_ID();
			} else {
				$param['post_not_in'] = $post_id;
			}

			if ( ! empty( $data_cat ) ) {
				$cat_id = array();
				foreach ( $data_cat as $category ) {
					$cat_id[] = $category->term_id;
				}
				$param['category_ids'] = implode( ',', $cat_id );
			}

			if ( ! empty( $data_tag ) ) {
				$tag_name = array();
				foreach ( $data_tag as $tag ) {
					$tag_name[] = $tag->slug;
				}
				$param['tags'] = implode( ',', $tag_name );
			}

			$data_query = look_ruby_query::get_related( $param, $paged );

			return $data_query;
		}
	}
}