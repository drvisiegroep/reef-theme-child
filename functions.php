<?php
//
// Functions | Child theme
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
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

include( get_stylesheet_directory() . '/inc/custom/custom-acf-blocks.php');
include( get_stylesheet_directory() . '/inc/custom/custom-block-whitelist.php');
include( get_stylesheet_directory() . '/inc/custom/custom-editor-options.php');
include( get_stylesheet_directory() . '/inc/custom/custom-enqueue.php');
include( get_stylesheet_directory() . '/inc/custom/custom-login.php');
include( get_stylesheet_directory() . '/inc/custom/custom-patterns.php');
include( get_stylesheet_directory() . '/inc/custom/custom-post-types.php');
include( get_stylesheet_directory() . '/inc/custom/custom-shortcodes.php');
include( get_stylesheet_directory() . '/inc/custom/custom-theme-support.php');
include( get_stylesheet_directory() . '/inc/custom/custom-widgets.php');
