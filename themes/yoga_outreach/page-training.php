<?php
/**
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area training-content">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image"></header><!--general-template-section-->
			<div>
				<?php
                while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
				<div class="page-main-header">
					<h1><?php the_title(); ?></h1>
                	<?php the_content(); ?> <!-- Page Content -->
					<div class ="button-container">
						<a href="core-training" class="general-button grey-button">For Teachers</a>
						<a href="training-for-facilities" class="general-button grey-button">For Facilities</a>
					</div>
                </div><!--entry-content-page-->
                <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
			</div>
			<div class="max-width-1024">
				<section class="for-training-section section-15px-padding">
					<h3>For Yoga Instructors</h3>
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_yoga.png" alt="training for yoga">
						<div class="training-color-bar"></div>
						<a href="core-training" class="training-secion-titles">Yoga outreach core training™</a>
					</div><!--training-image-bar-container-->
					<h3>For Training Facilities</h3>
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_work.svg" alt="training for work">
						<div class="training-color-bar grey-bar"></div>
						<a href="training-for-facilities" class="training-secion-titles">Using yoga in your work™</a>
					</div><!--training-image-bar-container-2-->
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_work.svg" alt="training for youth">
						<div class="training-color-bar grey-bar"></div>
						<a href="training-for-facilities" class="training-secion-titles">Yoga tools for youth™</a>
					</div><!--training-image-bar-container-3-->
				<section><!--for-training-section-->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
