<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

get_header(); 

?>

<main>
    <div class="wrapper d-none">
        <div class="content-container">
            <div class="page-title">
                <h2 class="section-heading">
                    <?php _e( 'Search Results for: ', 'bahaiindia' ); ?><?php the_search_query(); ?>
                </h2>
            </div>
            <?php 
				if( have_posts() ){
					while( have_posts() ){
						the_post();						
						get_template_part('/template-parts/posts/content-search');
					}
				}
			?>
        </div>
    </div>
</main>

<?php get_footer(); ?>