<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>


<tr>
    <td><?php echo get_field( 'state' ); ?></td>
    <td><?php the_title(); ?></td>
    <td><a href="mailto:<?php echo get_field( 'email_address' ); ?>"><?php echo get_field( 'email_address' ); ?></a>
    </td>
    <td><?php the_content(); ?></td>
</tr>