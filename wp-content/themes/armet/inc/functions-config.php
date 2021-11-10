<?php

function armet_enqueue_assets() {
    // Load style.css
    wp_enqueue_style( 'armet_style', get_stylesheet_uri(), array(), 1.0 );
  
    // Load CSS
    wp_enqueue_style( 'armet_main', get_template_directory_uri() . '/assets/css/main.css', array(), 1.0 );

    // Load JS
    wp_enqueue_script( 'armet_script', get_template_directory_uri() . '/assets/js/script.js', array(), 1.0, true );

    // Load Font Awesome library
    wp_enqueue_script( 'fa_kit', 'https://kit.fontawesome.com/0cb3a70ede.js', array(), 1.0, true );
}
add_action('wp_enqueue_scripts', 'armet_enqueue_assets');
