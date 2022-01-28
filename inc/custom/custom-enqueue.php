<?php

//
// Laad scripts voor child thema
//
function child_scripts() {
    
    wp_enqueue_style( 'css-reef-theme-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_template_directory() . '/assets/css/main.css' ) );
    wp_enqueue_style( 'css-reef-theme-child', get_stylesheet_directory_uri() . '/assets/css/child.css', array('css-reef-theme-main'), filemtime( get_stylesheet_directory() . '/assets/css/child.css' ) );

    wp_enqueue_script( 'js-reef-theme-child', get_stylesheet_directory_uri() . '/assets/js/child.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/assets/js/child.js' ), true );
    
}
add_action( 'wp_enqueue_scripts', 'child_scripts');


// Add action van de child moet een lagere prioriteit hebben dan die van de parent.
function reef_child_editor_styles() {
    add_editor_style('assets/css/child.css');
    // add_editor_style( 'https://fonts.googleapis.com/css?family=Roboto:wght@300;400;700&display=swap' );
}
add_action( 'after_setup_theme', 'reef_child_editor_styles', 99);