
<?php
if ( empty( $post_id ) ) {
    $post_id = get_the_ID();
}
$total_word = get_post_meta( $post_id, 'look_total_word', true );
$read_speed = intval( look_ruby_core::get_option( 'read_speed' ) );

if ( empty( $total_word ) && function_exists( 'look_add_total_word' ) ) {
    $total_word = look_add_total_word( $post_id );
}

if ( empty( $read_speed ) ) {
    $read_speed = 130;
}

$minutes = floor( $total_word / $read_speed );
$second  = floor( ( $total_word / $read_speed ) * 60 ) % 60;
if ( $second > 30 ) {
    $minutes ++;
} ?>
<span class="meta-info-el meta-info-read">
    <?php echo sprintf( esc_html__( '%s Min Read', 'look' ), $minutes ); ?>
</span>

