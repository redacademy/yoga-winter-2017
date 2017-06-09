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

    $pages = ['support-us', 'volunteer', 'partner-facility', 'about-us', 'facility-training', 'core-training', 'resources-research', 'events', 'training-for-facilities', 'resources-media', 'modules-home', 'training'];

    if(!is_page($page = $pages) && !is_front_page()){
        return;
    }
	$image = CFS()->get( 'hero_image' );

    if(!$image){
        return;
    }

    $hero_css = ".custom-hero-image {
        background: linear-gradient( to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.2) 100% ),
        url({$image}) no-repeat center top;
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
        background: url({$image}) no-repeat center;
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
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'title' );
    endif;
};
add_action( 'pre_get_posts', 'yoga_change_sort_order');


/**
 * Custom header text color for pages
 *
 *
 */
function yoga_headernav_styles() {

    $templates = ['page-templates/forms-template.php', 'page-templates/application-submission.php', 'page-templates/quiz-template.php'];
    $pages = ['current-opportunities', 'modules-home', 'privacy-policy'];

    if(!is_page_template($template = $templates) && !is_page($page = $pages) && !is_post_type_archive( 'training_modules' ) && !is_home()){
        return;
    }

    $header_css = "#site-navigation .mainmenu-list fieldset button i{
        color: #4a4a4a;
        }
        #site-navigation #primary-menu .menu-item-has-children a {
            color: #4a4a4a;
        }
        #site-navigation #primary-menu .menu-item-type-post_type a{
            color: #4a4a4a;
        }
        .mainmenu-list fieldset .searchAppear::placeholder{
            color: #4a4a4a;
		}";
    wp_add_inline_style( 'yoga-outreach-style', $header_css );
}
add_action( 'wp_enqueue_scripts', 'yoga_headernav_styles' );

/**
 * Custom dynamic fields for select events
 *
 *
 */
function populate_event_titles( $form ) {

    foreach ( $form['fields'] as &$field ) {

        if ( $field->type != 'select' || strpos( $field->cssClass, 'populate-posts' ) === false ) {
            continue;
        }

        $events = CFS()->get( 'new_event', 16 );

        $choices = array();

        foreach ( $events as $event ) {
            $choices[] = array( 'text' => $event['event_title'], 'value' => $event['event_title'] );
        }

        $field->placeholder = 'Select an Event';
        $field->choices = $choices;

    }

    return $form;
}

add_filter( 'gform_pre_render_8', 'populate_event_titles' );
add_filter( 'gform_pre_validation_8', 'populate_event_titles' );
add_filter( 'gform_pre_submission_filter_8', 'populate_event_titles' );
add_filter( 'gform_admin_pre_render_8', 'populate_event_titles' );

/**
 * Custom dynamic fields for select retreats
 *
 *
 */
function populate_retreat_titles( $form ) {

    foreach ( $form['fields'] as &$field ) {

        if ( $field->type != 'select' || strpos( $field->cssClass, 'populate-retreats' ) === false ) {
            continue;
        }

        $retreats = CFS()->get( 'new_retreats', 16 );

        $choices = array();

        foreach ( $retreats as $retreat ) {
            $choices[] = array( 'text' => $retreat['retreat_title'], 'value' => $retreat['retreat_title'] );
        }

        $field->placeholder = 'Select a Retreat';
        $field->choices = $choices;

    }

    return $form;
}

add_filter( 'gform_pre_render_9', 'populate_retreat_titles' );
add_filter( 'gform_pre_validation_9', 'populate_retreat_titles' );
add_filter( 'gform_pre_submission_filter_9', 'populate_retreat_titles' );
add_filter( 'gform_admin_pre_render_9', 'populate_retreat_titles' );

/**
 * Allow php Variables to be localized for use in JS
 *
 *
 */
function image_scripts() {
    wp_enqueue_script(
        'image_script',
        get_template_directory_uri() . '/build/js/yoga-header.min.js',
        array('jquery'),
        null,
        true
    );
    $script_data = array(
        'image_path' => get_template_directory_uri() . '/images'
    );
    wp_localize_script(
        'image_script',
        'image_data',
        $script_data
    );
}
add_action( 'wp_enqueue_scripts', 'image_scripts' );



