<span class="meta-info-el meta-info-author">
	<span class="meta-info-author-thumb">
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), 50, '', get_the_author_meta( 'display_name' ) ); ?>
		</span>
	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" rel="author" title="<?php echo esc_html__( 'Post by', 'look' ) . ' ' . get_the_author_meta( 'display_name' ); ?>" >
		<?php echo get_the_author_meta( 'display_name' ); ?>
	</a>
</span>
