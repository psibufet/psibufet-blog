<section class="gsExpert">
    <div class="gsExpert__wrap">
        <div class="gsExpert__image">
            <img src="<?php echo get_field('author_profile_image', 'user_' . get_the_author_meta('ID'))['url']; ?>" alt="<?php echo get_field('author_profile_image', 'user_' . get_the_author_meta('ID'))['alt']; ?>"/>
            <h4><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta('nickname'); ?></a></h4>
        </div>
        <div class="gsExpert__content">
            <p><?php echo get_the_author_meta('user_description'); ?></p>
        </div>
    </div>
</section>


<div class="singleNewsletter">
    <div class="singleNewsletter__content">
        <h2><?php echo get_field('newsletter_title', 2647); ?></h2>
        <p><?php echo get_field('newsletter_content', 2647); ?></p>
    </div>
    <?php echo do_shortcode('[mc4wp_form id="2901"]'); ?>
</div>

<div class="userReview">
    <div class="userReview__types">
        <h3>Czy ten artykuł był pomocny?</h3>
        <form id="postReview" class="wrap" type="POST" postid="<?php echo get_the_ID(); ?>">
            <button id="review-bad" type="button" class="type">
                <img class="full" src="<?php echo get_template_directory_uri() . '/assets/images/single/bad.svg'; ?>" />
                <img src="<?php echo get_template_directory_uri() . '/assets/images/single/bad_clear.svg'; ?>" />
            </button>
            <button id="review-good" type="button" class="type">
                <img class="full" src="<?php echo get_template_directory_uri() . '/assets/images/single/good.svg'; ?>" />
                <img src="<?php echo get_template_directory_uri() . '/assets/images/single/good_clear.svg'; ?>" />
            </button>
        </form>
    </div>
    <div class="userReview__done hide">
        <h3>Dziękujemy Ci za Twoją opinię!</h3>
        <div class="icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/single/review_done.svg'; ?>" />
        </div>
    </div>
</div>