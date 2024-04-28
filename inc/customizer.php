<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

// Add a Customizer panel for theme settings
function customizer_register_settings($wp_customize)
{
    $wp_customize->add_panel('theme_settings', array(
        'title' => __('Theme Settings', 'boi'),
    ));

    // Add a section for HTML Language Code
    $wp_customize->add_section('html_language_section', array(
        'title' => __('HTML Language Code', 'boi'),
        'panel' => 'theme_settings',
    ));

    // Add a setting for HTML Language Code
    $wp_customize->add_setting('html_language_code', array(
        'default' => 'eng',
        'type'    => 'theme_mod',
        'sanitize_callback' => 'sanitize_html_language_code',
    ));

    // Add a control for the HTML Language Code setting
    $wp_customize->add_control('html_language_code_control', array(
        'label'    => __('Language Code for HTML', 'boi'),
        'section'  => 'html_language_section',
        'settings' => 'html_language_code',
        'type'     => 'text',
    ));
}

// Sanitize the HTML Language Code
function sanitize_html_language_code($value)
{
    // Ensure the value is a valid language code (you can add additional validation if needed)
    $value = sanitize_text_field($value);

    return $value;
}

function mytheme_customize_register($wp_customize)
{
    // Add the panel
    $wp_customize->add_panel('swiper_panel', array(
        'title' => __('Swiper Panel', 'mytheme'),
        'priority' => 160, // Panel position
    ));

    // Add the section for the images
    $wp_customize->add_section('swiper_images', array(
        'title' => __('Swiper Images', 'mytheme'),
        'panel' => 'swiper_panel', // Parent panel ID
    ));

    // Add the settings and controls for each image
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting('swiper_image_' . $i, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'swiper_image_' . $i, array(
            'label' => sprintf(__('Swiper Image %s', 'mytheme'), $i),
            'section' => 'swiper_images',
            'settings' => 'swiper_image_' . $i,
        )));
    }
}

function boi_customize_register($wp_customize)
{

    // Add Content Panel
    $wp_customize->add_panel('content', array(
        'priority'       => 100,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Content', 'boi'),
        'description'    => __('Content settings', 'boi'),
    ));

    // Add Section 5 to Content Panel
    $wp_customize->add_section('boi_section_5', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Section 5', 'boi'),
        'panel'          => 'content',
    ));

    // Add Heading Control
    $wp_customize->add_setting('boi_heading', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('boi_heading', array(
        'label'    => __('Heading', 'boi'),
        'section'  => 'boi_section_5',
        'settings' => 'boi_heading',
        'type'     => 'text',
    ));

    // Add Description Control
    $wp_customize->add_setting('boi_description', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('boi_description', array(
        'label'    => __('Description', 'boi'),
        'section'  => 'boi_section_5',
        'settings' => 'boi_description',
        'type'     => 'text',
    ));


    // Add Quote Section to Content Panel
    $wp_customize->add_section('quote_section', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Quote', 'boi'),
        'panel'          => 'content',
    ));

    // Add Quote Setting
    $wp_customize->add_setting('quote_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Quote Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'quote_control',
        array(
            'label'      => __('Quote', 'boi'),
            'section'    => 'quote_section',
            'settings'   => 'quote_setting',
            'type'       => 'text'
        )
    ));

    // Add Author Setting
    $wp_customize->add_setting('author_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Author Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'author_control',
        array(
            'label'      => __('Author', 'boi'),
            'section'    => 'quote_section',
            'settings'   => 'author_setting',
            'type'       => 'text'
        )
    ));

    // Add Banner Section to Content Panel
    $wp_customize->add_section('banner_1_section', array(
        'priority'       => 20,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Banner 1', 'boi'),
        'panel'          => 'content',
    ));

    // Add Quote Control
    $wp_customize->add_setting('quote_1_setting', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('quote_1_control', array(
        'label'    => __('Quote', 'boi'),
        'section'  => 'banner_1_section',
        'settings' => 'quote_1_setting',
        'type'     => 'text',
    ));

    // Add Author Control
    $wp_customize->add_setting('author_1_setting', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('author_1_control', array(
        'label'    => __('Author', 'boi'),
        'section'  => 'banner_1_section',
        'settings' => 'author_1_setting',
        'type'     => 'text',
    ));


    // Add Banner Section to Content Panel
    $wp_customize->add_section('banner_section', array(
        'priority'       => 20,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Banner', 'boi'),
        'panel'          => 'content',
    ));

    // Add Line One Setting
    $wp_customize->add_setting('line_one_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Line One Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'line_one_control',
        array(
            'label'      => __('Line One', 'boi'),
            'section'    => 'banner_section',
            'settings'   => 'line_one_setting',
            'type'       => 'text'
        )
    ));

    // Add Line Two Setting
    $wp_customize->add_setting('line_two_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Line Two Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'line_two_control',
        array(
            'label'      => __('Line Two', 'boi'),
            'section'    => 'banner_section',
            'settings'   => 'line_two_setting',
            'type'       => 'text'
        )
    ));

    // Add Line Three Setting
    $wp_customize->add_setting('line_three_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Line Three Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'line_three_control',
        array(
            'label'      => __('Line Three', 'boi'),
            'section'    => 'banner_section',
            'settings'   => 'line_three_setting',
            'type'       => 'text'
        )
    ));

    // Add Three-Link Setting
    $wp_customize->add_setting('three_link_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add Three-Link Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'three_link_control',
        array(
            'label'      => __('Three-Link', 'boi'),
            'section'    => 'banner_section',
            'settings'   => 'three_link_setting',
            'type'       => 'url'
        )
    ));

    // Add B2 Line 1 to 6 Controls
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting("b2_line_$i", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("b2_line_$i", array(
            'label'    => __("B2 Line $i", 'boi'),
            'section'  => 'banner_section',
            'type'     => 'text',
        ));
    }

    // Add New Section to Content Panel
    $wp_customize->add_section('page_content', array(
        'priority'       => 30,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Page Content', 'boi'),
        'panel'          => 'content',
    ));

    // Add Paragraph 1 Setting
    $wp_customize->add_setting('paragraph_1_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Paragraph 1 Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'paragraph_1_control',
        array(
            'label'      => __('Paragraph 1', 'boi'),
            'section'    => 'page_content',
            'settings'   => 'paragraph_1_setting',
            'type'       => 'textarea'
        )
    ));

    // Add Paragraph 2 Setting
    $wp_customize->add_setting('paragraph_2_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Paragraph 2 Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'paragraph_2_control',
        array(
            'label'      => __('Paragraph 2', 'boi'),
            'section'    => 'page_content',
            'settings'   => 'paragraph_2_setting',
            'type'       => 'textarea'
        )
    ));

    // Add Paragraph 3 Setting
    $wp_customize->add_setting('paragraph_3_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Paragraph 3 Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'paragraph_3_control',
        array(
            'label'      => __('Paragraph 3', 'boi'),
            'section'    => 'page_content',
            'settings'   => 'paragraph_3_setting',
            'type'       => 'textarea'
        )
    ));

    // Add Paragraph 4 Setting
    $wp_customize->add_setting('paragraph_4_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Paragraph 4 Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'paragraph_4_control',
        array(
            'label'      => __('Paragraph 4', 'boi'),
            'section'    => 'page_content',
            'settings'   => 'paragraph_4_setting',
            'type'       => 'textarea'
        )
    ));

    // Add Explore Section to Content Panel
    $wp_customize->add_section('explore_section', array(
        'priority'       => 30,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Explore', 'boi'),
        'panel'          => 'content',
    ));

    // Add Heading 1 Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'heading_1_control',
        array(
            'label'      => __('Heading 1', 'boi'),
            'section'    => 'explore_section',
            'settings'   => 'heading_1_setting',
            'type'       => 'text'
        )
    ));

    // Add Link 1 Setting
    $wp_customize->add_setting('link_1_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add Link 1 Control
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'link_1_control',
        array(
            'label'      => __('Link 1', 'boi'),
            'section'    => 'explore_section',
            'settings'   => 'link_1_setting',
            'type'       => 'text'
        )
    ));

    // Add Image 1 Setting
    $wp_customize->add_setting('image_1_setting', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add Image 1 Control
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'image_1_control',
        array(
            'label'      => __('Image 1', 'boi'),
            'section'    => 'explore_section',
            'settings'   => 'image_1_setting',
        )
    ));

    for ($i = 1; $i <= 8; $i++) {
        // Add Heading Setting
        $wp_customize->add_setting('heading_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Heading Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'heading_' . $i . '_control',
            array(
                'label'      => __('Heading ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'heading_' . $i . '_setting',
                'type'       => 'text'
            )
        ));

        // Add Link Setting
        $wp_customize->add_setting('link_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Link Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'link_' . $i . '_control',
            array(
                'label'      => __('Link ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'link_' . $i . '_setting',
                'type'       => 'text'
            )
        ));

        // Add Image Setting
        $wp_customize->add_setting('image_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Add Image Control
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'image_' . $i . '_control',
            array(
                'label'      => __('Image ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'image_' . $i . '_setting',
            )
        ));
    }

    for ($i = 1; $i <= 3; $i++) {

        // Add Title Setting
        $wp_customize->add_setting('title_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Title Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'title_' . $i . '_control',
            array(
                'label'      => __('Title ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'title_' . $i . '_setting',
                'type'       => 'text'
            )
        ));

        // Add Excerpt Setting
        $wp_customize->add_setting('excerpt_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Excerpt Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'excerpt_' . $i . '_control',
            array(
                'label'      => __('Excerpt ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'excerpt_' . $i . '_setting',
                'type'       => 'textarea'
            )
        ));

        // Add Read More Setting
        $wp_customize->add_setting('read_more_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Read More Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'read_more_' . $i . '_control',
            array(
                'label'      => __('Read More ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'read_more_' . $i . '_setting',
                'type'       => 'text'
            )
        ));

        // Add Read More Setting
        $wp_customize->add_setting('read_more_link_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Read More Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'read_more_link_' . $i . '_control',
            array(
                'label'      => __('Read More Link ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'read_more_link_' . $i . '_setting',
                'type'       => 'text'
            )
        ));
    }

    for ($i = 1; $i <= 2; $i++) {
        // Add Heading Setting
        $wp_customize->add_setting('heading_temple_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Heading Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'heading_temple_' . $i . '_control',
            array(
                'label'      => __('Heading ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'heading_temple_' . $i . '_setting',
                'type'       => 'text'
            )
        ));

        // Add Link Setting
        $wp_customize->add_setting('link_temple_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Add Link Control
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'link_temple_' . $i . '_control',
            array(
                'label'      => __('Link ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'link_temple_' . $i . '_setting',
                'type'       => 'text'
            )
        ));

        // Add Image Setting
        $wp_customize->add_setting('image_temple_' . $i . '_setting', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
        ));

        // Add Image Control
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'image_temple_' . $i . '_control',
            array(
                'label'      => __('Image ' . $i, 'boi'),
                'section'    => 'explore_section',
                'settings'   => 'image_temple_' . $i . '_setting',
            )
        ));
    }
}

//Google Fonts
function add_google_fonts()
{
    $response = wp_remote_get('https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyCdLL-AX64iEtsCjB35rjgSqqeIa5dMLAk');
    if (is_array($response)) {
        $body = json_decode($response['body']); // use the content
        foreach ($body->items as $font) {
            wp_enqueue_style('google-font-' . str_replace(' ', '-', strtolower($font->family)), 'https://fonts.googleapis.com/css?family=' . str_replace(' ', '+', $font->family), false);
        }
    }
}

function google_customize_register($wp_customize)
{
    $response = wp_remote_get('https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyCdLL-AX64iEtsCjB35rjgSqqeIa5dMLAk');
    if (is_array($response)) {
        $body = json_decode($response['body']); // use the content
        $choices = array();
        foreach ($body->items as $font) {
            $choices[$font->family] = $font->family;
        }

        $wp_customize->add_setting('google_font_setting', array(
            'default'   => '"Lora",serif',
            'transport' => 'refresh',
        ));

        $wp_customize->add_section('boi_new_section_name', array(
            'title'      => __('Google Fonts', 'boi'),
            'priority'   => 30,
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'boi_new_section_name', array(
            'label'      => __('Google Font', 'boi'),
            'section'    => 'boi_new_section_name',
            'settings'   => 'google_font_setting',
            'type'       => 'select',
            'choices'    => $choices,
        )));
    }
}
