<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<li>
    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
</li>