<span class="meta-info-el meta-info-author">
	<span class="meta-info-decs"><?php esc_attr_e( 'by :', 'look' ); ?></span>
	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" rel="author" title="<?php echo esc_html__( 'Post by', 'look' ) . ' ' . get_the_author_meta( 'display_name' ); ?>" >
		<?php echo get_the_author_meta( 'display_name' ); ?>
	</a>
</span>
