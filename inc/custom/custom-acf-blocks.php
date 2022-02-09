<?php
//
// Image Slider
//
add_action('acf/init', 'image_slider_block_init');
function image_slider_block_init() {
    
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        
        // Register a image-slider block.
        acf_register_block_type(array(
            'name'              => 'image-slider',
            'title'             => __('image-slider'),
            'description'       => __('A custom before-after image-slider block.'),
            'render_template'   => 'inc/custom/custom-acf-blocks/image-slider/image-slider.php',
            'category'          => 'formatting',
            'mode'              => 'auto',
            'enqueue_style'     => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/image-slider/css/image_slider.css',
            'enqueue_script'    => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/image-slider/js/image_slider.js',
        ));
    }
}

//
// Child page shortcode ACF-i-fied
//
add_action('acf/init', 'child_pages_block_init');
function child_pages_block_init() {
    
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        
        // Register a child-pages block.
        acf_register_block_type(array(
            'name'              => 'child-pages',
            'title'             => __('child-pages'),
            'description'       => __('A custom before-after child-pages block.'),
            'render_template'   => 'inc/custom/custom-acf-blocks/child-pages/child-pages.php',
            'category'          => 'formatting',
            'mode'              => 'auto',
            'enqueue_style'     => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/child-pages/css/child_pages.css',
            'enqueue_script'    => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/child-pages/js/child_pages.js',
            'supports'	    	=> [
                'align'		    	=> false,
                'anchor'	    	=> true,
                'customClassName'	=> true,
                'jsx' 		    	=> true,
            ]
        ));
    }
}

//
// Premade wide text and media block
//
add_action('acf/init', 'custom_wide_tm_block_block_init');
function custom_wide_tm_block_block_init() {
    
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        
        // Register a child-pages block.
        acf_register_block_type(array(
            'name'              => 'custom-wide-tm-block',
            'title'             => __('custom-wide-tm-block'),
            'description'       => __('A custom-wide-tm-block.'),
            'render_template'   => 'inc/custom/custom-acf-blocks/custom-wide-tm-block/custom-wide-tm-block.php',
            'category'          => 'formatting',
            'mode'              => 'auto',
            'enqueue_style'     => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/custom-wide-tm-block/css/custom-wide-tm-block.css',
            'enqueue_script'    => get_stylesheet_directory_uri() . '/inc/custom/custom-acf-blocks/custom-wide-tm-block/js/custom-wide-tm-block.js',
            'supports'	    	=> [
                'align'		    	=> true,
                'anchor'	    	=> true,
                'customClassName'	=> true,
                'jsx' 		    	=> true,
            ]
        ));
    }
}




