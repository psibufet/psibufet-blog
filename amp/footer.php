<?php
$look_copyright_text = look_ruby_core::get_option( 'amp_copyright_text' );
$look_back_top       = look_ruby_core::get_option( 'amp_back_top' );
$look_footer_menu    = look_ruby_core::get_option( 'amp_footer_menu' );

?>
<footer class="amp-wp-footer">
	<div>
		<h2 class="footer-logo"><?php echo esc_html( $this->get( 'blog_name' ) ); ?></h2>
		<?php if ( ! empty( $look_footer_menu ) ) {
			wp_nav_menu( array(
				'container'       => 'div',
				'container_class' => 'footer-link',
				'menu'            => $look_footer_menu,
				'echo'            => true,
				'depth'           => 1,
			) );
		}
		if ( ! empty( $look_copyright_text ) ): ?>
			<p class="footer-copyright"><?php echo html_entity_decode( esc_html( $look_copyright_text ) ); ?></p>
		<?php endif; ?>
		<?php if ( ! empty( $look_back_top ) ) : ?>
			<a href="#top" class="back-to-top">&uarr;</a>
		<?php endif; ?>
	</div>
</footer>
