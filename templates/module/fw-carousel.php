<?php
$look_ruby_featured_attachment = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'look_ruby_1400_800' ); ?>
<article <?php look_ruby_markup_article(); post_class( 'post-wrap post-slider is-light-text post-carousel is-background-post' ); ?> style="background-image: url(<?php echo esc_url( $look_ruby_featured_attachment[0] ); ?>)">
	<a class="post-slider-link" href="<?php echo get_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ) ?>"></a>
	<div class="is-table">
		<div class="is-cell is-bottom is-center">
			<div class="post-header">
				<?php look_ruby_template_part::post_cat_info( 'is-relative' ); ?>
				<header class="entry-header">
					<?php look_ruby_template_part::post_title( 'is-big-title', 'h2' ); ?>
				</header>
				<?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
			</div>
		</div>
	</div>
</article>