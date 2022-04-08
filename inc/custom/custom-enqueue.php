<?php
//
// Child Theme
// Custom | Enqueue
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//


//
// Hier laad je je css en javascript. Ook kunnen hier google font apicdn's worden toegevoegd.
// Lokale fonts kunnen in de 'assets\fonts' map en die kan je dan in de css met 
// @font-face en een src: url() met het pad naar de map aanroepen.
// 
// https://developer.wordpress.org/reference/functions/add_action/
// Prioriteiten met een lager nummer laden eerder dan die mete een hoger nummer. 
// Daarom staat de editor style van de child op 99 want die willen we later laden om de main te overschrijven. 
//

//
// Laad scripts voor child thema
//
function child_scripts() {
    
    // CSS
    wp_enqueue_style( 'css-reef-theme-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_template_directory() . '/assets/css/main.css' ) );
    wp_enqueue_style( 'css-reef-theme-child', get_stylesheet_directory_uri() . '/assets/css/child.css', array('css-reef-theme-main'), filemtime( get_stylesheet_directory() . '/assets/css/child.css' ) );
    // JS
    wp_enqueue_script( 'js-reef-theme-child', get_stylesheet_directory_uri() . '/assets/js/child.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/assets/js/child.js' ), true );
    
}
add_action( 'wp_enqueue_scripts', 'child_scripts');


// Add action van de child moet een lagere prioriteit hebben dan die van de parent.
function reef_child_editor_styles() {
    add_editor_style('assets/css/child.css');
    // add_editor_style( 'https://fonts.googleapis.com/css?family=Roboto:wght@300;400;700&display=swap' );
}
add_action( 'after_setup_theme', 'reef_child_editor_styles', 99);

// Eventuele slick functionaliteit
// De slick files staan al in assets\js\slick
function slick() {
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/js/slick/slick.css', array() );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/js/slick/slick-theme.css', array() );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick/slick.js', array( 'jquery' ), '1.5.3', true );
    wp_enqueue_script( 'slick-init',  get_template_directory_uri() . '/assets/js/slick/slick-init.js', array( 'slick-js' ), '1.0.0', true );
}
// add_action( 'wp_enqueue_scripts', 'slick', 99);