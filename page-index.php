<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

/*
Template Name: Index
*/

get_header();

?>

<?php 

if( have_posts() ){
	while( have_posts() ){
		the_post();
		
		get_template_part('template-parts/content-page-index');
	}
}

?>

<?php get_footer(); ?>