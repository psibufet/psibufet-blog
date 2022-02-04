<article <?php look_ruby_markup_article(); post_class( 'post-wrap post-carousel-1 is-center clearfix' ); ?>>
	<div class="post-thumb-outer">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php echo look_ruby_template_thumbnail::render_image( 'look_ruby_760_510' ); ?>
		<?php endif; ?>
		<?php look_ruby_template_part::post_format_info(); ?>
		<?php look_ruby_template_part::post_review_score(); ?>
	</div>
	<div class="post-header is-light-text">
		<?php look_ruby_template_part::post_cat_info(); ?>
		<header class="entry-header">
			<?php look_ruby_template_part::post_title( 'is-medium-title' ); ?>
		</header>
		<?php look_ruby_template_part::post_meta_info(); ?>
		<?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
	</div>
</article>
