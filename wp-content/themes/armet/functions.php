<?php

// Add styles and scripts from functions-config.php
require_once(get_template_directory() . '/inc/functions-config.php');

// Add additionnal features from functions-features.php
require_once(get_template_directory() . '/inc/functions-features.php');

// Add thumbnail handling
add_theme_support('post-thumbnails');

// Add menus location
register_nav_menus(
    array(
        'main' => 'Main menu',
        'footer' => 'Footer menu',
    )
);