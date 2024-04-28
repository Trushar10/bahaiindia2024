<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

function boi_setup_theme()
{
    register_nav_menu('primary-menu', __('Primary', 'boi'));
    register_nav_menu('footer-menu', __('Footer', 'boi'));
    register_nav_menu('lang-menu', __('Language', 'boi'));
}

function boi_custom_logo_setup()
{
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
