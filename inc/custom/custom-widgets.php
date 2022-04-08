<?php
//
// Child Theme
// Custom | Widgets
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
// Een plek om je custom widgets te registreren. Handig voor bijvoorbeeld een sidebar, een footer of een plaats om scials in te zetten.
// https://wordpress.org/support/article/wordpress-widgets/ - heeft nog een wat verouderde weergave. De widgets gebruiken tegenwoordig ook de gutenberg block editor.
// https://developer.wordpress.org/block-editor/how-to-guides/widgets/overview/
//

function reef_register_widgets() {

    // register_sidebar( array(
    //     'name'              => esc_html__('primary-sidebar', 'reef-theme'),
    //     'id'                => 'primary-sidebar',
    //     'before_widget'     => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget'      => '</div>',
    //     )
    // );
    register_sidebar( array(
        'name'              => esc_html__('footer-1', 'reef-theme'),
        'id'                => 'footer-1',
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        )
    );
    register_sidebar( array(
        'name'              => esc_html__('socials', 'reef-theme'),
        'id'                => 'footer-2',
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        )
    );

}