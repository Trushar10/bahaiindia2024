<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

function boi_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = BOI_DEV_MODE ? time() : false;

    wp_register_style('boi_style', $uri . '/dist/css/global.min.css', [], $ver);

    wp_register_style('boi_swiper', $uri . '/dist/css/swiper-bundle.min.css', [], $ver);

    wp_enqueue_style('boi_style');

    wp_enqueue_style('boi_swiper');

    wp_register_script('boi_scripts', $uri . '/js/app.js', [], $ver, true);

    wp_register_script('boi_swiper_scripts', $uri . '/js/swiper-bundle.min.js', [], $ver, false);

    wp_enqueue_script('boi_swiper_scripts');

    wp_enqueue_script('boi_scripts');

    wp_enqueue_script("jquery");
}

function search_only_page($query)
{

    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post', 'page'));
    }

    return $query;
}

function new_excerpt_more($more)
{
    return '...';
}

//Disable emojis in WordPress
function boi_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

//Disable Dashicons 
function wpdocs_dequeue_dashicon()
{
    if (current_user_can('update_core')) {
        return;
    }
    wp_deregister_style('dashicons');
}

//Disable Embeds
function disable_embed()
{
    wp_dequeue_script('wp-embed');
}