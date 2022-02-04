<?php

if ( ! function_exists( 'look_ruby_register_theme_sidebars' ) ) {
	function look_ruby_register_theme_sidebars() {

        $theme_options = get_option( 'look_ruby_theme_options' );
        if ( ! empty( $theme_options['look_ruby_multi_sidebar'] ) && is_array( $theme_options['look_ruby_multi_sidebar'] ) ) {
            $data_sidebar = array();
            foreach ( $theme_options['look_ruby_multi_sidebar'] as $sidebar ) {
                if ( ! empty( $sidebar ) ) {
                    array_push( $data_sidebar, array(
                        'id'   => 'look_ruby_sidebar_multi_' . look_convert_to_id( trim( $sidebar ) ),
                        'name' => strip_tags( $sidebar ),
                    ) );
                }
            }

            foreach ( $data_sidebar as $sidebar ) {
                if ( ! empty( $sidebar['id'] ) && ! empty( $sidebar['name'] ) ) {
                    register_sidebar( array(
                        'id'            => $sidebar['id'],
                        'name'          => $sidebar['name'],
                        'before_widget' => '<section id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</section>',
                        'before_title'  => '<div class="widget-title block-title"><h3>',
                        'after_title'   => '</h3></div>',
                    ) );
                }
            };
        }

        register_sidebar( array(
            'id'            => 'look_ruby_sidebar_default',
            'name'          => esc_html__( 'Default Sidebar', 'look' ),
            'description'   => esc_html__( 'The default sidebar of the this theme.', 'look' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="widget-title block-title"><h3>',
            'after_title'   => '</h3></div>'
        ) );

		register_sidebar(
			array(
				'id'            => 'look_ruby_sidebar_off_canvas',
				'name'          => esc_html__( 'Off Canvas Section', 'look' ),
				'description'   => esc_html__( 'Off canvas section', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);

		register_sidebar(
			array(
				'id'            => 'look_ruby_blog_column_1',
				'name'          => esc_html__( 'Blog Page First Column', 'look' ),
				'description'   => esc_html__( 'One of column at top of latest blog page', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);

		register_sidebar(
			array(
				'id'            => 'look_ruby_blog_column_2',
				'name'          => esc_html__( 'Blog Page Second Column', 'look' ),
				'description'   => esc_html__( 'One of column at top of latest last blog page', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);

		register_sidebar(
			array(
				'id'            => 'look_ruby_blog_column_3',
				'name'          => esc_html__( 'Blog Page Third Column', 'look' ),
				'description'   => esc_html__( 'One of column at top of home page', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);

		register_sidebar(
			array(
				'id'            => 'look_ruby_sidebar_footer_fullwidth',
				'name'          => esc_html__( 'Top Footer (Full-Width)', 'look' ),
				'description'   => esc_html__( 'Full width area at top of footer area. Allow [TOP FOOTER] Widget as instagram grid & and social counter widgets', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);

		register_sidebar(
			array(
				'id'            => 'look_ruby_sidebar_footer_1',
				'name'          => esc_html__( 'Footer 1', 'look' ),
				'description'   => esc_html__( 'One of column of footer area', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);

		register_sidebar(
			array(
				'id'            => 'look_ruby_sidebar_footer_2',
				'name'          => esc_html__( 'Footer 2', 'look' ),
				'description'   => esc_html__( 'One of column of footer area', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);

		register_sidebar(
			array(
				'id'            => 'look_ruby_sidebar_footer_3',
				'name'          => esc_html__( 'Footer 3', 'look' ),
				'description'   => esc_html__( 'One of column of footer area', 'look' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-title block-title"><h3>',
				'after_title'   => '</h3></div>'
			)
		);
	}

	add_action( 'widgets_init', 'look_ruby_register_theme_sidebars' );
}