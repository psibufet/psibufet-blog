<?php
$logo        = look_ruby_core::get_option( 'logo' );
$logo_retina = look_ruby_core::get_option( 'logo_retina' );

echo '<div class="header-logo-wrap" ' . look_ruby_schema::markup( 'logo', false ) . '>';
if ( ! empty( $logo['url'] ) ) {
	if ( empty( $logo_retina['url'] ) ) {
		echo '<a class="logo-image" href="' . get_home_url() . '">';
		echo '<img class="logo-img-data" src="' . esc_url( $logo['url'] ) . '" alt="' . get_bloginfo( 'name' ) . '" height="' . esc_attr( $logo['height'] ) . '" width="' . esc_attr( $logo['width'] ) . '">';
		echo '</a>';
	} else {
		echo '<a class="logo-image" href="' . get_home_url() . '">';
		echo '<img class="logo-img-data" src="' . esc_url( $logo['url'] ) . '" srcset="' . esc_url( $logo['url'] ) . ' 1x, ' . esc_url( $logo_retina['url'] ) . ' 2x" src="' . esc_url( $logo['url'] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="max-height: ' . esc_attr( $logo['height'] ) . 'px" height="' . esc_attr( $logo['height'] ) . '" width="' . esc_attr( $logo['width'] ) . '"/>';
		echo '</a>';
	}

	if ( is_front_page() ) {
		echo '<h1 class="logo-title" style="display:none">' . get_bloginfo( 'name' ) . '</h1>';
		echo '<meta itemprop="name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
	}

} else {
	echo '<div class="logo-text-wrap">';
	if ( is_front_page() || is_home() ) {
		echo '<h1 class="logo-text"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></h1>';
	} else {
		echo '<strong class="logo-text"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></strong>';
	}
	if ( get_bloginfo( 'description' ) ) {
		echo ' <h3 class="site-tagline">' . get_bloginfo( 'description' ) . '</h3>';
	}
	echo '</div>';
}

echo '</div>';
