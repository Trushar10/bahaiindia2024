<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/*
Template Name: The Well-Being of Children

*/

get_header(); 

?>

<main>
    <div class="page-container">
        <div class="page-hero">
            <img src="<?php the_post_thumbnail_url('banner'); ?>" alt="" class="mb-4 img-fluid" />
            <h1><?php the_title(); ?></h1>
        </div>
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>