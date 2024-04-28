<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

get_header();

?>

<main>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($image_url = get_theme_mod('swiper_image_' . $i)) : ?>
            <div class="swiper-slide">
                <div class="swiper-overlay"></div>
                <img src="<?php echo $image_url; ?>" class="h-60" />
            </div>
            <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
    <div class="gradient-1 py-5">
        <div class="front-design"></div>
        <div class="box-container">
            <div class="quote">
                <h2>
                    <?php echo get_theme_mod('quote_setting', ''); ?><br /><br />–
                    <?php echo get_theme_mod('author_setting', ''); ?>
                </h2>
            </div>
            <div class="spacer-5"></div>
            <div class="featured-stories">
                <div class="story-cards">
                    <?php
                    // Query to get 3 posts per page
                    query_posts('posts_per_page=3');

                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            get_template_part('template-parts/posts/content-stories');
                        }
                    }

                    // Reset Query
                    wp_reset_query();
                    ?>

                </div>
                <div class="light-box">
                    <div class="box-wrapper">
                        <div class="box">
                            <span class="close-btn">&times</span>
                            <h2></h2>
                            <!-- <p class="box-excerpt"></p> -->
                            <img src="" alt="" class="light-img" />
                            <p class="box-content"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quote-highlight">
        <div class="box-container">
            <div class="quote-card">
                <div>
                    <h2>
                        <?php echo get_theme_mod('quote_1_setting', ''); ?><br /><br /><?php echo get_theme_mod('author_1_setting', ''); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="box-container py-4 index-content">
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-up-svg.svg" alt="" class="divider">
        </figure>
        <div class="spacer-2"></div>
        <p>
            <?php echo get_theme_mod('paragraph_1_setting', ''); ?>
        </p>
        <p>
            <?php echo get_theme_mod('paragraph_2_setting', ''); ?>
        </p>
        <p>
            <?php echo get_theme_mod('paragraph_3_setting', ''); ?>
        </p>
        <p>
            <?php echo get_theme_mod('paragraph_4_setting', ''); ?>
        </p>
        <div class="spacer-2"></div>
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-down-svg.svg" alt="" class="divider">
        </figure>
    </div>
    <div class="temple-highlight">
        <div class="box-container">
            <div class="temple-title">
                <div>
                    <h2><?php echo get_theme_mod('line_one_setting', ''); ?><br />
                        <?php echo get_theme_mod('line_two_setting', ''); ?>
                    </h2>
                    <a
                        href="<?php echo get_theme_mod('line_three-link_setting', ''); ?>"><?php echo get_theme_mod('line_three_setting', ''); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer-5"></div>
    <div class="box-container explore">
        <h2 class="f-32"><?php echo get_theme_mod('boi_heading', ''); ?></h2>
        <p>
            <?php echo get_theme_mod('boi_description', ''); ?>
        </p>
        <div class="spacer-2"></div>
        <div class="cl-3 flex-reverse-coloumn">
            <div class="topic">
                <!-- <div class="overlay"></div> -->
                <figure>
                    <a href="<?php echo get_theme_mod('link_1_setting', ''); ?>"><img
                            src="<?php echo get_theme_mod('image_1_setting', ''); ?>" alt="" /></a>
                </figure>
                <h2><?php echo get_theme_mod('heading_1_setting', ''); ?></h2>
            </div>
            <div class="topic">
                <!-- <div class="overlay"></div> -->
                <figure>
                    <a href="<?php echo get_theme_mod('link_2_setting', ''); ?>"><img
                            src="<?php echo get_theme_mod('image_2_setting', ''); ?>" alt="" /></a>
                </figure>
                <h2><?php echo get_theme_mod('heading_2_setting', ''); ?></h2>
            </div>
            <div class="excerpt">
                <div class="design-3"></div>
                <h2><?php echo get_theme_mod('title_1_setting', ''); ?></h2>
                <p>
                    <?php echo get_theme_mod('excerpt_1_setting', ''); ?>
                </p>
                <a
                    href="<?php echo get_theme_mod('read_more_link_1_setting', ''); ?>"><?php echo get_theme_mod('read_more_1_setting', ''); ?></a>
            </div>
        </div>
    </div>
    <div class="spacer-2"></div>
    <div class="box-container">
        <div class="d-flex">
            <div class="excerpt w-30">
                <div class="design-3"></div>
                <h2><?php echo get_theme_mod('title_2_setting', ''); ?></h2>
                <p>
                    <?php echo get_theme_mod('excerpt_2_setting', ''); ?>
                </p>
                <a
                    href="<?php echo get_theme_mod('read_more_link_2_setting', ''); ?>"><?php echo get_theme_mod('read_more_2_setting', ''); ?></a>
            </div>
            <div class="cl-grid-3 w-70">
                <div class="topic">
                    <!-- <div class="overlay"></div> -->
                    <figure>
                        <a href="<?php echo get_theme_mod('link_3_setting', ''); ?>"><img
                                src="<?php echo get_theme_mod('image_3_setting', ''); ?>" alt="" /></a>
                    </figure>
                    <h2><?php echo get_theme_mod('heading_3_setting', ''); ?></h2>
                </div>
                <div class="topic">
                    <!-- <div class="overlay"></div> -->
                    <figure>
                        <a href="<?php echo get_theme_mod('link_4_setting', ''); ?>"><img
                                src="<?php echo get_theme_mod('image_4_setting', ''); ?>" alt="" /></a>
                    </figure>
                    <h2><?php echo get_theme_mod('heading_4_setting', ''); ?></h2>
                </div>
                <div class="topic">
                    <!-- <div class="overlay"></div> -->
                    <figure>
                        <a href="<?php echo get_theme_mod('link_5_setting', ''); ?>"><img
                                src="<?php echo get_theme_mod('image_5_setting', ''); ?>" alt="" /></a>
                    </figure>
                    <h2><?php echo get_theme_mod('heading_5_setting', ''); ?></h2>
                </div>
                <div class="topic">
                    <!-- <div class="overlay"></div> -->
                    <figure>
                        <a href="<?php echo get_theme_mod('link_6_setting', ''); ?>"><img
                                src="<?php echo get_theme_mod('image_6_setting', ''); ?>" alt="" /></a>
                    </figure>
                    <h2><?php echo get_theme_mod('heading_6_setting', ''); ?></h2>
                </div>
                <div class="topic">
                    <!-- <div class="overlay"></div> -->
                    <figure>
                        <a href="<?php echo get_theme_mod('link_7_setting', ''); ?>"><img
                                src="<?php echo get_theme_mod('image_7_setting', ''); ?>" alt="" /></a>
                    </figure>
                    <h2><?php echo get_theme_mod('heading_7_setting', ''); ?></h2>
                </div>
                <div class="topic">
                    <!-- <div class="overlay"></div> -->
                    <figure>
                        <a href="<?php echo get_theme_mod('link_8_setting', ''); ?>"><img
                                src="<?php echo get_theme_mod('image_8_setting', ''); ?>" alt="" /></a>
                    </figure>
                    <h2><?php echo get_theme_mod('heading_8_setting', ''); ?></h2>
                </div>
            </div>
        </div>
        <div class="spacer-2"></div>
        <div class="india-temple-sites cl-3">
            <div class="topic">
                <!-- <div class="overlay"></div> -->
                <figure>
                    <a href="<?php echo get_theme_mod('link_temple_1_setting', ''); ?>"><img
                            src="<?php echo get_theme_mod('image_temple_1_setting', ''); ?>" alt="" /></a>
                </figure>
                <h2><?php echo get_theme_mod('heading_temple_1_setting', ''); ?></h2>
            </div>
            <div class="topic">
                <!-- <div class="overlay"></div> -->
                <figure>
                    <a href="<?php echo get_theme_mod('link_temple_2_setting', ''); ?>"><img
                            src="<?php echo get_theme_mod('image_temple_2_setting', ''); ?>" alt="" /></a>
                </figure>
                <h2><?php echo get_theme_mod('heading_temple_2_setting', ''); ?></h2>
            </div>
            <div class="excerpt">
                <div class="design-3"></div>
                <h2><?php echo get_theme_mod('title_3_setting', ''); ?></h2>
                <p>
                    <?php echo get_theme_mod('excerpt_3_setting', ''); ?>
                </p>
                <a
                    href="<?php echo get_theme_mod('read_more_link_3_setting', ''); ?>"><?php echo get_theme_mod('read_more_3_setting', ''); ?></a>
            </div>
        </div>
    </div>
    <div class="spacer-5"></div>
    <div class="bihar-temple-highlight">
        <div class="box-container">
            <div class="bihar-temple-title">
                <div>
                    <h2><span class="cf"><?php echo get_theme_mod('b2_line_1', ''); ?><br>
                            <?php echo get_theme_mod('b2_line_2', ''); ?></span>
                        <?php echo get_theme_mod('b2_line_3', ''); ?><br>
                        <?php echo get_theme_mod('b2_line_4', ''); ?> </h2>
                    <a
                        href="<?php echo get_theme_mod('b2_line_6', ''); ?>"><?php echo get_theme_mod('b2_line_5', ''); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="box-container py-4">
        <div class="other-sites">
            <div class="other-card">
                <img src="https://www.bahai.in/wp-content/uploads/2024/04/Frame-28.png" alt="" />
                <h2>Bahá'í Office of Public Affairs</h2>
                <a href="https://opa.bahai.in/">Visit »</a>
            </div>
            <div class="other-card">
                <img src="https://www.bahai.in/wp-content/uploads/2024/04/Frame-12.png" alt="" />
                <h2>Bahá'í Reference Library</h2><a href="https://library.bahai.in/">Visit »</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>