<?php
$look_ruby_human_time = look_ruby_core::get_option( 'human_time' );
$look_ruby_date_unix  = get_the_time( 'U', get_the_ID() );
?>
<span class="meta-info-el meta-info-date">
	<?php if ( ! empty( $look_ruby_human_time ) ) : ?>
		<?php $look_ruby_time = get_the_time( 'U', get_the_ID(), current_time( 'timestamp' ) ); ?>
		<span class="meta-date"><?php echo sprintf( esc_html__( '%s ago', 'look' ), human_time_diff( $look_ruby_time, current_time( 'timestamp' ) ) ); ?></span>
	<?php else: ?>
		<span class="meta-date"><?php echo get_the_date( '', get_the_ID() ) ?></span>
	<?php endif; ?>
</span>

