<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="logo"><?php bloginfo('name'); ?></div>
        
        <nav class="menu">
            <?php
                if (has_nav_menu('menu_header')) {
                    wp_nav_menu(array(
                        'theme_location' => 'menu_header',
                        'menu_class' => 'custom-menu-class',
                    ));
                } else {
                    echo "Il n'y a pas de menu personnalisé.";
                }
            ?>
        </nav>
    </header>
