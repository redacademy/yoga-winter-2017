<?php 
/*
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area training-content">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image">
				<div class="color-background"></div>
				<div class="page-title-container">
					<h1 class="page-title-header"><?php the_title(); ?></h1>
				</div>
				<?php
                while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
                    <div class="entry-content-page">
                    	<?php the_content(); ?> <!-- Page Content -->
                    </div><!--entry-content-page-->
                    <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
				<div class ="general-button-container">
					<button class="general-button grey-button">Core Training</button>
					<button class="general-button grey-button">For Facilities</button>
				</div>
			</header><!--general-template-section-->
			<div class="desktop-margin">
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
					</div>
					<h3>For Training Facilities</h3>
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_work.svg" alt="training for work">
						<div class="training-color-bar grey-bar"></div>
						<h3>Using yoga in your work</h3>
					</div>
					<div class="training-image-bar-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon_work.svg" alt="training for youth">
						<div class="training-color-bar grey-bar"></div>
						<h3>Yoga tools for youth</h3>
					</div>
				<section><!--for-training-section-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
