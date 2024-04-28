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
                <img src="https://www.bahai.in/wp-content/uploads/2023/10/5093668-master.jpg" class="h-45" alt="">
                <div class="box-container">
                    <div class="page-title">
                        <h2><?php _e('Search Results for: ', 'boi'); ?><?php the_search_query(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-container py-4 index-content page-content">
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-up-svg.svg" alt="" class="divider" />
        </figure>
        <div class="spacer-2"></div>
        <div class="search-result">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('/template-parts/posts/content-search');
                }
            } else {
                echo '<h2>No results found</h2>';
            }
            ?>
        </div>
        <div class="spacer-2"></div>
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-down-svg.svg" alt="" class="divider" />
        </figure>
    </div>
</main>

<?php get_footer(); ?>