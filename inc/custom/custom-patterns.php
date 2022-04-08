<?php
//
// Child Theme
// Custom | Patterns
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//

//
// Hier registreer je je custom patronen om een pagina op te maken. Je kan heel makkelijk een patroon maken door 
// in de editor de blokken zo te plaatsen zoals je ze wil hebben en vervolgens die code te 
// https://speckyboy.com/create-simple-gutenberg-block-pattern-wordpress/
//
function reef_register_block_pattern_category() {
    register_block_pattern_category(
        'custom',
        [
            'label' => esc_html__( 'Custom Patterns', 'reef-theme' ),
        ]
    );
}
add_action( 'init', 'reef_register_block_pattern_category' );



function reef_register_custom_block_patterns() {

    // include( get_template_directory() . '/inc/custom/custom-patterns/CUSTOMPATTERN.php' );

}
add_action( 'init', 'reef_register_custom_block_patterns' );
