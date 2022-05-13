<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

function bahai_india_enqueue(){
	$uri = get_theme_file_uri();
	$ver = BAHAI_INDIA_DEV_MODE ? time() : false;
	
	wp_enqueue_style('bahai_india_style', $uri . '/dist/css/global.min.css', [], $ver);

    wp_enqueue_style('bahai_india_swiper', $uri . '/dist/css/swiper-bundle.min.css', [], $ver);

    wp_enqueue_style( 'bahai_india_style' );

    wp_enqueue_style( 'bahai_india_swiper' );

	wp_register_script( 'bahai_india_scripts', $uri . '/js/app.js', [], $ver, true );

    wp_register_script( 'bahai_india_swiper_scripts', $uri . '/js/swiper-bundle.min.js', [], $ver, false );

	wp_enqueue_script( 'bahai_india_scripts' );

    wp_enqueue_script( 'bahai_india_swiper_scripts' );

}

function search_only_page($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post', 'page'));
    }

    return $query;
}

function highlight_results($text) {
    if (is_search() && !is_admin()) {
        $sr = get_query_var('s');
        $keys = explode(' ', $sr);
        $keys = array_filter($keys);
        $text = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}

function new_excerpt_more( $more ) {
    return '...';
}

//Disable emojis in WordPress
function bahai_india_disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}

function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

//Disable jQuery Migrate
function remove_jquery_migrate( $scripts ) {
	
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
			
		$script = $scripts->registered['jquery'];
		
		if ( $script->deps ) { 
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
}

//Completely Remove jQuery From WordPress
function disable_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}

//Disable Dashicons 
function wpdocs_dequeue_dashicon() {
    if (current_user_can( 'update_core' )) {
        return;
    }
    wp_deregister_style('dashicons');
}

//Disable Embeds
function disable_embed(){
    wp_dequeue_script( 'wp-embed' );
}