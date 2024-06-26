<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

?>
<main>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-overlay-1"></div>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'h-45', 'title' => 'Feature image']); ?>
                <div class="box-container">
                    <div class="page-title">
                        <h2><?php wp_title(''); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gradient-1 py-4">
        <div class="design-1"></div>
        <div class="box-container">
            <div class="quote">
                <h2>
                    <?php the_field('quote'); ?>
                    <br /><br />- <?php the_field('author'); ?>
                </h2>
            </div>
        </div>
        <div class="design-2"></div>
    </div>
    <div class="box-container py-4 index-content page-content">
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-up-svg.svg" alt="" class="divider" />
        </figure>
        <div class="spacer-2"></div>
        <?php the_content(); ?>
        <div class="spacer-2"></div>
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-down-svg.svg" alt="" class="divider" />
        </figure>
    </div>
</main>