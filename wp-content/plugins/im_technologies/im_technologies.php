<?php
/*
Plugin Name: IM Technologies
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom taxonomy displaying Interactive Mechanics' Technologies.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/


//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_technologies_nonhierarchical_taxonomy', 0 );
 
function create_technologies_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Technologies', 'taxonomy general name' ),
    'singular_name' => _x( 'Technologies', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Technologies' ),
    'popular_items' => __( 'Popular Technologies' ),
    'all_items' => __( 'All Technologies' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Technology' ), 
    'update_item' => __( 'Update Technology' ),
    'add_new_item' => __( 'Add New Technology' ),
    'new_item_name' => __( 'New Technology Name' ),
    'separate_items_with_commas' => __( 'Separate technologies with commas' ),
    'add_or_remove_items' => __( 'Add or remove technologies' ),
    'choose_from_most_used' => __( 'Choose from the most used technologies' ),
    'menu_name' => __( 'Technologies' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('technologies','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'technology' ),
  ));
}



?>
