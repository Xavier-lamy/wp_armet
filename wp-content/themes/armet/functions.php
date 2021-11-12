<?php

// Add styles and scripts from functions-config.php
require_once get_template_directory() . '/inc/functions-config.php';

// Add additionnal features from functions-features.php
require_once get_template_directory() . '/inc/functions-features.php';

// Add CPT from functions-post-types.php
require_once get_template_directory() . '/inc/functions-post-types.php';

// Add thumbnail handling
add_theme_support('post-thumbnails');

// Auto add title in site head
add_theme_support('title-tag');

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

add_action( 'pre_get_posts', function ( $q )
{
    if (  !is_admin() // Only target front end queries
          && $q->is_main_query() // Only target the main query
          && ($q->is_category() || $q->is_tag())
    ) {
        $q->set( 'post_type', ['post', 'tips'] );
    }
});