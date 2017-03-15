<?php /* Template Name: Core ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class = "general-template-section">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
				<div class ="general-button-container">
					<button class = "general-first-button core">Core Training</button>
					<button class = "general-second-button core">For Facilities</button>
				</div>
			</section><!--general-template-section-->
            <section class ="section-15px-padding">
				<div class ="core-h3-container">
                	<p class="core-header">Yoga Outreach Core Training</p>
				</div>
				<button class ="book-training-button">Register Online</button>
				<p class ="small-para">- Yoga Alliance 24 Continuing Education Non-Contact hrs</p>
				<p class ="small-para">- BCRPA Continuing Education Credits</p>
				<p>Created to empower qualified yoga teachers with the skills to 
					build trauma-informed and strengths focused classes in order to reach 
					individuals who may be facing multiple barriers in their lives, such as 
					violence, post-traumatic stress disorder, addictions, mental health challenges, 
					and incarceration.
				</p>
			</section>
			<div class ="testimonal-slideshow-container">
			</div>
			<section class ="section-15px-padding">
			<!--Add Calender-->
			</section>
			<ul class = "training-list">
				<li class="training-list-item">Learning Objectives</li>
				<li class="training-list-item">Work-study Option for up to 50% off tuition</li>
				<li class="training-list-item">Refund Policy</li>
				<li class="training-list-item">Register for Next Class</li>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
