<?php

if (!defined('ABSPATH')) {
  exit; // For security
}

// Setup
define('BOI_DEV_MODE', true);

// Includes
include(get_theme_file_path('/inc/front/enqueue.php'));
include(get_theme_file_path('/inc/setup.php'));
include(get_theme_file_path('/inc/customizer.php'));

// Hooks
add_action('wp_enqueue_scripts', 'boi_enqueue');
add_action('after_setup_theme', 'boi_setup_theme');
add_action('after_setup_theme', 'boi_custom_logo_setup');
add_filter('pre_get_posts', 'search_only_page');
// add_filter('the_excerpt', 'highlight_results');
add_filter('excerpt_more', 'new_excerpt_more'); //replace [...] with ...
add_action('init', 'boi_disable_emojis'); //disable emoji
add_action('wp_enqueue_scripts', 'wpdocs_dequeue_dashicon'); // disable dashicons
add_action('wp_footer', 'disable_embed'); //disable embeds
add_action('customize_register', 'customizer_register_settings'); //Customizer Settings
add_action('customize_register', 'mytheme_customize_register');
add_action('customize_register', 'boi_customize_register');
add_action('wp_enqueue_scripts', 'add_google_fonts');
add_action('customize_register', 'google_customize_register');

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}

add_theme_support('post-thumbnails');
add_theme_support('title_tag');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wlwmanifest_link');

// Shortcodes
// Add an action to handle the Ajax request
add_action('wp_ajax_get_post_data', 'get_post_data');
add_action('wp_ajax_nopriv_get_post_data', 'get_post_data');

function get_post_data()
{
  $post_id = $_POST['post_id'];

  // Get the post data by ID
  $post = get_post($post_id);

  if ($post) {
    $response = array(
      'title' => $post->post_title,
      'excerpt' => get_the_excerpt($post_id),
      'content' => apply_filters('the_content', $post->post_content),
    );

    echo json_encode($response);
  }

  wp_die();
}