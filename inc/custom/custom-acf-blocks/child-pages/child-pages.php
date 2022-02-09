<?php
$allowed_blocks = array( 'core/heading', 'core/paragraph' );
$template = array(
	array('core/heading', array(
		'level' => 2,
		'content' => 'Title Goes Here',
	)));


    add_post_type_support( 'page', 'excerpt' );

	$id = get_the_ID();
	if(get_field('show_siblings') == TRUE){
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
	if($loop->have_posts() && get_field('show_slider') == TRUE){
		echo '<div class="child-pages slideable">';
	} else{
		echo '<div class="child-pages">';
	}	
	while ( $loop->have_posts() ) :
		$loop->the_post(); 
		$post = get_post();
		if (! $post->post_excerpt) {
			$striptext = wp_strip_all_tags(strip_shortcodes($post->post_content));
			$text = substr($striptext, 0 , 120 ) . '...';
		} else {
			$text = $post->post_excerpt;
		}
		// echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
		echo '<div class="wp-block-media-text has-media-on-the-left team-member">';
		echo '<a href="'. get_permalink() .'" target="_self"><figure class="wp-block-media-text__media">'.get_the_post_thumbnail($post->ID).'</figure></a>';
		echo '<div class="wp-block-media-text__content"><a href="'. get_permalink() .'" target="_self"><h2>'.$post->post_title.'</h2></a>';
		echo '<p>'.$text.'</p>';
		echo '<div class="wp-block-buttons is-content-justification-right"><div class="wp-block-button"><a href="'. get_permalink() .'"class="wp-block-button__link" target="_self"></a></div></div>';
		echo '</div></div>';
	endwhile;
		echo '</div>';
		
	// wp_reset_postdata();
	

