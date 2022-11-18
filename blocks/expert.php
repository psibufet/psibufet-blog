<?php
/**
 * Block Name: Cytat eksperta
 *
 */

$image = get_field('ekspert_image');
$name = get_field('ekspert_name');
$position = get_field('ekspert_position');
$quote = get_field('ekspert_quote');

?>
<section class="expertQuote">
    <div class="expertQuote__wrap">
        <div class="expertQuote__quote">
            <?php echo $quote; ?>
        </div>
        <div class="expertQuote__info">
            <?php if($image): ?>
            <div class="image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <?php endif; ?>
            <div class="info">
                <p class="name"><?php echo $name; ?></p>
                <p><?php echo $position; ?></p>
            </div>
        </div>
</section>