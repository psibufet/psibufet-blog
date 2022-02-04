<div class="post-wrap post-grid-small-m">
    <div class="post-header">
        <?php look_ruby_template_part::post_cat_info( 'is-relative'); ?>
        <div class="post-title is-small-title">
            <a href="<?php echo get_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><?php echo get_the_title(); ?></a>
        </div>
    </div>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb-outer">
			<?php echo look_ruby_template_thumbnail::render_image( 'look_ruby_300_300' ); ?>
			<?php look_ruby_template_part::post_format_info(); ?>
			<?php look_ruby_template_part::post_review_score(); ?>
		</div>
	<?php endif; ?>
</div>
