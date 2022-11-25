<?php
//get settings
$look_ruby_smooth_display_enable = look_ruby_core::get_option( 'site_smooth_display' );
$look_ruby_smooth_display_style  = look_ruby_core::get_option( 'site_smooth_display_style' );
$look_ruby_list_excerpt_length   = look_ruby_core::get_option( 'list_excerpt_length' );
$look_ruby_post_share_bar_list   = look_ruby_core::get_option( 'post_share_bar_list' );

//create classes
$look_ruby_classes   = array();
$look_ruby_classes[] = 'post-wrap post-list row row-eq-height';

if ( is_sticky() ) {
	$look_ruby_classes[] = 'post-sticky';
}

if ( ! empty( $look_ruby_smooth_display_enable ) ) {
	$look_ruby_classes[] = 'ruby-animated-image ' . esc_attr( $look_ruby_smooth_display_style );
}
$look_ruby_classes = implode( ' ', $look_ruby_classes );
$readingTime = get_post_meta(get_the_ID())['_yoast_wpseo_estimated-reading-time-minutes'][0];
$createDate = get_the_date();
$createDate_mobile = get_the_date('d.m.Y');
$updateDate = get_the_modified_date();
$updateDate_mobile = get_the_modified_date('d.m.Y'); ?>
<article <?php look_ruby_markup_article(); post_class( esc_attr( $look_ruby_classes ) ); ?>>
	<?php
	$look_ruby_featured = get_the_post_thumbnail( get_the_ID(), 'look_ruby_360_250' );
	if ( has_post_thumbnail() && ! empty( $look_ruby_featured ) ) : ?>
		<div class="is-left-col col-sm-6 col-xs-4">
			<div class="post-thumb-outer">
				<?php echo look_ruby_template_thumbnail::render_image( 'look_ruby_360_250' ); ?>
				<?php look_ruby_template_part::post_format_info(); ?>
				<?php look_ruby_template_part::post_review_score(); ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="is-right-col col-sm-6 col-xs-8">
		<div class="is-table">
			<div class="is-cell is-middle">
				<div class="post-header">
					<div class="post-header-meta">
						<?php look_ruby_template_part::post_cat_info(); ?>
						<?php look_ruby_template_part::post_meta_info(); ?>
					</div>
					<header class="entry-header">
						<?php look_ruby_template_part::post_title(); ?>
					</header>
				</div>
				<?php look_ruby_template_part::post_excerpt( $look_ruby_list_excerpt_length ); ?>
				<footer class="article-footer">
					<?php look_ruby_template_part::post_readmore(); ?>
					<?php if ( ! empty( $look_ruby_post_share_bar_list ) ) : ?>
						<?php look_ruby_template_part::post_share_bar(); ?>
					<?php endif; ?>
					<div class="readingTime"><p>Przeczytasz w <?php echo $readingTime; ?> min.</p></div>
					<?php if($createDate !== $updateDate): ?>
						<div class="publishDate"><p><?php echo $updateDate; ?></p></div>
					<?php else: ?>
						<div class="publishDate"><p><?php echo $createDate; ?></p></div>
					<?php endif; ?>
				</footer>
				<?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
			</div>
		</div>
	</div>
	<div class="footerMobile">
		<?php if ( ! empty( $look_ruby_post_share_bar_list ) ) : ?>
			<?php look_ruby_template_part::post_share_bar(); ?>
		<?php endif; ?>
		<div class="readingTime"><p><span>Przeczytasz w </span><?php echo $readingTime; ?> min.</p></div>
		<?php if($createDate !== $updateDate): ?>
			<div class="publishDate"><p class="desktop"><?php echo $updateDate; ?></p><p class="mobile"><?php echo $updateDate_mobile; ?></p></div>
		<?php else: ?>
			<div class="publishDate"><p class="desktop"><?php echo $createDate; ?></p><p class="mobile"><?php echo $createDate_mobile; ?></p></div>
		<?php endif; ?>
	</div>
</article>