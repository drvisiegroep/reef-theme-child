<?php
//
// Functions | Child theme
//


//
// Globale site settings
//
function site_settings(){
    global $logo_text;
    $logo_text = false;
}

//
// Includes custom settings
//

include( get_stylesheet_directory() . '/inc/custom/custom-editor-options.php');
include( get_stylesheet_directory() . '/inc/custom/custom-theme-support.php');
include( get_stylesheet_directory() . '/inc/custom/custom-widgets.php');


//
// Laad scripts voor child thema
//
function child_scripts() {
    
    wp_enqueue_style( 'css-reef-theme-child', get_stylesheet_directory_uri() . '/assets/css/child.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/child.css' ) );
    wp_enqueue_script( 'js-reef-theme-child', get_stylesheet_directory_uri() . '/assets/js/child.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/assets/js/child.js' ), true );

}
add_action( 'wp_enqueue_scripts', 'child_scripts', 99);









