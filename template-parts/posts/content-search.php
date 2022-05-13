<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<div class="search-card">
    <h2>
        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
    </h2>
    <?php the_excerpt(); ?>
    <h4><a href="<?php echo esc_url( get_permalink() ); ?>">Read More »</a></h4>
</div>