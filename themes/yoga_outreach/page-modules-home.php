<?php 
/**
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area modules-home-content">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                    <h1 class="header-title">Welcome <span class="header-subtitle">to your online course</span></h1>
                    <div class="button-container">
                    <button class="general-button grey-button"><a href="<?php echo get_post_type_archive_link( 'training_modules' ); ?>" class="button">Go to Modules</a></button>
                    <button class="general-button grey-button"><a>Groups</a></button>
                    <div>
            </header><!-- .entry-header --> 
            <section class="container-one section-15px-padding">
                <div class="decorative-line"></div>
                <div class="custom-info-container bar-text-container">
                    <h2>Yoga Outreach Core Training</h2>
                    <div class ="yellow-bar"></div>
                </div>
                <div class="custom-info-container drop-down-info">
                    <p id="first-description"><?php echo CFS()->get( 'description' ); ?></p>
                </div>
            </section>
            <section class="container-one section-15px-padding">
                <div class="info-dropdown custom-info-container"><h3>Assignments</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'assignments' ); ?></p>
                </div>
            </section>
            <section class="container-one declaration">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/warning.svg" />
                <p><?php echo CFS()->get( 'declaration' ); ?></p>
            </section>
            <section class="container-one section-15px-padding">
                <div class="info-dropdown custom-info-container"><h3>Questions</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'questions' ); ?></p>
                </div>
            </section>
            <section class="section-15px-padding">
                <div class="info-dropdown custom-info-container"><h3>Feedback Messages</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'feedback_messages' ); ?></p>
                </div>
            </section>
            </section>
            <section class="container-one section-15px-padding">
                <div class="info-dropdown custom-info-container"><h3>Materials</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'materials' ); ?></p>
                </div>
                <div class="blue-bar"></div>
            </section> 
            <div class="button-wrap"><button class="general-button grey-button"><a href="<?php echo get_page_link(203); ?>" class="button">Go to Modules</a></button></div>          

<?php get_footer(); ?>
