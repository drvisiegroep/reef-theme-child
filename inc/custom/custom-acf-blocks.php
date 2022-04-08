<?php
//
// Child theme
// Custom | ACF Blocks 
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
// Voorbeeld functie voor een custom ACF blok
//
// add_action('acf/init', 'je_functienaam');
// function je_functienaam() {
    
//     // Check function exists.
//     if( function_exists('acf_register_block_type') ) {
        
//         // Register a CUSTOMNAME block.
//         acf_register_block_type(array(
//             'name'              => 'CUSTOMNAME',
//             'title'             => __('CUSTOMNAME'),
//             'description'       => __('A custom before-after CUSTOMNAME block.'),
//             'render_template'   => 'inc/custom/custom-acf-blocks/CUSTOMNAME/CUSTOMNAME.php',
//             'category'          => 'formatting',
//             'mode'              => 'auto',
//             'enqueue_style'     => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/CUSTOMNAME/css/CUSTOMNAME.css',
//             'enqueue_script'    => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/CUSTOMNAME/js/CUSTOMNAME.js',
//             'supports'	    	=> [
//                 'align'		    	=> false,
//                 'anchor'	    	    => true,
//                 'customClassName'	=> true,
//                 'jsx' 		    	=> true,
//             ]
//         ));
//     }
// }






