<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>
<section>
    <div class="hero">
        <?php the_post_thumbnail(); ?>
        <div class="container">
            <h2 class="page-title"><?php wp_title(''); ?></h2>
        </div>
    </div>
</section>
<main>
    <div class="page-container">
        <?php the_content(); ?>
    </div>
</main>