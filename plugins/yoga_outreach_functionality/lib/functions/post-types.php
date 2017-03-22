<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Testimonial Post Type
function testimonial_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonial', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonial Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonial Post Type', 'text_domain' ),
		'archives'              => __( 'Testimonial Item Archives', 'text_domain' ),
		'attributes'            => __( 'Testimonial Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Testimonial Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New Testimonial', 'text_domain' ),
		'new_item'              => __( 'New Testimonial', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'           => __( 'Update Testimonial', 'text_domain' ),
		'view_item'             => __( 'View Testimonial', 'text_domain' ),
		'view_items'            => __( 'View Testimonial', 'text_domain' ),
		'search_items'          => __( 'Search Testimonial', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Testimonial Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'comments', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Testimonial', $args );

}
add_action( 'init', 'testimonial_post_type', 0 );


// Training Modules Post Type
function modules() {

	$labels = array(
		'name'                  => 'Training Modules',
		'singular_name'         => 'Training Module',
		'menu_name'             => 'Training Modules',
		'name_admin_bar'        => 'Training Module',
		'archives'              => 'Training Module Archives',
		'attributes'            => 'Training Module Attributes',
		'parent_item_colon'     => 'Parent Training Module:',
		'all_items'             => 'All Training Modules',
		'add_new_item'          => 'Add New Training Module',
		'add_new'               => 'Add New',
		'new_item'              => 'New Training Module',
		'edit_item'             => 'Edit Training Module',
		'update_item'           => 'Update Training Module',
		'view_item'             => 'View Training Module',
		'view_items'            => 'View Training Modules',
		'search_items'          => 'Search Training Module',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Training Module',
		'uploaded_to_this_item' => 'Uploaded to this Training Module',
		'items_list'            => 'Training Modules list',
		'items_list_navigation' => 'Training Modules list navigation',
		'filter_items_list'     => 'Filter Training Modules list',
	);
	$args = array(
		'label'                 => 'Training Module',
		'description'           => 'Training Modules',
		'labels'                => $labels,
		'supports'              => array( 'title', 'comments', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'training_modules', $args );

}
add_action( 'init', 'modules', 0 );