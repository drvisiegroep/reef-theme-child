<?php
//
// Child Theme
// Login logo / styles
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//

// Wordpress gebruikt een aparte styling voor de loginpagina. Hier kan je het logo aanpassen
// en de css enqueuen. in wordpress 5.9 -is een languagepicker toegevoegd aan het login menu, die kan je hier aanzetten.
function reef_login_logo() { 
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo.svg);
            width:320px;
            height:65px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
    <?php 
    wp_enqueue_style( 'reef-login-child', get_stylesheet_directory_uri() . '/assets/css/child_login.css' );
}
add_action( 'login_enqueue_scripts', 'reef_login_logo' );

//
// Language picker
//
add_filter( 'login_display_language_dropdown', '__return_false' );