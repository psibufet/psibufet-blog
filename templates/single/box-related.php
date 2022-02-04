<?php

$look_ruby_single_post_related_box = look_ruby_core::get_option( 'single_post_related_box' );
if ( empty( $look_ruby_single_post_related_box ) ) {
	return false;
}

$data_query = look_ruby_post_related::get_data();

$look_ruby_related_box_text    = look_ruby_core::get_option( 'single_post_related_box_title' );

if ( empty( $look_ruby_single_post_related_box ) || empty( $data_query->post_count ) ) {
    return false;
}

if ( ! empty( $data_query ) ) :
	?>
	<div class="single-related-wrap single-box">
		<div class="single-related-header block-title">
			<h3><?php echo esc_html( $look_ruby_related_box_text ); ?></h3>
		</div>
		<div class="single-related-content row">
            <?php
            while ( $data_query->have_posts() ) {
                $data_query->the_post();
                echo '<div class="col-sm-4 col-xs-6">';
                get_template_part( 'templates/module/layout', 'grid_small_s' );
                echo '</div>';
            }
            ?>
		</div>
	</div>
<?php endif; ?>
<?php wp_reset_postdata();

?>
