<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title> Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
    <?php wp_head(); ?>
</head>

<body>
<header class="bg-black">
    <div class="flex justify-between items-center p-4 text-white">
        <div class="logo ml-16">
            <img src="<?php echo get_field('logo_image'); ?>" alt="Logo">
        </div>
        <nav class="menu mr-16">       
    <?php
    if (has_nav_menu('menu_header')) {
        wp_nav_menu(array(
            'theme_location' => 'menu_header',
            'menu_class' => 'flex space-x-4 text-white',
            'link_before' => '<span class="text-white">',
            'link_after' => '</span>',
        ));
    } else {
        echo "Il n'y a pas de menu personnalisé.";
    }
    ?>
</nav>

    </div>
</header>






