<div class="post-wrap post-grid-small-s">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb-outer">
			<?php echo look_ruby_template_thumbnail::render_image( 'look_ruby_300_270' ); ?>
			<?php look_ruby_template_part::post_format_info(); ?>
			<?php look_ruby_template_part::post_review_score(); ?>
		</div>
	<?php endif; ?>
	<div class="post-header">
		<div class="post-title is-small-title">
			<a href="<?php echo get_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><?php echo get_the_title(); ?></a>
		</div>
		<?php look_ruby_template_part::post_meta_info( array( 'date' => true ) ); ?>
	</div>
</div>
