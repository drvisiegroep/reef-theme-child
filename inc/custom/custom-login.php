<?php
// Child
//
// Login logo / styles
//
function reef_login_logo() { 
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/wa_logo.svg);
            width:320px;
            height:65px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
    <?php 
    wp_enqueue_style( 'reef-login', get_stylesheet_directory_uri() . '/assets/css/child_login.css' );
}
add_action( 'login_enqueue_scripts', 'reef_login_logo' );

//
// Language picker
//
add_filter( 'login_display_language_dropdown', '__return_false' );