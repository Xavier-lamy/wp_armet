<?php

function armet_enqueue_scripts() {
    // Load style.css
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), 1.0 );

    // Load JS
    wp_enqueue_script( 'script', get_template_directory_uri() . 'assets/js/script.js', array(), 1.0, true );

    // Load CSS
    wp_enqueue_style( 'main', get_template_directory_uri() . 'assets/css/main.css', array(), 1.0 );
}
add_action('wp_enqueue_script', 'armet_enqueue_scripts');
