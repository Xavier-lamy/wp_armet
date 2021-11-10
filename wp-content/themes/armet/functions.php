<?php

// Add styles and scripts from functions-config.php
require_once get_template_directory() . '/inc/functions-config.php';

// Add additionnal features from functions-features.php
require_once get_template_directory() . '/inc/functions-features.php';

// Add thumbnail handling
add_theme_support('post-thumbnails');

// Add menus location
register_nav_menus(
    array(
        'main' => 'Main menu',
        'footer' => 'Footer menu',
    )
);

// Remove flush action
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );