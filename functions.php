<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

// Setup
define( 'BAHAI_INDIA_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
include( get_theme_file_path( '/inc/customizer.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'bahai_india_enqueue');
add_action( 'after_setup_theme', 'bahai_india_setup_theme' );
add_action( 'after_setup_theme', 'bahai_india_custom_logo_setup' ); 
add_filter('pre_get_posts','search_only_page');
add_filter('the_excerpt', 'highlight_results');
add_filter('excerpt_more', 'new_excerpt_more'); //replace [...] with ...
add_action( 'init', 'bahai_india_disable_emojis' ); //disable emoji
add_action( 'wp_default_scripts', 'remove_jquery_migrate' ); // disble jquery migrate
add_action('init', 'disable_jquery'); // disble jquery
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' ); // disable dashicons
add_action( 'wp_footer', 'disable_embed' ); //disable embeds

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title_tag' );

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wlwmanifest_link' ) ;

// Shortcodes