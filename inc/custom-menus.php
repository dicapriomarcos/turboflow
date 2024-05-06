<?php

/* Menu */

add_action( 'init', 'tf__register_menus' );

function tf__register_menus() {
    register_nav_menus(
        array(
            'tf_menu_primary' => __( 'Primary Menu', 'turboflow' ),
            'tf_menu_mobile' => __( 'Mobile Menu', 'turboflow' ),
            'tf_menu_legal' => __( 'Legal Menu', 'turboflow' ),
            'tf_menu_footer' => __( 'Footer Menu', 'turboflow' ),
        )
    );
}


/* Add arrow to menu items with children */
function tf__add_menu_arrow($item_output, $item, $depth, $args) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $item_output .= '<button class="submenu-toggle" data-id="'.$item->ID.'">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z"/></svg>
        </button>';
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'tf__add_menu_arrow', 10, 4);