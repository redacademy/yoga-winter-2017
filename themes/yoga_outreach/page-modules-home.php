<?php 
/*
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                    <h1 class="header-title">Welcome to your online course</h1>
                    <button class="main-button grey-button"><a href="<?php echo get_page_link(203); ?>" class="button">Go to Modules</a></button>
            </header><!-- .entry-header --> 
            <section class="container-one">
                <div class="decorative-line"></div>
                <div class="info-dropdown custom-info-container"><h2>Yoga Outreach Core Training</h2><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'description' ); ?></p>
                </div>
            </section>
            <section class="container-one">
                <div class="info-dropdown custom-info-container"><h3>Assignments</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'assignments' ); ?></p>
                </div>
            </section>
            <section class="container-one declaration">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/warning.svg" />
                <p><?php echo CFS()->get( 'declaration' ); ?></p>
            </section>
            <section class="container-one">
                <div class="info-dropdown custom-info-container"><h3>Questions</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'questions' ); ?></p>
                </div>
            </section>
                <div class="info-dropdown custom-info-container"><h3>Feedback Messages</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'feedback_messages' ); ?></p>
                </div>
            </section>
            <section class="container-one">
                <div class="info-dropdown custom-info-container"><h3>Materials</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p><?php echo CFS()->get( 'materials' ); ?></p>
                </div>
            </section> 
            <div class="button-wrap"><button class="main-button grey-button"><a href="<?php echo get_page_link(203); ?>" class="button">Go to Modules</a></button></div>          

<?php get_footer(); ?>
