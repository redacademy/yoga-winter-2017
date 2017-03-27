<?php 
/*
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area training-content">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image">
				<div class="color-background"></div>
					<?php
                	while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
					<h1 class="page-title-header"><?php the_title(); ?></h1>
                    <div class="entry-content-page">
                    	<?php the_content(); ?> <!-- Page Content -->
						<div class ="general-button-container">
							<a href="core-training" class="general-button grey-button">Core Training</a>
							<a href="training-for-facilities" class="general-button grey-button">For Facilities</a>
						</div>
                    </div><!--entry-content-page-->
                    <?php
                	endwhile; //resetting the page loop
                	wp_reset_query(); //resetting the page query
                	?>
			</header><!--general-template-section-->
			<div class="max-width-1024">
				<section class="main-h3-container section-15px-padding">
					<h3>Trauma Informed Approach</h3>
					<p>Creating a safe and healing environment with a no-touch, 
						no-assist approach that inspires and empowers participants to reconnect 
						with their body.</p>
					<p class="training-find-out-para">Find out more on our <a href ="#">resource page.</a></p>
				</section><!--main-h3-container-->
				<section class="for-training-section section-15px-padding">
					<h3>For Yoga Instructors</h3>
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_yoga.png" alt="training for yoga">
						<div class="training-color-bar"></div>
						<h3>Yoga outreach core training</h3>
					</div><!--training-image-bar-container-->
					<h3>For Training Facilities</h3>
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_work.svg" alt="training for work">
						<div class="training-color-bar grey-bar"></div>
						<h3>Using yoga in your work</h3>
					</div><!--training-image-bar-container-2-->
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_work.svg" alt="training for youth">
						<div class="training-color-bar grey-bar"></div>
						<h3>Yoga tools for youth</h3>
					</div><!--training-image-bar-container-3-->
				<section><!--for-training-section-->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
