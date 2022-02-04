<?php

/**
 * Class look_ruby_query
 * This file handling query data for theme
 */
if ( ! class_exists('look_ruby_query')) {
    class look_ruby_query
    {

        /**
         * @param string $args
         * @param string $paged
         *
         * @return WP_Query
         * get custom query
         */
        static function get_custom_query($args = array(), $paged = '')
        {

            global $look_ruby_unique;
            $theme_options = get_option('look_ruby_theme_options');

            extract(shortcode_atts(array(
                'category_ids'   => '',
                'category_id'    => '',
                'author_id'      => '',
                'post_format'    => '',
                'tags'           => '',
                'tag_in'         => '',
                'posts_per_page' => '',
                'no_found_rows'  => '',
                'offset'         => '',
                'orderby'        => '',
                'meta_key'       => '',
                'unique_filter'  => false,
                'post_not_in'    => '',
            ), $args));

            // default query config
            $param                        = array();
            $param['ignore_sticky_posts'] = 1;
            $param['post_status']         = 'publish';
            $param['post_type']           = 'post';

            // no found rows query
            if ( ! empty($no_found_rows)) {
                $param['no_found_rows'] = true;
            }

            if ( ! empty($post_not_in) && ! is_array($post_not_in)) {
                $param['post__not_in'] = explode(',', $post_not_in);
            }

            if (is_page_template('page-composer.php') && ! empty($theme_options['unique_post']) && ! empty($look_ruby_unique) && ! empty($unique_filter)) {
                if (empty($param['post__not_in'])) {
                    $param['post__not_in'] = array();
                }
                $param['post__not_in'] = array_merge($param['post__not_in'], $look_ruby_unique);
            }


            // post per page
            if (empty($posts_per_page)) {
                $param['posts_per_page'] = 5;
            } else {
                $param['posts_per_page'] = $posts_per_page;
            };


            // categories query
            if ( ! empty($category_ids)) {

                // check categories
                if (is_array($category_ids)) {
                    $category_ids = implode(',', $category_ids);
                }

                if ( ! empty($category_ids)) {
                    $param['cat'] = esc_attr($category_ids);
                } else {
                    if ( ! empty($category_id)) {
                        $param['cat'] = $category_id;
                    }
                }
            } else {
                if ( ! empty($category_id)) {
                    $param['cat'] = $category_id;
                }
            }

            // post format
            if ( ! empty($post_format)) {
                if ('default' != $post_format) {
                    $param['tax_query'] = array(
                        array(
                            'taxonomy' => 'post_format',
                            'field'    => 'slug',
                            'terms'    => array('post-format-' . esc_attr($post_format)),
                        ),
                    );
                } else {
                    $param['tax_query'] = array(
                        array(
                            'taxonomy' => 'post_format',
                            'field'    => 'slug',
                            'terms'    => array('post-format-gallery', 'post-format-video', 'post-format-audio'),
                            'operator' => 'NOT IN',
                        ),
                    );
                }

            }

            // tags query
            if (empty($tag_ids) && ! empty($tags)) {
                $tags         = preg_replace('/\s+/', '', $tags);
                $param['tag'] = esc_attr($tags);
            }

            // tag in query
            if ( ! empty($tag_in) && is_array($tag_in)) {
                $param['tag__in'] = $tag_in;
            }

            // author query
            if ( ! empty($author_id)) {
                $param['author'] = $author_id;
            }

            // page query
            if ( ! empty($paged)) {
                $param['paged'] = $paged;
            } else {
                $param['paged'] = 1;
            }

            // offset query
            if ( ! empty($offset)) {
                if ($paged > 1) {
                    $param['offset'] = intval($offset) + intval(($paged - 1) * intval($param['posts_per_page']));
                } else {
                    $param['offset'] = intval($offset);
                }
            }


            // set default order by
            if (empty($orderby)) {
                $orderby = 'date_post';
            }

            // meta keys
            if ( ! empty($meta_key)) {
                $param['meta_key'] = $meta_key;
            }

            switch ($orderby) {

                // date post
                case 'date_post' :
                    $param['orderby'] = 'date';
                    break;

                // popular comment
                case 'comment_count' :
                    $param['orderby'] = 'comment_count';
                    break;

                // post type
                case 'post_type' :
                    $param['orderby'] = 'type';
                    break;

                // popular views
                case 'popular':

                    if (function_exists('pvc_get_post_views') || function_exists('Post_Views_Counter')) {
                        $param['suppress_filters'] = false;
                        $param['fields']           = '';
                        $param['orderby']          = 'post_views';
                        $param['order']            = 'DESC';

                    } else {
                        $param['meta_key'] = 'look_ruby_total_num_view';
                        $param['orderby']  = 'meta_value_num';
                        $param['order']    = 'DESC';
                    }

                    break;

                case 'top_review' :
                    $param['meta_key'] = 'look_ruby_as';
                    $param['orderby']  = 'meta_value_num';
                    $param['order']    = 'DESC';
                    break;

                case 'last_review' :
                    $param['meta_key'] = 'look_ruby_as';
                    $param['orderby']  = 'date';
                    $param['order']    = 'DESC';
                    break;

                // random
                case 'rand':
                    $param['orderby'] = 'rand';
                    break;

                // alphabet decs
                case 'alphabetical_order_decs':
                    $param['orderby'] = 'title';
                    $param['order']   = 'DECS';
                    break;

                // alphabet asc
                case 'alphabetical_order_asc':
                    $param['orderby'] = 'title';
                    $param['order']   = 'ASC';
                    break;
            }


            $data_query = new WP_Query($param);

            if (is_page_template('page-composer.php') && ! empty($theme_options['unique_post']) && 'rand' != $param['orderby'] && ! empty($unique_filter)) {
                $data             = wp_list_pluck($data_query->posts, 'ID');
                $look_ruby_unique = array_merge($look_ruby_unique, $data);
            }

            return $data_query;
        }

        static function get_related($options = array(), $paged = 1)
        {

            extract(shortcode_atts(
                    array(
                        'where'          => '',
                        'category_ids'   => '',
                        'tags'           => '',
                        'posts_per_page' => '',
                        'post_not_in'    => '',
                    ), $options
                )
            );

            if (empty($where)) {
                return false;
            }

            $param                        = array();
            $param['ignore_sticky_posts'] = 1;
            $param['post_status']         = 'publish';
            $param['post_type']           = 'post';
            $param['orderby']             = 'date';

            if ( ! empty($paged)) {
                $param['paged'] = $paged;
            }
            if ( ! empty($posts_per_page)) {
                $param['posts_per_page'] = $posts_per_page;
            }
            if ( ! empty($post_not_in)) {
                $param['post__not_in'] = explode(',', $post_not_in);
            }

            switch ($where) {
                case 'all':
                    if (empty($category_ids) && empty($tags)) {
                        return false;
                    }
                    if ( ! empty($category_ids) && ! empty($tags)) {

                        $category_ids = explode(',', $category_ids);
                        $tags         = explode(',', $tags);

                        $param['tax_query'] = array(
                            'relation' => 'OR',
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => $category_ids,
                            ),
                            array(
                                'taxonomy' => 'post_tag',
                                'field'    => 'slug',
                                'terms'    => $tags,
                            ),
                        );
                    } elseif (empty($category_ids) && ! empty($tags)) {
                        $param['tag'] = $tags;
                    } else {
                        $param['cat'] = $category_ids;
                    }

                    break;
                case 'cat' :
                    if (empty($category_ids)) {
                        return false;
                    }
                    $param['cat'] = $category_ids;
                    break;
                case 'tag' :
                    if (empty($tags)) {
                        return false;
                    }
                    $param['tag'] = $tags;
                    break;
            }

            $data_query = new WP_Query($param);

            return $data_query;
        }
    }
}
