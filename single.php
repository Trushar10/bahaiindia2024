<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

get_header(); 

?>

<main>
    <div class="wrapper">
        <div class="content-container">
            <div class="page-hero">
                <img src="<?php the_post_thumbnail_url('banner'); ?>" alt="" class="mb-4 img-fluid" />
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>