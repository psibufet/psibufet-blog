<?php
// check option
$look_ruby_header_social_bar  = look_ruby_core::get_option( 'logo_area_social_bar' );
$look_ruby_banner_search_icon = look_ruby_core::get_option( 'logo_area_search_icon' );

if ( empty( $look_ruby_header_social_bar ) && empty ( $look_ruby_banner_search_icon ) ) {
	return false;
}

if ( ! empty( $look_ruby_header_social_bar ) ) {
	$look_ruby_social_data = look_ruby_social_data::web_data();
} ?>
<div class="header-social-wrap">
	<?php if ( ! empty( $look_ruby_social_data ) && class_exists( 'look_ruby_social_bar' ) ) : ?>
		<?php echo look_ruby_social_bar::render( $look_ruby_social_data, 'header-social-inner', true, false, true ); ?>
	<?php endif; ?>
	<?php if ( ! empty( $look_ruby_banner_search_icon ) ) : ?>
		<?php get_template_part( 'templates/header/module', 'banner_search_icon' ); ?>
	<?php endif; ?>
</div>
