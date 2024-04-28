<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

?>

<div>
    <figure>
        <div class="overlay"></div>
        <?php the_post_thumbnail(); ?>
    </figure>
    <div class="card-content">
        <h2><?php the_title(); ?></h2>
        <!-- <?php the_excerpt(); ?> -->
    </div>
    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    <span class="close-btn view-btn" data-post-id="<?php the_ID(); ?>" data-src="<?php echo esc_url($featured_img_url); ?>">+</span>
</div>