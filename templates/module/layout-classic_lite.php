<?php
//check options
$look_ruby_post_format           = look_ruby_post_format::check_post_format();
$look_ruby_smooth_display_enable = look_ruby_core::get_option( 'site_smooth_display' );
$look_ruby_smooth_display_style  = look_ruby_core::get_option( 'site_smooth_display_style' );

//create classes
$look_ruby_classes   = array();
$look_ruby_classes[] = 'post-wrap post-classic post-classic-lite';

if ( ! empty( $look_ruby_smooth_display_enable ) ) {
	$look_ruby_classes[] = 'ruby-animated-image ' . esc_attr( $look_ruby_smooth_display_style );
}
$look_ruby_classes = implode( ' ', $look_ruby_classes ); ?>
<article <?php look_ruby_markup_article(); post_class( esc_attr( $look_ruby_classes ) ); ?>>
	<div class="post-thumb-outer">
		<?php switch ( $look_ruby_post_format ) {
			case 'gallery' :
				echo look_ruby_template_thumbnail::render_gallery();
				break;
			case 'video':
				echo look_ruby_template_thumbnail::render_video();
				break;
			case 'audio' :
				echo look_ruby_template_thumbnail::render_audio();
				break;
			default :
				if ( has_post_thumbnail() ) {
					echo look_ruby_template_thumbnail::render_image( 'look_ruby_760_510' );
				}
				look_ruby_template_part::post_review_score();
				break;
		} ?>
	</div>
	<div class="post-header is-center">
		<?php look_ruby_template_part::post_cat_info(); ?>
		<header class="entry-header">
			<?php look_ruby_template_part::post_title( 'is-big-title', 'h2' ); ?>
		</header>
		<?php look_ruby_template_part::post_meta_info(); ?>
		<?php get_template_part( 'templates/meta/el', 'meta_footer' ); ?>
	</div>
</article>
