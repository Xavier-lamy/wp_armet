<?php

function armet_register_post_types() {
   
    $labels = array(
        'name' => 'Game Tips',
        'all_items' => 'All Game Tips',
        'singular_name' => 'Game Tip',
        'add_new_item' => 'Add new',
        'edit_item' => 'Modify the tip',
        'menu_name' => 'Game Tips'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
        'taxonomies' => array('category', 'post_tag'),
    );

    register_post_type( 'tips', $args );
}
add_action( 'init', 'armet_register_post_types' );