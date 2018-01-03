<?php
/*
Plugin Name: Case Studies
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom post type displaying case studies.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/

add_action( 'init', 'create_case_study' );

function create_case_study() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => 'Case Studies',
                'singular_name' => 'Case Study',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Case Study',
                'edit' => 'Edit',
                'edit_item' => 'Edit Case Study',
                'new_item' => 'New Case Study',
                'view' => 'View',
                'view_item' => 'View Case Study',
                'search_items' => 'Search Case Studies',
                'not_found' => 'No Case Studies found',
                'not_found_in_trash' => 'No Case Studies found in Trash',
                'parent' => 'Parent Case Study'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'services', 'technologies' ),
            'has_archive' => true
        )
    );
}

function include_template_function( $template_path ) {
    if ( get_post_type() == 'case_studies' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-case-study.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-case-study.php';
            }
        }
    }
    return $template_path;
}


?>
