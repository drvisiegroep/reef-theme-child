<?php
//
// Page
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
// Template Name: product-gallery
// Template Post Type: page

$id = get_the_ID();
$parent = wp_get_post_parent_id( $id);

$args = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'depth' => 1,
    'post_parent' => $parent,
    'post__not_in' => [$id],
    'orderby' => 'menu_order', 
    'order' => 'ASC', 
);

$loop = new WP_Query( $args );
var_dump($loop);

require get_template_directory() . '/index.php';


?>