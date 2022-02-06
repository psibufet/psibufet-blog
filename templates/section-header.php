<?php
$header_layout = look_ruby_core::get_option( 'header_layout' );
if ( empty( $header_layout ) ) {
	$header_layout = 1;
}
$header_layout_manager = look_ruby_core::get_option( 'header_layout_manager' );
$header_classes = 'header-outer header-style-' . esc_attr($header_layout);
?>
<div class="<?php echo esc_attr( $header_classes ); ?>">
	<?php get_template_part( 'templates/header/module', 'top_bar' ); ?>

	<?php if(1 == $header_layout) : ?>
	<?php if ( ! empty( $header_layout_manager['enabled'] ) && is_array( $header_layout_manager['enabled'] ) ) : ?>
		<div class="header-wrap">
			<?php
			foreach ( $header_layout_manager['enabled'] as $look_ruby_key => $look_ruby_val ) {
				switch ( $look_ruby_key ) {
					case 'logo_area' :
						get_template_part( 'templates/header/module', 'header_banner' );
						break;
					case 'main_nav' :
						get_template_part( 'templates/header/module', 'navigation' );
						break;
				}
			};?>
		</div>
	<?php endif; ?>
	<?php get_template_part( 'templates/header/module', 'ad' ); ?>

	<?php else : ?>
		<?php $look_ruby_banner_search_icon = look_ruby_core::get_option( 'logo_area_search_icon' ); ?>
	<div class="header-wrap">
		<div class="header-nav-wrap clearfix">
			<div class="header-nav-inner">
				<div class="ruby-container">
					<div class="header-nav-holder clearfix">
						<?php get_template_part( 'templates/header/module', 'logo' ); ?>
						<?php get_template_part( 'templates/header/module', 'nav_search_icon' ); ?>
						<nav id="navigation" class="main-nav-wrap" <?php look_ruby_schema::markup( 'navigation', true ); ?>>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'look_ruby_main_navigation',
									'menu_id'        => 'main-navigation',
									'container'      => '',
									'menu_class'     => 'main-nav-inner',
									'walker'         => new look_ruby_Walker,
									'depth'          => '3',
									'echo'           => true,
									'fallback_cb'    => 'look_ruby_navigation_fallback'
								)
							);	?>
							<div class="nav-search-outer">
								<?php get_template_part( 'templates/header/module', 'nav_social_bar' ); ?>
								<?php if ( ! empty( $look_ruby_banner_search_icon ) ) : ?>
									<?php get_template_part( 'templates/header/module', 'banner_search_icon' ); ?>
								<?php endif; ?>
							</div>
						</nav>
						<?php get_template_part( 'templates/header/module', 'logo_mobile' ); ?>
						<?php get_template_part( 'templates/header/module', 'off_canvas_btn' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part( 'templates/header/module', 'ad' ); ?>
	<?php endif; ?>

	<div id="ruby-banner-search-form" class="banner-search-form-wrap mfp-hide mfp-animation">
		<div class="banner-search-form-inner">
			<?php get_search_form(true); ?>
		</div>
	</div>

</div>
