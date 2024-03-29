<?php
/**
 * This file render author blog listing
 */

get_header();

$author = get_user_by( 'slug', get_query_var( 'author_name' ) );

$look_ruby_options                          = array();
$look_ruby_options['big_first']             = 0;
$look_ruby_options['blog_layout']           = look_ruby_core::get_option( 'author_layout' );
$look_ruby_options['blog_sidebar_name']     = look_ruby_core::get_option( 'author_sidebar' );
$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'author_sidebar_position' );

if ( 'default' == $look_ruby_options['blog_sidebar_position'] ) {
	$look_ruby_options['blog_sidebar_position'] = look_ruby_core::get_option( 'site_sidebar_position' );
}?>
<section class="authorHeader">
	<div class="authorHeader__wrap container">
		<div class="image">
			<img src="<?php echo get_field('author_profile_image', 'user_' . $author->ID)['url']; ?>" />
		</div>
		<h1><?php echo get_user_meta( $author->ID, 'wpseo_title', true ); ?></h1>
	</div>
</section>
<?php
look_ruby_blog_author_layout( $look_ruby_options );

get_footer();