<?php
$look_ruby_featured_attachment = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'look_ruby_1600_0' ); ?>
<article <?php look_ruby_markup_article(); post_class( 'post-wrap post-slider is-light-text post-slider-fw-2 is-background-post' ); ?> style="background-image: url(<?php echo esc_url( $look_ruby_featured_attachment[0] ); ?>)">
		<div class="content-overlay">
			<div class="ruby-container">
				<div class="overlay-holder">
                    <div class="post-header">
                        <?php look_ruby_template_part::post_cat_info( 'is-relative'); ?>
                        <header class="entry-header">
                            <?php look_ruby_template_part::post_title( 'is-big-title', 'h2' ); ?>
                        </header>
                        <?php look_ruby_template_part::post_meta_info(); ?>
                        <?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
				    </div>
                </div>
		</div>
	</div>
</article>