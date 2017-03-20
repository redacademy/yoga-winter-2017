<?php 
/*Template Name: Training Main Template

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image">
				<h1 class ="page-title-header">
                    <?php the_title(); ?>
                </h1>
				<header class ="general-button-container">
					<button class = "general-button grey-button">Core Training</button>
					<button class = "general-button grey-button">For Facilities</button>
				</div>
			</header><!--general-template-section-->
            <section class ="main-h3-container section-15px-padding">
                <h3>Trauma Informed Approach</h3>
                <p>Creating a safe and healing environment with a no-touch, 
                    no-assist approach that inspires and empowers participants to reconnect 
                    with their body.</p>
				<p class ="training-find-out-para">Find out more on our <a href ="#">resource page.</a>
            </section><!--main-h3-container-->
			<section class ="for-training-section section-15px-padding">
				<h3>For Yoga Instructors</h3>
				<img src ="<?php echo get_template_directory_uri(); ?>/images/training_f_yoga.svg" alt="training for yoga">
				<h3>For Training Facilities</h3>
				<img src ="<?php echo get_template_directory_uri(); ?>/images/training_f_work.svg" alt="training for work">
				<img src ="<?php echo get_template_directory_uri(); ?>/images/training_f_youth.svg" alt="training for youth">

			<section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
