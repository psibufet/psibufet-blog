<?php
$look_protocol = 'http';
if ( is_ssl() ) {
	$look_protocol = 'https';
}

$publisher           = get_bloginfo( 'name' );
$look_publisher_logo = '';

$look_logo = look_ruby_core::get_option( 'logo' );
if ( ! empty( $look_logo['url'] ) ) {
	$look_publisher_logo = esc_url( $look_logo['url'] );
}
$feat_attachment = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
?>
<aside class="post-meta hidden">
	<meta itemprop="mainEntityOfPage" content="<?php echo get_permalink(); ?>">
	<span class="vcard author" itemprop="author" content="<?php echo get_the_author_meta( 'display_name' ); ?>"><span class="fn"><?php echo get_the_author_meta( 'display_name' ); ?></span></span>
	<time class="date published entry-date" datetime="<?php echo date( DATE_W3C, get_the_time( 'U', get_the_ID() ) ); ?>" content="<?php echo date( DATE_W3C, get_the_time( 'U', get_the_ID() ) ); ?>" itemprop="datePublished"><?php echo get_the_date( '', get_the_ID() ) ?></time>
	<meta class="updated" itemprop="dateModified" content="<?php echo date( DATE_W3C, get_the_modified_date( 'U', get_the_ID() ) ); ?>">
	<span itemprop="publisher" itemscope itemtype="<?php echo esc_attr( $look_protocol ) ?>://schema.org/Organization">
		<meta itemprop="name" content="<?php echo esc_attr( $publisher ); ?>">
		<span itemprop="logo" itemscope itemtype="<?php echo esc_attr( $look_protocol ) ?>://schema.org/ImageObject">
		<meta itemprop="url" content="<?php echo esc_url( $look_publisher_logo ); ?>">
		</span>
	</span>
	<?php if ( ! empty( $feat_attachment[0] )) : ?>
	<span itemprop="image" itemscope itemtype="<?php echo esc_attr( $look_protocol ); ?>://schema.org/ImageObject">
		<meta itemprop="url" content="<?php echo esc_url( $feat_attachment[0] ); ?>">
		<meta itemprop="width" content="<?php echo esc_attr( $feat_attachment[1] ); ?>">
		<meta itemprop="height" content="<?php echo esc_attr( $feat_attachment[2] ); ?>">
	</span>
	<?php endif; ?>
</aside>
