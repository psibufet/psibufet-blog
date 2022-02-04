<?php
$look_ruby_logo_mobile = look_ruby_core::get_option( 'logo_mobile' );
echo '<div class="header-logo-mobile-wrap">';
if ( ! empty( $look_ruby_logo_mobile['url'] ) ) {
	echo '<a class="logo-image-mobile" href="' . get_home_url() . '">';
	echo '<img class="logo-img-data" src="' . esc_url( $look_ruby_logo_mobile['url'] ) . '" alt="' . get_bloginfo( 'name' ) . '" height="' . esc_attr( $look_ruby_logo_mobile['height'] ) . '" width="' . esc_attr( $look_ruby_logo_mobile['width'] ) . '">';
	echo '</a>';
} else {
	echo '<div class="logo-text-mobile-wrap">';
	echo '<strong class="logo-text"><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></strong>';
	echo '</div>';
}

echo '</div>';