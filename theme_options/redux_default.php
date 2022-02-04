<?php
if ( ! function_exists( 'look_ruby_redux_default_val' ) ) {
	function look_ruby_redux_default_val() {
		return array(
			'main_site_layout'                     => 'is-full-width',
			'site_background'                      => array(
				'background-color'      => '#fff',
				'background-size'       => 'cover',
				'background-attachment' => 'fixed',
				'background-position'   => 'left top',
				'background-repeat'     => 'no-repeat'
			),
			'site_background_link'                 => '',
			'site_container_width'                 => 1200,
			'site_smooth_scroll'                   => 0,
			'site_smooth_display'                  => 0,
			'site_smooth_display_style'            => 'ruby-zoom',
			'retina_support'                       => 0,
			'start_view'                           => 0,
			'social_tooltip'                       => 1,
			'open_graph'                           => 1,
			'post_category_info'                   => 1,
			'post_meta_info_manager'               => array(
				'enabled'  => array( 'date' => 'Date' ),
				'disabled' => array(
					'cat'     => 'Category',
					'author'  => 'Author',
					'tag'     => 'Tags',
					'view'    => 'View',
					'comment' => 'Comment'
				)
			),
			'post_format_icon'                     => 1,
			'thumb_holder'                         => 1,
			'human_time'                           => 1,
			'post_share_bar'                       => 1,
			'post_share_bar_total'                 => 0,
			'post_share_bar_list'                  => 1,
			'post_share_bar_grid'                  => 0,
			'post_share_bar_classic'               => 1,
			'grid_excerpt_length'                  => 20,
			'list_excerpt_length'                  => 20,
			'classic_summary_type'                 => 1,
			'classic_excerpt_length'               => 100,
			'header_layout_manager'                => array(
				'enabled'  => array(
					'logo_area' => 'logo area',
					'main_nav'  => 'navigation'
				),
				'disabled' => array()
			),
			'header_top_bar'                       => 1,
			'header_top_bar_search'                => 0,
			'logo_padding'                         => '',
			'header_background'                    => array(
				'background-color'      => '#fff',
				'background-size'       => 'inherit',
				'background-attachment' => 'fixed',
				'background-position'   => 'center center',
				'background-repeat'     => 'repeat'
			),
			'logo_area_social_bar'                 => 1,
			'logo_area_search_icon'                => 0,
			'off_canvas_button'                    => 1,
			'off_canvas_style'                     => 'light',
			'off_canvas_social_bar'                => 1,
			'off_canvas_widget_section'            => 1,
			'header_ad'                            => 1,
			'header_url_ads'                       => '',
			'sticky_navigation'                    => 0,
			'main_nav_background'                  => '',
			'main_navigation_height'               => '60',
			'main_sub_nav_background'              => '',
			'mega_menu_cat_text_style'             => 'is-dark-text',
			'site_sidebar_position'                => 'right',
			'look_ruby_sidebar_multi'              => array(),
			'sticky_sidebar'                       => 0,
			'footer_background'                    => array(
				'background-color'      => '#111',
				'background-size'       => 'cover',
				'background-attachment' => 'fixed',
				'background-position'   => 'center center',
				'background-repeat'     => 'no-repeat'
			),
			'footer_text_style'                    => 'is-light-text',
			'footer_social_bar'                    => 0,
			'site_back_to_top'                     => 1,
			'site_back_to_top_mobile'              => 0,
			'site_copyright'                       => '',
			'feat_style'                           => 'none',
			'feat_cat'                             => '',
			'feat_tag'                             => '',
			'feat_sort'                            => 'date_post',
			'feat_num'                             => 5,
			'feat_offset'                          => 0,
			'blog_layout'                          => 'layout_list',
			'big_post_first'                       => 0,
			'blog_sidebar'                         => 'look_ruby_sidebar_default',
			'blog_sidebar_position'                => 'default',
			'default_single_post_layout'           => 'is_classic',
			'single_post_category_info'            => 1,
			'single_post_meta_info_manager'        => array(
				'enabled'  => array(
					'author' => 'Author',
					'date'   => 'Date'
				),
				'disabled' => array(
					'cat'     => 'Category',
					'comment' => 'Comment',
					'tag'     => 'Tags',
					'view'    => 'View'
				)
			),
			'single_post_share_bar'                => 1,
			'default_single_post_review_position'  => 'left_top',
			'single_post_image_popup'              => 1,
			'single_post_box_author'               => 1,
			'default_single_post_box_comment'      => 1,
			'single_post_box_navigation'           => 1,
			'single_post_social_like'              => 0,
			'single_post_related_box'              => 1,
			'single_post_related_where'            => 'all',
			'single_post_related_number_of_post'   => 3,
			'default_single_post_sidebar'          => 'look_ruby_sidebar_default',
			'default_single_post_sidebar_position' => 'default',
			'category_layout'                      => 'layout_list',
			'category_big_post_first'              => 0,
			'category_sidebar'                     => 'look_ruby_sidebar_default',
			'category_sidebar_position'            => 'default',
			'default_single_page_title'            => 1,
			'default_single_page_box_comment'      => 1,
			'default_single_page_sidebar'          => 'look_ruby_sidebar_default',
			'default_single_page_sidebar_position' => 'default',
			'author_layout'                        => 'layout_list',
			'author_sidebar'                       => 'look_ruby_sidebar_default',
			'author_sidebar_position'              => 'default',
			'search_layout'                        => 'layout_grid_small_s',
			'search_sidebar'                       => 'look_ruby_sidebar_default',
			'search_sidebar_position'              => 'none',
			'archive_layout'                       => 'layout_list',
			'archive_sidebar'                      => 'look_ruby_sidebar_default',
			'archive_sidebar_position'             => 'default',
			'share_to_facebook'                    => 1,
			'share_to_twitter'                     => 1,
			'share_to_pinterest'                   => 1,
			'share_to_linkedin'                    => 0,
			'share_to_tumblr'                      => 0,
			'share_to_vk'                          => 0,
			'site_social'                          => 1,
			'body_font'                            => array(
				'font-family' => 'Raleway',
				'font-size'   => '16px',
				'font-weight' => '400',
				'color'       => '#242424'
			),
			'post_excerpt_font_size'               => '14',
			'post_title_font'                      => array(
				'font-family'    => 'Playfair Display',
				'text-transform' => 'uppercase',
				'font-weight'    => '700',
				'color'          => '#111'
			),
			'post_title_font_size_big'             => '26',
			'post_title_font_size_medium'          => '20',
			'post_title_font_size_small'           => '15',
			'post_title_font_size_single'          => '32',
			'post_meta_info_font'                  => array(
				'font-size'      => '11px',
				'google'         => true,
				'font-weight'    => '400',
				'color'          => '#bbbbbb',
				'font-family'    => 'Raleway',
				'text-transform' => 'uppercase'
			),
			'top_bar_font'                         => array(
				'font-family'    => 'Raleway',
				'font-size'      => '11px',
				'font-weight'    => '600',
				'text-transform' => 'uppercase',
				'letter-spacing' => '1px',
				'google'         => true
			),
			'main_nav_font'                        => array(
				'font-family'    => 'Raleway',
				'font-size'      => '12px',
				'letter-spacing' => '1px',
				'font-weight'    => '700',
				'text-transform' => 'uppercase',
				'google'         => true
			),
			'block_header_font'                    => array(
				'font-family'    => 'Raleway',
				'font-size'      => '12px',
				'color'          => '#111',
				'google'         => true,
				'font-weight'    => '700',
				'letter-spacing' => '1px',
				'text-transform' => 'uppercase'
			),
			'custom_css'                           => '',
		);

	}
}

