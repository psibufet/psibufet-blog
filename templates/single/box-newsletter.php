<?php if(current_user_can('administrator')): ?>
<section class="gsExpert">
    <div class="gsExpert__wrap">
        <div class="gsExpert__image">
            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"/>
            <h4><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta('nickname'); ?></a></h4>
        </div>
        <div class="gsExpert__content">
            <p><?php echo get_the_author_meta('user_description'); ?></p>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="singleNewsletter">
    <div class="singleNewsletter__content">
        <h2><?php echo get_field('newsletter_title', 2647); ?></h2>
        <p><?php echo get_field('newsletter_content', 2647); ?></p>
    </div>
    <?php echo do_shortcode('[mc4wp_form id="2901"]'); ?>
</div>