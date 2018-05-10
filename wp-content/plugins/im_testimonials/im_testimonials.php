<?php
/*
Plugin Name: IM Testimonials
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will create a custom post type displaying im testimonials.
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/

add_action( 'init', 'create_im_testimonials' );

function create_im_testimonials() {
    register_post_type( 'im_testimonials',
        array(
            'labels' => array(
                'name' => 'Testimonials',
                'singular_name' => 'Testimonial',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Testimonial',
                'edit' => 'Edit',
                'edit_item' => 'Edit Testimonial',
                'new_item' => 'New Testimonial',
                'view' => 'View',
                'view_item' => 'View Testimonial',
                'search_items' => 'Search Testimonial',
                'not_found' => 'No Testimonials found',
                'not_found_in_trash' => 'No Testimonial found in Trash',
                'parent' => 'Parent Testimonial'
            ),
 
            'public' => true,
            'rewrite' => array( 'slug' => 'im_testimonial' ),
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
}



?>
