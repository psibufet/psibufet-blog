<?php
//get settings
$look_ruby_smooth_display_enable = look_ruby_core::get_option( 'site_smooth_display' );
$look_ruby_smooth_display_style  = look_ruby_core::get_option( 'site_smooth_display_style' );

//create classes
$look_ruby_classes   = array();
$look_ruby_classes[] = 'post-wrap post-list-mini';
if ( ! empty( $look_ruby_smooth_display_enable ) ) {
	$look_ruby_classes[] = 'ruby-animated-image ' . esc_attr( $look_ruby_smooth_display_style );
}
$look_ruby_classes = implode( ' ', $look_ruby_classes ); ?>
<article <?php look_ruby_markup_article(); post_class( esc_attr( $look_ruby_classes ) ); ?>>
	<div class="post-header">
		<header class="entry-header">
			<?php look_ruby_template_part::post_title( 'is-mini-title', 'h3' ); ?>
		</header>
		<?php look_ruby_template_part::post_meta_info( array( 'date' => true ) ); ?>
		<?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
	</div>
</article>