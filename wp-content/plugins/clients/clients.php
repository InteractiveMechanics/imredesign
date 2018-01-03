<?php
/*
Plugin Name: Clients
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom post type displaying clients.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/

add_action( 'init', 'create_client' );

function create_client() {
    register_post_type( 'clients',
        array(
            'labels' => array(
                'name' => 'Clients',
                'singular_name' => 'Client',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Client',
                'edit' => 'Edit',
                'edit_item' => 'Edit Client',
                'new_item' => 'New Client',
                'view' => 'View',
                'view_item' => 'View Client',
                'search_items' => 'Search Client',
                'not_found' => 'No Client found',
                'not_found_in_trash' => 'No Client found in Trash',
                'parent' => 'Parent Client'
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
