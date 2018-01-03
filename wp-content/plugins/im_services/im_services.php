<?php
/*
Plugin Name: IM Services
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom taxonomy displaying Interactive Mechanics' Services.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/


//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_services_nonhierarchical_taxonomy', 0 );
 
function create_services_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Services', 'taxonomy general name' ),
    'singular_name' => _x( 'Service', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Services' ),
    'popular_items' => __( 'Popular Services' ),
    'all_items' => __( 'All Services' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Service' ), 
    'update_item' => __( 'Update Service' ),
    'add_new_item' => __( 'Add New Service' ),
    'new_item_name' => __( 'New Service Name' ),
    'separate_items_with_commas' => __( 'Separate services with commas' ),
    'add_or_remove_items' => __( 'Add or remove services' ),
    'choose_from_most_used' => __( 'Choose from the most used services' ),
    'menu_name' => __( 'Services' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('services','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'service' ),
  ));
}



?>
