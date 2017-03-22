<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

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

