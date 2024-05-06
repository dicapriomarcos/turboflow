<?php
function tf__typography_customize_register( $wp_customize ) {
    // Register a new section for typography
    $wp_customize->add_section( 'tf__custom_typography_section', array(
        'title'       => __( 'Custom Typography', 'turboflow' ),
        'description' => __( 'Customize your theme typography here.', 'turboflow' ),
        'priority'    => 30,
    ) );

    // Array of typography options
    $typographies = array(
        'Roboto' => array(100, 125, 200, 300, 400, 500, 600, 700, 800, 900),
        'Open Sans' => array(100, 200, 300, 400, 500, 600, 700, 800, 900),
        'Lato' => array(100, 300, 400, 700, 900),
        'Montserrat' => array(100, 200, 300, 400, 500, 600, 700, 800, 900),
        'Poppins' => array(100, 200, 300, 400, 500, 600, 700, 800, 900),
        'Oswald' => array(300, 400, 500, 600, 700),
        'Source Sans Pro' => array(100, 200, 300, 400, 500, 600, 700, 900),
        'Slabo 27px' => array('Regular'),
        'Raleway' => array(100, 200, 300, 400, 500, 600, 700, 800)
    );

    // Sizes options
    $sizes = array(
        'tf__text-small' => __( 'Small', 'turboflow' ),
        'tf__text-regular' => __( 'Regular', 'turboflow' ),
        'tf__text-big' => __( 'Big', 'turboflow' )
    );

    // Format typography options for control
    $choices = array();
    foreach ($typographies as $font => $widths) {
        foreach ($widths as $width) {
            $choices[$font . ' - ' . $width] = $font . ' ' . $width;
        }
    }

    // Add control for body font
    $wp_customize->add_setting( 'tf__body_font', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'tf__body_font', array(
        'label'    => __( 'Body Font', 'turboflow' ),
        'section'  => 'tf__custom_typography_section',
        'settings' => 'tf__body_font',
        'type'     => 'select',
        'choices'  => $choices
    ) );

    // Add control for headings font
    $wp_customize->add_setting( 'tf__headings_font', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'tf__headings_font', array(
        'label'    => __( 'Headings Font', 'turboflow' ),
        'section'  => 'tf__custom_typography_section',
        'settings' => 'tf__headings_font',
        'type'     => 'select',
        'choices'  => $choices
    ) );

    // Add control for logo font
    $wp_customize->add_setting( 'tf__logo_font', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'tf__logo_font', array(
        'label'    => __( 'Logo Font', 'turboflow' ),
        'section'  => 'tf__custom_typography_section',
        'settings' => 'tf__logo_font',
        'type'     => 'select',
        'choices'  => $choices
    ) );

    // Add control for text size
    $wp_customize->add_setting( 'tf__text_size', array(
        'default'           => 'tf__text-regular',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'tf__text_size', array(
        'label'    => __( 'Text Size', 'turboflow' ),
        'section'  => 'tf__custom_typography_section',
        'settings' => 'tf__text_size',
        'type'     => 'select',
        'choices'  => $sizes
    ) );
}

add_action( 'customize_register', 'tf__typography_customize_register' );