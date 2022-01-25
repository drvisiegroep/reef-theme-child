<?php
function reef_editor_styles () {

    add_editor_style( 'assets/css/child.css' );
    add_editor_style( 'https://fonts.googleapis.com/css?family=Roboto:wght@300;400;700&display=swap' );
}
add_action( 'enqueue_block_editor_assets', 'reef_editor_styles', 99);