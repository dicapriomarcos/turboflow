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
<header class="tf__main-header">
    <?php if( isActiveTopBar() ): ?>
    <div class="top-bar">
        <?php ?>
        <div class="tf__container">
           <p>top bar example</p> 
        </div>  
    </div>
    <?php endif; ?>
    <div class="header">
        <div class="tf__container">
            <?php if (has_custom_logo()) : ?>
                <div class="custom-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php else : ?>
                <h2 class="text-logo">
                    <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                </h2>
            <?php endif; ?>
                <nav class="tf__main-navigator">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'tf__menu_primary',
                        ) );
                    ?>
                    <button class="menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                            <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z 
                            M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z 
                            M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"
                            />
                        </svg>
                    </button>
                </nav>
        </div>  
    </div>
</header>
