<?php
//get settings
$look_ruby_footer_logo    = look_ruby_core::get_option( 'footer_logo' );
$look_ruby_footer_social  = look_ruby_core::get_option( 'footer_social_bar' );
$look_ruby_copyright_text = look_ruby_core::get_option( 'site_copyright' );

if ( empty( $look_ruby_footer_logo['url'] ) && empty( $look_ruby_footer_social ) && empty( $look_ruby_copyright_text ) ) {
	return false;
} ?>
<div class="footer-social-bar-wrap">
	<div class="ruby-container">
		<?php if ( ! empty( $look_ruby_footer_logo['url'] ) || ! empty( $look_ruby_footer_social ) ) : ?>
			<div class="footer-social-bar-inner">
			<?php if ( !empty( $look_ruby_footer_logo['url'] ) ) : ?>
				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" title="<?php bloginfo( 'name' ); ?>">
						<img src="<?php echo esc_url( $look_ruby_footer_logo['url'] ) ?>" height="<?php echo esc_attr($look_ruby_footer_logo['height']); ?>" width="<?php echo esc_attr($look_ruby_footer_logo['width']); ?>"  alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
			<?php endif; ?>
			<?php if ( ! empty( $look_ruby_footer_social ) ) : ?>
				<?php $look_ruby_website_social_data = look_ruby_social_data::web_data();
				if ( class_exists( 'look_ruby_social_bar' ) ) {
					echo look_ruby_social_bar::render( $look_ruby_website_social_data, 'footer-social-wrap', true, false, true );
				} ?>
			<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ( ! empty( $look_ruby_copyright_text ) ) : ?>
			<div id="footer-copyright" class="footer-copyright-wrap">
				<p><?php echo wp_kses_post( $look_ruby_copyright_text ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>