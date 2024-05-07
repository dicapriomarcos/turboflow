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
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        </button>';
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'tf__add_menu_arrow', 10, 4);