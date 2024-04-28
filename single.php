<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

get_header();

?>

<main>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-overlay"></div>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'h-45', 'title' => 'Feature image']); ?>
                <div class="box-container">
                    <div class="page-title">
                        <h2><?php wp_title(''); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-container py-4 index-content page-content">
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-up.svg" alt="" class="divider" />
        </figure>
        <div class="spacer-2"></div>
        <?php the_content(); ?>
        <div class="spacer-2"></div>
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-down.svg" alt="" class="divider" />
        </figure>
    </div>
</main>

<?php get_footer(); ?>