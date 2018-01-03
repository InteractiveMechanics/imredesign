<?php
/*
Plugin Name: Webinars
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom post type displaying webinars.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/



function create_webinar() {
    register_post_type( 'webinars',
        array(
            'labels' => array(
                'name' => 'Webinars',
                'singular_name' => 'Webinar',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Webinar',
                'edit' => 'Edit',
                'edit_item' => 'Edit Webinar',
                'new_item' => 'New Webinar',
                'view' => 'View',
                'view_item' => 'View Webinar',
                'search_items' => 'Search Webinars',
                'not_found' => 'No Webinars found',
                'not_found_in_trash' => 'No Webinars found in Trash',
                'parent' => 'Parent Webinar'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
}

add_action( 'init', 'create_webinar' );



?>
