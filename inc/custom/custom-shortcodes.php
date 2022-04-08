<?php
//
// Child Theme
// Custom | Shortcodes
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
// Plaats hier je custom shortcodes. Shortcodes zijn niets meer dan een stuk code die we in de editor in een shortcode tag te zetten.
// Het onderstaande voorbeeld is bijvoorbeeld een hortcode om paginas te laten zien die een sibling zijn van de getoonde pagina.
//
// https://kinsta.com/nl/blog/wordpress-shortcodes/
// https://wpshout.com/how-to-create-wordpress-shortcodes/
// https://codex.wordpress.org/Shortcode_API
//

add_post_type_support( 'page', 'excerpt' );
function pages($show){
  $id = get_the_ID();
  if(!empty($show) && $show["show"]  == "siblings"){
    $parent = wp_get_post_parent_id( $id);
  }else{
    $parent = $id;
  }
    
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
  if($loop->have_posts() && $show["slider"]  == "true"){
    $o .= '<div class="child-pages slideable">';
  } else{
    $o .= '<div class="child-pages">';
  }  
  while ( $loop->have_posts() ) :
    $loop->the_post(); 
    $post = get_post();
  
    if (! $post->post_excerpt) {
      $striptext = wp_strip_all_tags(strip_shortcodes($post->post_content));
      $text = substr($striptext, 0 , 200 ) . '...';
    } else {
      $text = $post->post_excerpt;
    }
  
    // $text = '<h4>'.get_field('functie').'</h4><ul class="team">';
    //   foreach(get_field('team') as $teamlid) $text .= '<li>'.$teamlid.'</li>';
    // $text .= '</ul>';
  
    $o .= '<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top is-image-fill child-page">';
    $o .= '<a href="'. get_permalink() .'" target="_self"><figure class="wp-block-media-text__media" style="background-image:url('.get_the_post_thumbnail_url($post->ID).');background-position:50% 50%;"></figure></a>';
    $o .= '<div class="wp-block-media-text__content"><a href="'. get_permalink() .'"><h4>'.$post->post_title.'</h4></a>';
    $o .= '<p>'.$text.'</p>';
    $o .= '<div class="wp-block-buttons is-content-justification-right"><div class="wp-block-button"><a href="'. get_permalink() .'"class="wp-block-button__link" target="_self">Meer informatie</a></div></div>';
    $o .= '</div></div>';
  endwhile;
    $o .= '</div>';
    
  wp_reset_postdata();
  

return $o;

}
add_shortcode('page_list','pages');

?>