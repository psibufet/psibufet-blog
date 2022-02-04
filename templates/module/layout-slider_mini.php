<article <?php look_ruby_markup_article(); post_class( 'post-wrap post-slider-mini' ); ?>>
	<div class="post-thumb-outer">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php echo look_ruby_template_thumbnail::render_image( 'look_ruby_320_400' ); ?>
		<?php endif; ?>
		<?php look_ruby_template_part::post_format_info(); ?>
		<?php look_ruby_template_part::post_review_score(); ?>
	</div>
	<div class="post-header">
		<header class="entry-header post-header-inner">
			<?php look_ruby_template_part::post_title( 'is-small-title', 'h6' ); ?>
		</header>
		<?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
	</div>
</article>
