<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'studies_flush_rewrite_rules' );

// Flush your rewrite rules
function studies_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function create_testimonials() {
	// creating (registering) the custom type
	register_post_type( 'testimonials', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Testimonials', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Testimonial', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Testimonials', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New Testimonial', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Testimonial', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit Testimonial', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Testimonial', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Testimonial', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Testimonial', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Testimonials', 'bonestheme' ), /* Search Custom Type Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Testimonials', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			// 'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'menu_icon' => 'dashicons-format-chat', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'testimonial', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'testimonials', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'revisions', 'thumbnail')
		) /* end of options */
	); /* end of register post type */

}

	add_action( 'init', 'create_testimonials');
?>
