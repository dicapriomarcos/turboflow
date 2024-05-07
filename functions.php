<?php

require_once get_template_directory() . '/inc/helpers.php';

/* Theme options */
require_once get_template_directory() . '/inc/theme-options.php';

/* Customizer */
require_once get_template_directory() . '/inc/customizer.php';

/* Menus */
require_once get_template_directory() . '/inc/custom-menus.php';



function tf__enqueue_scripts() {

    wp_enqueue_style('tf-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0'.time(), 'all');

    wp_enqueue_script('tf-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0'.time(), true);
}
add_action('wp_enqueue_scripts', 'tf__enqueue_scripts');

function tf__colors_head() {

    $primary_color = get_theme_mod( 'tf__body_color' );
    $navigation_color = get_theme_mod( 'tf__navigation_color' );
    $top_header = get_theme_mod( 'tf__top_header_color' );
    $text_color = get_theme_mod( 'tf__text_color' );
    $footer_color = get_theme_mod( 'tf__footer_color' );

    $navigator_height = get_theme_mod( 'tf__navigator_height', 90);

    if( is_customize_preview() ) {
        $show_top_bar = get_theme_mod( 'tf__show_top_bar') === true ? 'block' : 'none';
    }

    $body_font = get_theme_mod( 'tf__body_font');
    $heading_font = get_theme_mod( 'tf__headings_font');
    $logo_font = get_theme_mod( 'tf__logo_font');

    $body_font_parts = explode(' - ', $body_font);
    $heading_font_parts = explode(' - ', $heading_font);
    $logo_font_parts = explode(' - ', $logo_font);

    // Eliminar espacios
    $body_font_name = str_replace(' ', ' ', $body_font_parts[0]);
    $heading_font_name = str_replace(' ', ' ', $heading_font_parts[0]);
    $logo_font_name = str_replace(' ', ' ', $logo_font_parts[0]);

    $body_font_weight = $body_font_parts[1];
    $heading_font_weight = $heading_font_parts[1];
    $logo_font_weight = $logo_font_parts[1];

    $body_font_url = generateGoogleFontsUrl($body_font);
    $heading_font_url = generateGoogleFontsUrl($heading_font);
    $logo_font_url = generateGoogleFontsUrl($logo_font);
    
    ?>

    <link rel="stylesheet" href="<?php echo $body_font_url; ?>">
    <link rel="stylesheet" href="<?php echo $heading_font_url; ?>">
    <link rel="stylesheet" href="<?php echo $logo_font_url; ?>">

    <style>
        body {
            background-color: <?php echo $primary_color; ?>;
            color: <?php echo $text_color; ?>;
        }
        #tf__bottom-header {
            background-color: <?php echo $navigation_color; ?>;
            height: <?php echo $navigator_height; ?>px;
        }


        #tf__bottom-header nav ul {
            background-color: <?php echo $navigation_color; ?>;
        }

        #tf__top-header {
            background-color: <?php echo $top_header; ?>;
            display: <?php echo $show_top_bar; ?>;
        }
        #tf__footer {
            background-color: <?php echo $footer_color; ?>;
        }
        @font-face {
            font-family: 'tf__headings_font';
            src: url('<?php echo $heading_font; ?>');
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: '<?php echo $heading_font_name; ?>';
            font-weight: <?php echo $heading_font_weight; ?>;
        }

        body {
            font-family: '<?php echo $body_font_name; ?>';
            font-weight: <?php echo $body_font_weight; ?>;
        }

        h2#tf__text_logo a {
            font-family: '<?php echo $logo_font_name; ?>';
            font-weight: <?php echo $logo_font_weight; ?>;
        }

    </style>
    
    <?php
}

add_action('wp_head', 'tf__colors_head');

function tf__add_custom_body_classes($classes) {
    $classes[] = get_theme_mod('tf__text_size', 'tf__text-regular');
    return $classes;
}
add_filter('body_class', 'tf__add_custom_body_classes');




