<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

function bahai_india_setup_theme(){
	register_nav_menu('left-menu', __('Left Menu', 'bahaiindia'));
    register_nav_menu('right-menu', __('Right Menu', 'bahaiindia'));
    register_nav_menu('footer-menu-one', __('Footer Menu One', 'bahaiindia'));
    register_nav_menu('footer-menu-two', __('Footer Menu Two', 'bahaiindia'));
}

function bahai_india_custom_logo_setup() {
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'opa-site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}