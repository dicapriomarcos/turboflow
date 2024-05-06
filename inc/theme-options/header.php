<?php


function tf__customize_register_header_options( $wp_customize ) {
    $wp_customize->add_section( 'tf__header_options_section', array(
        'title'       => __( 'Header Options', 'turboflow' ),
        'priority'    => 30,
    ) );

    // Navigator Height Setting
    $wp_customize->add_setting( 'tf__navigator_height', array(
        'default'           => '90',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    // Navigator Height Control
    $wp_customize->add_control( 'tf__navigator_height_control', array(
        'label'    => __( 'Navigator Height (pixels)', 'turboflow' ),
        'section'  => 'tf__header_options_section',
        'settings' => 'tf__navigator_height',
        'type'     => 'range',
        'input_attrs' => array(
            'min'  => 50,
            'max'  => 120,
            'step' => 1,
        ),
        'priority' => 10,
    ) );

    // Show Top Bar Setting
    $wp_customize->add_setting( 'tf__show_top_bar', array(
        'default'           => true,
        'sanitize_callback' => 'tf__sanitize_checkbox',
        'transport'         => 'postMessage',
    ) );

    // Show Top Bar Control
    $wp_customize->add_control( 'tf__show_top_bar_control', array(
        'label'    => __( 'Show Top Bar', 'turboflow' ),
        'section'  => 'tf__header_options_section',
        'settings' => 'tf__show_top_bar',
        'type'     => 'checkbox',
        'priority' => 20,
    ) );

    // Top Bar Height Setting
    $wp_customize->add_setting( 'tf__top_bar_height', array(
        'default'           => '40',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    // Top Bar Height Control
    $wp_customize->add_control( 'tf__top_bar_height_control', array(
        'label'    => __( 'Top Bar Height (pixels)', 'turboflow' ),
        'section'  => 'tf__header_options_section',
        'settings' => 'tf__top_bar_height',
        'type'     => 'range',
        'input_attrs' => array(
            'min'  => 20,
            'max'  => 80,
            'step' => 1,
        ),
        'priority' => 30,
    ) );
}

add_action( 'customize_register', 'tf__customize_register_header_options' );

// Sanitize Checkbox
function tf__sanitize_checkbox( $input ) {
    return (bool) $input;
}


?>

