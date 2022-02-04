<?php
/** Don't load directly */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Look_Table_Contents', false ) ) {
    /**
     * Class Look_Table_Contents
     * table of contents
     */
    class Look_Table_Contents {

        private static $instance;

        public $settings;
        public $supported_headings;

        public static function get_instance() {
            if ( self::$instance === null ) {
                return new self();
            }

            return self::$instance;
        }

        function __construct() {
            self::$instance = $this;

            $this->get_supported_headings();
            if ( ! is_admin() ) {
                add_filter( 'the_content', array( $this, 'the_content' ), 0 );
            }
        }

        /** get all settings */
        public function get_settings() {

            $this->settings = array(
                'post'      => $this->get_setting( 'table_contents_post' ),
                'page'      => $this->get_setting( 'table_contents_page' ),
                'enable'    => $this->get_setting( 'table_contents_enable' ),
                'heading'   => $this->get_setting( 'table_contents_heading' ),
                'layout'    => $this->get_setting( 'table_contents_layout' ),
                'position'  => $this->get_setting( 'table_contents_position' ),
                'hierarchy' => $this->get_setting( 'table_contents_hierarchy' ),
                'numlist'   => $this->get_setting( 'table_contents_numlist' ),
                'scroll'    => $this->get_setting( 'table_contents_scroll' ),
            );
        }

        /**
         * get supported heading settings
         */
        public function get_supported_headings() {
            $this->supported_headings = array();
            for ( $i = 1; $i <= 6; $i ++ ) {
                if ( $this->get_setting( 'table_contents_h' . $i ) ) {
                    array_push( $this->supported_headings, $i );
                }
            }
        }

        /**
         * @param string $setting_id
         *
         * @return false|mixed
         * get settings
         */
        public function get_setting( $setting_id ) {

            $setting = get_post_meta( get_the_ID(), $setting_id, true );

            if ( '-1' == $setting ) {
                return '';
            }

            if ( ! $setting || 'default' == $setting ) {
                $setting = look_ruby_core::get_option( $setting_id );
            }

            return $setting;
        }

        /**
         * @param $content
         *
         * @return string|string[]
         * the_content filter
         */
        public function the_content( $content ) {

            $this->get_settings();
            if ( ! $this->is_enabled( $content ) ) {
                return $content;
            }

            $matches = $this->extract_headings( $content );

            if ( ! $matches || ! is_array( $matches ) || ! $this->minimum_headings( $matches ) ) {
                return $content;
            }

            $table_contents = $this->create_table_contents( $matches );

            $content = $this->replace_content( $content, $matches );
            $content = $this->add_table_contents( $content, $table_contents );

            return $content;
        }

        /** replace content */
        function replace_content( $content, $matches ) {
            $find    = array();
            $replace = array();
            foreach ( $matches as $index => $value ) {
                if ( ! empty( $value[0] ) && ! empty( $value[1] ) && ! empty( $value[2] ) ) {
                    array_push( $find, $value[0] );
                    array_push( $replace, '<h' . $value[2] . ' id="' . $this->generate_uid( $value[0] ) . '">' . strip_tags( $value[0] ) . '</h' . $value[2] . '>' );
                }
            }

            return str_replace( $find, $replace, $content );
        }

        /**
         * @param $matches
         *
         * @return string
         * create table contents
         */
        function create_table_contents( $matches ) {

            if ( $this->settings['hierarchy'] ) {
                $min_depth = 6;

                foreach ( $matches as $index => $value ) {
                    if ( $min_depth > $value[2] ) {
                        $min_depth = intval( $value[2] );
                    }
                }
                foreach ( $matches as $index => $value ) {
                    $matches[ $index ]['depth'] = intval( $value[2] ) - $min_depth;
                }
            }

            $class_name = 'rb-table-contents';
            if ( ! empty( $this->settings['layout'] ) && '2' == $this->settings['layout'] ) {
                $class_name .= ' table-left';
            } else {
                $class_name .= ' table-fw';
            }

            if ( ! empty( $this->settings['scroll'] ) ) {
                $class_name .= ' rb-smooth-scroll';
            }

            $output = '<div id="ruby-table-contents" class="' . esc_attr( $class_name ) . '">';
            if ( ! empty( $this->settings['heading'] ) ) {
                $output .= '<div class="table-content-header"><i class="fa fa-list-alt"></i><span class="h3">' . esc_html( $this->settings['heading'] ) . '</span></div>';
            }
            $output .= '<div class="inner">';
            foreach ( $matches as $index => $value ) {
                $class_name = 'table-link anchor-link h5';
                if ( ! empty( $value['depth'] ) ) {
                    $class_name = 'table-link-depth anchor-link h5 depth-' . $value['depth'];
                }
                $output .= '<a href="#' . $this->generate_uid( $value[0] ) . '" class="' . esc_attr( $class_name ) . '">';
                $output .= strip_tags( $value[0] );
                $output .= '</a>';
            }
            $output .= '</div></div>';

            return $output;
        }

        /**
         * @param $content
         * @param $table_contents
         *
         * @return string|string[]
         * add table of contents section
         */
        function add_table_contents( $content, $table_contents ) {

            if ( strpos( $content, '<!--RUBY:TOC-->' ) ) {
                return str_replace( '<!--RUBY:TOC-->', $table_contents, $content );
            }

            $pos = 0;
            $tag = '</p>';
            if ( ! empty( $this->settings['position'] ) && $this->settings['position'] > 0 ) {
                $pos = absint( $this->settings['position'] );
            }
            $content = explode( $tag, $content );
            foreach ( $content as $index => $paragraph ) {
                if ( $pos == $index ) {
                    $content[ $index ] = $table_contents . $paragraph;
                }
                if ( trim( $paragraph ) ) {
                    $content[ $index ] .= $tag;
                }
            }

            return implode( '', $content );
        }

        /**
         * @param $content
         *
         * @return false|mixed
         */
        public function extract_headings( $content ) {
            $matches = array();
            if ( preg_match_all( '/(<h([1-6]{1})[^>]*>).*<\/h\2>/msuU', $content, $matches, PREG_SET_ORDER ) ) {

                $matches = $this->filter_headings( $matches );

                return $this->remove_empty( $matches );
            }

            return false;
        }

        /** filter supported headings */
        public function filter_headings( $matches ) {
            foreach ( $matches as $index => $value ) {
                if ( ! in_array( $value[2], $this->supported_headings ) ) {
                    unset( $matches[ $index ] );
                }
            }

            return $matches;
        }

        /** remove empty */
        function remove_empty( $matches ) {
            foreach ( $matches as $index => $value ) {
                $text = trim( strip_tags( $value[0] ) );
                if ( empty( $text ) ) {
                    unset( $matches[ $index ] );
                }
            }

            return $matches;
        }

        /**
         * @param $matches
         *
         * @return bool
         * minimum headings
         */
        public function minimum_headings( $matches ) {

            if ( count( $matches ) < $this->settings['enable'] ) {
                return false;
            }

            return true;
        }

        /**
         * @param $text
         *
         * @return string
         * generate ID
         */
        public function generate_uid( $text ) {

            $output = trim( strip_tags( $text ) );
            $output = str_replace( array( "\r", "\n", "\n\r", "\r\n" ), ' ', $output );
            $output = esc_attr( $output );
            $output = preg_replace( '/[^a-zA-Z0-9 \-_]*/', '', $output );
            $output = str_replace( array( '  ', ' ' ), '-', $output );
            $output = 'rb-' . rtrim( $output, '-' );

            return $output;
        }

        /**
         * @param $content
         *
         * @return bool
         * is enabled
         */
        function is_enabled( $content ) {

            if ( is_front_page() || strpos( $content, 'id="ruby-table-contents"' ) ) {
                return false;
            }

            if ( ( $this->settings['post'] && is_single() ) || ( $this->settings['page'] && is_page() ) ) {
                return true;
            }

            return false;
        }
    }

    add_action( 'init', array( 'Look_Table_Contents', 'get_instance' ) );
}
