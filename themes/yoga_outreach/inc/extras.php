<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Yoga_Outreach_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function yoga_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'yoga_body_classes' );

/**
 * Custom hero image styles method
 *
 * 
 */
function yoga_pagetemplate_styles() {

    $pages = ['support-us', 'volunteer', 'partner-facility', 'about-us', 'facility-training', 'core-training', 'resources-research', 'events', 'training-for-facilities'];

    if(!is_page($page = $pages) && !is_front_page()){
        return;
    }
	$image = CFS()->get( 'hero_image' );

    if(!$image){
        return;
    }
 
    $hero_css = ".custom-hero-image {
        background: url({$image}) no-repeat center top;
        background-size: cover, cover;
        }"; 
    wp_add_inline_style( 'yoga-outreach-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'yoga_pagetemplate_styles' );


/**
 * Custom hero image styles method for forms & blog pages
 *
 * 
 */
function yoga_formstemplate_styles() {

    $pages = ['page-templates/forms-template.php'];

    if(!is_page_template($template = $pages)){
        return;
    }
	$image = CFS()->get( 'hero_image' );

    if(!$image){
        return;
    }

    $hero_css = ".custom-hero-image {
        background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),url({$image}) no-repeat center bottom;
        background-size: cover, cover;
        }"; 
    wp_add_inline_style( 'yoga-outreach-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'yoga_formstemplate_styles' );

/**
 * Custom Training Modules archive title
 *
 */
					
function yoga_modify_modules_archive_title( $title ) {	
    if(is_post_type_archive('training_modules')){
        $title = "Course Modules";
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'yoga_modify_modules_archive_title');


 /**
 * Sort Training Modules by ascending title
 *
 * 
 */
function yoga_change_sort_order($query){
    if(is_post_type_archive()):
        //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
        //Set the order ASC or DESC
        $query->set( 'order', 'ASC' );
        //Set the orderby
        $query->set( 'orderby', 'title' );
    endif;    
};
add_action( 'pre_get_posts', 'yoga_change_sort_order');