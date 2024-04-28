<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

/*
Template Name: Local Spiritual Assembly Address

*/

get_header();

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
    <div class="box-container py-4 index-content page-content">
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-up-svg.svg" alt="" class="divider" />
        </figure>
        <div class="spacer-2"></div>
        <?php the_content(); ?>
        <div class="table-filter">
            <label for="stateSelect">Select a state:</label>
            <select id="stateSelect" onchange="filterTable()">
                <option value="default">Select</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
        </div>
        <table id="stateTable">
            <thead>
                <tr>
                    <th>State</th>
                    <th>Local Spiritual Assembly</th>
                    <th>Email Address</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $args = array(
                    'post_type'         => 'address',
                    'posts_per_page'    => 100,
                    'order' => 'ASC'
                );
                $the_query = new WP_Query($args);

                // The Loop
                if ($the_query->have_posts()) {

                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        get_template_part('template-parts/posts/content-address');
                    }
                }
                /* Restore original Post Data */
                wp_reset_postdata();

                ?>
            </tbody>
        </table>
        <div class="spacer-2"></div>
        <figure>
            <img src="https://www.bahai.in/wp-content/uploads/2023/10/divider-down-svg.svg" alt="" class="divider" />
        </figure>
    </div>
</main>

<?php get_footer(); ?>