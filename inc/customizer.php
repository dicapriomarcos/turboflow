<?php

function tf__enqueue_customizer_preview_script() {
    wp_enqueue_script( 'tf-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery', 'customize-preview' ), '1.0'.time(), true );
}
add_action( 'customize_preview_init', 'tf__enqueue_customizer_preview_script' );
