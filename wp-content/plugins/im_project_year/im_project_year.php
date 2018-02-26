<?php
/*
Plugin Name: IM Project Year
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom taxonomy displaying Interactive Mechanics' Project Years.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/


//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_projectyear_nonhierarchical_taxonomy', 0 );
 
function create_projectyear_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Project Year', 'taxonomy general name' ),
    'singular_name' => _x( 'Project Year', 'taxonomy singular name' ),
    'search_items' =>  __( 'Project Years' ),
    'popular_items' => __( 'Project Years' ),
    'all_items' => __( 'All Project Years' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Year' ), 
    'update_item' => __( 'Update Year' ),
    'add_new_item' => __( 'Add New Year' ),
    'new_item_name' => __( 'New Project Year' ),
    'separate_items_with_commas' => __( 'Separate project years with commas' ),
    'add_or_remove_items' => __( 'Add or remove years' ),
    'choose_from_most_used' => __( 'Choose from the most used project years' ),
    'menu_name' => __( 'Years' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('projectyear','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'projectyear' )
  ));
}



?>
