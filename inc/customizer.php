<?php
// =========================================================================
// REGISTER CUSTOMIZER - PANEL, SECTION, SETTINGS AND CONTROL
// =========================================================================
function bahaiindia_register_theme_customizer( $wp_customize ) {
    // Create custom panel.
    $wp_customize->add_panel( 'footer_blocks', array(
        'priority'       => 10,
        'theme_supports' => '',
        'title'          => __( 'Footer Blocks', 'bahaiindia' ),
        'description'    => __( 'Set editable text for certain content.', 'bahaiindia' ),
    ) );
   
    // Add section.
    $wp_customize->add_section( 'footer_section' , array(
        'title'    => __('Footer Section','bahaiindia'),
        'panel'    => 'footer_blocks',
        'priority' => 10
    ) );
   
    // Add setting
    $wp_customize->add_setting( 'footer_heading_1', array(
         'default'           => __( 'Religion Renewed', 'bahaiindia' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
   
     // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer_1',
            array(
                'label'    => __( 'Heading 1', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'footer_heading_1',
                'type'     => 'text'
            )
        )
    );

    // Add setting
    $wp_customize->add_setting( 'footer_heading_2', array(
            'default'           => __( 'Community Building', 'bahaiindia' ),
            'sanitize_callback' => 'sanitize_text'
    ) );
    
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer_2',
            array(
                'label'    => __( 'Heading 2', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'footer_heading_2',
                'type'     => 'text'
            )
        )
    );

    // Add setting
    $wp_customize->add_setting( 'footer_heading_3', array(
        'default'           => __( 'Announcement', 'bahaiindia' ),
        'sanitize_callback' => 'sanitize_text'
    ) );

    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer_3',
            array(
                'label'    => __( 'Heading 3', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'footer_heading_3',
                'type'     => 'text'
            )
        )
    );

    // Add setting
    $wp_customize->add_setting( 'footer_heading_4', array(
        'default'           => __( 'Contact Us', 'bahaiindia' ),
        'sanitize_callback' => 'sanitize_text'
    ) );

    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer_4',
            array(
                'label'    => __( 'Heading 4', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'footer_heading_4',
                'type'     => 'text'
            )
        )
    );
  
    // Add setting
    $wp_customize->add_setting( 'footer_address_1', array(
        'default'           => __( '6 – Shrimant Madhavrao Scindia Marg,', 'bahaiindia' ),
        'sanitize_callback' => 'sanitize_text'
    ) );

    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer-5',
            array(
                'label'    => __( 'Address 1', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'footer_address_1',
                'type'     => 'text'
            )
        )
    );
    
    // Add setting
    $wp_customize->add_setting( 'footer_address_2', array(
        'default'           => __( 'New Delhi -110001', 'bahaiindia' ),
        'sanitize_callback' => 'sanitize_text'
    ) );

    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer-6',
            array(
                'label'    => __( 'Address 2', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'footer_address_2',
                'type'     => 'text'
            )
        )
    );

      // Add setting
      $wp_customize->add_setting( 'footer_address_3', array(
        'default'           => __( '+91-11-23387004', 'bahaiindia' ),
        'sanitize_callback' => 'sanitize_text'
    ) );

    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer-7',
            array(
                'label'    => __( 'Address 3', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'footer_address_3',
                'type'     => 'text'
            )
        )
    );

    // Add setting
    $wp_customize->add_setting( 'contact-link', array(
        'default'           => __( 'Mail to us', 'bahaiindia' ),
        'sanitize_callback' => 'sanitize_text'
    ) );

    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'footer-8',
            array(
                'label'    => __( 'Contact-Us', 'bahaiindia' ),
                'section'  => 'footer_section',
                'settings' => 'contact-link',
                'type'     => 'text'
            )
        )
    );

    // Sanitize text
    function sanitize_text( $text ) {
        return sanitize_text_field( $text );
    }
}
add_action( 'customize_register', 'bahaiindia_register_theme_customizer' );