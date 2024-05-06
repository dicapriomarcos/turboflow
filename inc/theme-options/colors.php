
<?php

/* COLORS */

function tf__colors_customize_register( $wp_customize ) {
    // Register a new section for colors
    $wp_customize->add_section( 'tf__custom_colors_section', array(
        'title'       => __( 'Custom Colors', 'turboflow' ),
        'description' => __( 'Customize your theme colors here.', 'turboflow' ),
        'priority'    => 30,
    ) );

    // Color control for the body background color
    $wp_customize->add_setting( 'tf__body_color', array(
        'default'           => '#f7f7f7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tf__body_color_control', array(
        'label'    => __( 'Body Background', 'turboflow' ),
        'section'  => 'tf__custom_colors_section',
        'settings' => 'tf__body_color',
    ) ) );

    // Color control for the text
    $wp_customize->add_setting( 'tf__text_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tf__text_color_control', array(
        'label'    => __( 'General text', 'turboflow' ),
        'section'  => 'tf__custom_colors_section',
        'settings' => 'tf__text_color',
    ) ) );

    // Color control for the primary navigation
    $wp_customize->add_setting( 'tf__navigation_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tf__navigation_color_control', array(
        'label'    => __( 'Navigation', 'turboflow' ),
        'section'  => 'tf__custom_colors_section',
        'settings' => 'tf__navigation_color',
    ) ) );

    // Color control for the top header
    $wp_customize->add_setting( 'tf__top_header_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tf__top_header_color_control', array(
        'label'    => __( 'Top Header', 'turboflow' ),
        'section'  => 'tf__custom_colors_section',
        'settings' => 'tf__top_header_color',
    ) ) );

    // Color control for the footer
    $wp_customize->add_setting( 'tf__footer_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tf__footer_color_control', array(
        'label'    => __( 'Footer', 'turboflow' ),
        'section'  => 'tf__custom_colors_section',
        'settings' => 'tf__footer_color',
    ) ) );
}
add_action( 'customize_register', 'tf__colors_customize_register' );