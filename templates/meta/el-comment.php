<?php
if ( comments_open() )  :
	$look_ruby_count_comment = get_comments_number(); ?>
	<span class="meta-info-el meta-info-comment">
		<a href="<?php echo get_comments_link() ?>">
			<?php if ( 0 == $look_ruby_count_comment ) : ?>
				<?php esc_attr_e( 'add comment', 'look' ); ?>
			<?php elseif ( 1 == $look_ruby_count_comment ) : ?>
				<?php esc_attr_e( '1 comment', 'look' ); ?>
			<?php else : ?>
				<?php echo sprintf( esc_html__( '%s comments', 'look' ), $look_ruby_count_comment ); ?>
			<?php endif; ?>
		</a>
	</span>
<?php endif;
