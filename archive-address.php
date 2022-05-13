<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/*
Template Name: Local Spiritual Assembly Address

*/

get_header(); 

?>

<main>
    <div class="page-container">
        <?php the_content(); ?>
        <div class="lsa-address">
            <div class="address-filter">
                <select name="state" id="state">
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
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
            <table id="address">
                <thead>
                    <tr>
                        <th>State</th>
                        <th>Local Spiritual Assembly</th>
                        <th>Email Address</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <?php

                    $args = array(
                        'post_type'         => 'address',
                        'posts_per_page'    => 100
                    );
                    $the_query = new WP_Query( $args );

                    // The Loop
                    if ( $the_query->have_posts() ) {
                        
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            get_template_part('template-parts/posts/content-address');
                        }
                        
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();

                    ?>
            </table>
        </div>
    </div>
</main>

<?php get_footer(); ?>