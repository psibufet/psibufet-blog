<?php
//featured image
$look_ruby_smooth_display_enable = look_ruby_core::get_option( 'site_smooth_display' );
$look_ruby_smooth_display_style  = look_ruby_core::get_option( 'site_smooth_display_style' );

//create classes
$look_ruby_classes   = array();
$look_ruby_classes[] = 'post-wrap post-overlay post-overlay-1';
if ( ! empty( $look_ruby_smooth_display_enable ) ) {
	$look_ruby_classes[] = 'ruby-animated-image ' . esc_attr( $look_ruby_smooth_display_style );
}
$look_ruby_classes = implode( ' ', $look_ruby_classes ); ?>
<article <?php look_ruby_markup_article(); post_class( esc_attr( $look_ruby_classes ) ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb-outer">
			<?php echo look_ruby_template_thumbnail::render_image( 'look_ruby_760_510' ); ?>
			<?php look_ruby_template_part::post_format_info(); ?>
			<?php look_ruby_template_part::post_review_score(); ?>
		</div>
	<?php else : ?>
		<div class="post-thumb-outer">
			<div class="holder-none"></div>
		</div>
	<?php endif; ?>
	<div class="is-absolute">
		<div class="post-header is-left is-light-text">
			<?php look_ruby_template_part::post_cat_info( 'is-relative' ); ?>
			<header class="entry-header">
				<?php look_ruby_template_part::post_title( 'is-big-title', 'h2' ); ?>
			</header>
			<?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
		</div>
	</div>
</article>