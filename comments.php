<?php

if ( post_password_required() ) {
    return false;
};

if ( is_page() ) {
	$look_ruby_comment_box = look_ruby_single::check_comment_box_page();
} else {
	$look_ruby_comment_box = look_ruby_single::check_comment_box_post();
}
if ( empty( $look_ruby_comment_box ) ) {
	return false;
} ?>
<div id="comments" class="single-comment-wrap single-box comments-area">
    <?php if ( have_comments() ) : ?>
        <div class="comment-title block-title-wrap">
            <h3>
                <?php comments_number( esc_html__('No Comments', 'look')); ?>
            </h3>
        </div>
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		    <nav id="comment-nav-above" class="comment-navigation">
			    <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'look' ); ?></h1>
			    <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'look' ) ); ?></div>
			    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'look' ) ); ?></div>
		    </nav>
        <?php endif; ?>

	    <ol class="comment-list entry">
		    <?php
		    wp_list_comments(
			    array(
				    'style'       => 'ol',
				    'short_ping'  => true,
				    'avatar_size' => 100,
			    )
		    );
		    ?>
        </ol>
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		    <nav id="comment-nav-below" class="comment-navigation">
			    <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'look' ); ?></h1>
			    <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'look' ) ); ?></div>
			    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'look' ) ); ?></div>
		    </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php
    if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'look' ); ?></p>
    <?php endif;

    if ( ! function_exists( 'look_ruby_comment_form' ) ) {
	    function look_ruby_comment_form( $fields ) {

		    $req      = get_option( 'require_name_email' );
		    $aria_req = ( $req ? " aria-required='true'" : '' );

		    $enable_website_form = look_ruby_core::get_option( 'enable_website_comment_box' );

		    $fields['author'] = '<p class="comment-form-author col-sm-6 col-xs-12"><label for="author" >' . esc_html__( 'Name', 'look' ) . '</label><input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Name', 'look' ) . '..." size="30" ' . $aria_req . ' /></p>';
		    $fields['email'] = '<p class="comment-form-email col-sm-6 col-xs-12"><label for="email" >' . esc_html__( 'Email', 'look' ) . '</label><input id="email" name="email" type="text" placeholder="' . esc_attr__( 'Email', 'look' ) . '..." ' . $aria_req . ' /></p>';

		    if ( ! empty( $enable_website_form ) ) {
			    $fields['url'] = '<p class="comment-form-url col-xs-12"><label for="url">' . esc_html__( 'Website', 'look' ) . '</label>' . '<input id="url" name="url" type="text" placeholder="' . esc_attr__( 'Website', 'look' ) . '..." ' . $aria_req . ' /></p>';
		    } else {
			    unset( $fields['url'] );
		    }

		    return $fields;
	    }

	    add_filter( 'comment_form_default_fields', 'look_ruby_comment_form' );
    }


    if ( is_user_logged_in() ) {
	    $current_user = wp_get_current_user();
	    $args         = array(
		    'title_reply'          => esc_html__( 'Leave a Response', 'look' ),
		    'comment_notes_before' => '',
		    'comment_notes_after'  => '',
		    'comment_field'        => '<p class="comment-form-comment"><label for="comment" >' . esc_html__( 'Comment', 'look' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_html__( 'Write your comment here...', 'look' ) . '"></textarea></p>',
		    'id_submit'            => 'comment-submit',
		    'class_submit'         => 'clearfix',
		    'label_submit'         => esc_html__( 'Leave a comment', 'look' )
	    );
    } else {
	    $args = array(
		    'title_reply'          => esc_html__( 'Leave a Response', 'look' ),
		    'comment_notes_before' => '',
		    'comment_notes_after'  => '',
		    'comment_field'        => '<p class="comment-form-comment"><label for="comment" >' . esc_html__( 'Comment', 'look' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_html__( 'Write your comment here...', 'look' ) . '"></textarea></p>',
		    'id_submit'            => 'comment-submit',
		    'class_submit'         => 'clearfix',
		    'label_submit'         => esc_html__( 'Leave a comment', 'look' )
	    );
    };

    comment_form($args); ?>
</div>
