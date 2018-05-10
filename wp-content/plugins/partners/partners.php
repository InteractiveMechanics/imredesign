<?php
/*
Plugin Name: Partners
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom post type displaying partners.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/

add_action( 'init', 'create_partner' );

function create_partner() {
    register_post_type( 'partners',
        array(
            'labels' => array(
                'name' => 'Partners',
                'singular_name' => 'Partner',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Partner',
                'edit' => 'Edit',
                'edit_item' => 'Edit Partner',
                'new_item' => 'New Partner',
                'view' => 'View',
                'view_item' => 'View Partner',
                'search_items' => 'Search Partners',
                'not_found' => 'No Partner found',
                'not_found_in_trash' => 'No Partner found in Trash',
                'parent' => 'Parent Partner'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
}


?>
