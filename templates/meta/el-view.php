<?php

$look_ruby_count_views = look_ruby_post_view::get_view();
if ( ! empty ( $look_ruby_count_views ) )  : ?>
	<span class="meta-info-el meta-info-view">
		<?php if ( 1 == $look_ruby_count_views ) : ?>
			<a href="<?php echo get_permalink() ?>"><span><?php esc_attr_e( '1 view', 'look' ); ?></span></a>
		<?php else : ?>
			<a href="<?php echo get_permalink() ?>"><span><?php echo sprintf( esc_html__( '%s views', 'look' ), $look_ruby_count_views ); ?></span></a>
	<?php endif; ?>
	</span>
<?php endif;
