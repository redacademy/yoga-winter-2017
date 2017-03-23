<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * Custom hero image styles method
 *
 * 
 */
function pagetemplate_styles() {

    $pages = ['page-templates/support.php', 'page-templates/volunteer.php', 'page-templates/partner.php', 'page-templates/about-us.php', 'page-templates/training.php', 'page-templates/core-training.php', 'page-templates/resources-research.php', 'front-page.php', 'page-templates/archive-events.php', 'page-templates/about-us.php'];

    if(!is_page_template($template = $pages) && !is_front_page()){
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
    wp_add_inline_style( 'red-starter-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'pagetemplate_styles' );


/**
 * Custom hero image styles method for forms & blog pages
 *
 * 
 */
function formstemplate_styles() {

    $pages = ['page-templates/forms-template.php'];

    if(!is_page_template($template = $pages)){
        return;
    }
	$image = CFS()->get( 'hero_image' );

    if(!$image){
        return;
    }

    $hero_css = ".custom-hero-image {
        background: url({$image}) no-repeat center 70%;
        background-size: cover, cover;
        }"; 
    wp_add_inline_style( 'red-starter-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'formstemplate_styles' );


 /**
 * Sort Archive by ascending title
 *
 * 
 */
function change_sort_order($query){
    if(is_post_type_archive()):
        //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
        //Set the order ASC or DESC
        $query->set( 'order', 'ASC' );
        //Set the orderby
        $query->set( 'orderby', 'title' );
    endif;    
};
add_action( 'pre_get_posts', 'change_sort_order');