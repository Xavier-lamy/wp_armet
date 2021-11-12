<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <header class="header">
        <nav class="top-bar">
            <a href="<?php echo home_url('/') ?>" class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo-armet.svg" alt="Logo Armet" width="100" height="50">
            </a>
            <?php wp_nav_menu( 
                array( 
                    'theme_location' => 'main',
                    'container' => 'ul',
                    'menu_class' => 'navbar' 
                ) 
            ); ?>
            <ul class="login">
                <li><a href="#" aria-label="Register"><i class="fas fa-user-plus fa-lg"></i><span class="mobile-hidden">Register</span></a></li>
                <li><a href="#" aria-label="Login"><i class="fas fa-sign-in-alt fa-lg"></i><span class="mobile-hidden">Login</span></a></li>
            </ul>
        </nav>
        <?php if( is_front_page() ): ?>
            <div class="banner">
                <?php
                    $description_parts = armet_split_string_in_half( get_bloginfo('description') );
                    $first_part = $description_parts[0];
                    $second_part = $description_parts[1];
                ?> 
                <h1 class="slogan"><?php echo $first_part . '<br>' . $second_part; ?></h1>
                <div class="searchbar">
                    <?php get_search_form(); ?>                    
                </div>
            </div>
        <?php endif; ?>
    </header>
        
    <?php wp_body_open(); ?>