<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<header id="tf__header">
    <div id="tf__top-header">
        <div class="tf__container">
           <p>top bar example</p> 
        </div>  
    </div>
    <div id="tf__bottom-header">
        <div class="tf__container">
            <?php if (has_custom_logo()) : ?>
                <div id="tf__logo" class="tf__logo tf__custom-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else : ?>
                <h2 id="tf__text_logo">
                    <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                </h2>
            <?php endif; ?>
                <div id="tf__desktop-nav-wrapper">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'tf_menu_primary',
                            'container'      => 'nav',
                            'container_id'   => 'tf__navigation',
                        ) );
                    ?>
                    <button id="tf__menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px"><path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"/></svg>
                    </button>
                </div>
          
        </div>  
    </div>
</header>

 