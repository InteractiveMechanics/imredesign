<?php
/*
Plugin Name: Team Bios
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom post type displaying team bios.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/

add_action( 'init', 'create_team_bio' );

function create_team_bio() {
    register_post_type( 'team_bios',
        array(
            'labels' => array(
                'name' => 'Team Bios',
                'singular_name' => 'Team Bio',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Team Bio',
                'edit' => 'Edit',
                'edit_item' => 'Edit Team Bio',
                'new_item' => 'New Team Bio',
                'view' => 'View',
                'view_item' => 'View Team Bio',
                'search_items' => 'Search Team Bios',
                'not_found' => 'No Team Bios found',
                'not_found_in_trash' => 'No Team Bios found in Trash',
                'parent' => 'Parent Team Bio'
            ),
 
            'public' => true,
            'rewrite' => array( 'slug' => 'team_bios' ),
            'menu_position' => 15,
            'rewrite'     => array( 'slug' => 'team-bios' ), // my custom slug
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
}



?>
