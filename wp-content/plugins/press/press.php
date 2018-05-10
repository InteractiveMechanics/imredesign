<?php
/*
Plugin Name: Press
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom post type displaying press.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/

add_action( 'init', 'create_press' );

function create_press() {
    register_post_type( 'press',
        array(
            'labels' => array(
                'name' => 'Press',
                'singular_name' => 'Press',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Press',
                'edit' => 'Edit',
                'edit_item' => 'Edit Press',
                'new_item' => 'New Press',
                'view' => 'View',
                'view_item' => 'View Press',
                'search_items' => 'Search Press',
                'not_found' => 'No Press found',
                'not_found_in_trash' => 'No Press found in Trash',
                'parent' => 'Parent Press'
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
