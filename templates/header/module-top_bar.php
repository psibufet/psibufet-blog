<?php

$look_ruby_top_bar_header = look_ruby_core::get_option( 'header_top_bar' );
$look_ruby_top_bar_search = look_ruby_core::get_option( 'header_top_bar_search' );
$look_ruby_top_bar_social = look_ruby_core::get_option( 'header_top_bar_social' );
$look_ruby_top_bar_shortcode = look_ruby_core::get_option( 'header_top_bar_shortcode' );

if ( empty( $look_ruby_top_bar_header ) ) {
	return false;
}
?>
<div class="top-bar-wrap clearfix">
	<div class="ruby-container">
		<div class="top-bar-inner clearfix">
			<div class="top-bar-menu">
			<?php
				if ( has_nav_menu( 'look_ruby_top_navigation' ) ) {
					wp_nav_menu(
						array(
							'container'      => false,
							'theme_location' => 'look_ruby_top_navigation',
							'menu_class'     => 'top-bar-menu-inner',
							'depth'          => '3',
							'echo'           => true
						)
					);
			}; ?>
			</div>
			<div class="top-bar-right">
				<?php if(!empty($look_ruby_top_bar_shortcode)) : ?>
						<div class="top-bar-shortcode">
							<?php echo do_shortcode($look_ruby_top_bar_shortcode); ?>
						</div>
				<?php endif; ?>
				<?php if(!empty($look_ruby_top_bar_social)) : ?>
					<?php $look_ruby_social_data = look_ruby_social_data::web_data(); ?>
					<?php if ( ! empty( $look_ruby_social_data ) && class_exists( 'look_ruby_social_bar' ) ) : ?>
						<div class="top-bar-social-wrap">
							<?php echo look_ruby_social_bar::render( $look_ruby_social_data, 'top-bar-social-inner', true, false, true ); ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				<?php if(!empty($look_ruby_top_bar_search)) : ?>
					<div id="top-bar-search">
						<?php get_search_form( true ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
	