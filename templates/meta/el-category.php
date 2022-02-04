<?php
if ( ! function_exists( 'look_ruby_meta_el_category' ) ) {
	function look_ruby_meta_el_category( $primary = true ) {
		$categories       = get_the_category();
		$primary_category = get_post_meta( get_the_ID(), 'look_ruby_single_primary_category', true );

		if ( empty( $primary_category ) || false === $primary ) {
			if ( ! empty( $categories ) && array( $categories ) ) {
				echo '<span class="meta-info-el meta-info-cat">';

				foreach ( $categories as $category ) {
					echo '<a href="' . get_category_link( $category->term_id ) . '" rel="category tag">';
					echo esc_html( $category->name );
					echo '</a>';
				}
				echo '</span>';
			}

		} else {
			$primary_category_name = get_cat_name( $primary_category );
			echo '<span class="meta-info-el meta-info-cat">';
			echo '<a href="' . get_category_link( $primary_category ) . '" rel="category tag">';
			echo esc_html( $primary_category_name );
			echo '</a>';
			echo '</span><!--info meta category-->';

		}
	}
}

