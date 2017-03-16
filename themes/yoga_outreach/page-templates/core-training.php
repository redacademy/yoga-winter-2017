<?php 
/* Template Name: Core 
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="core-hero-container">
				<header class = "general-template-section custom-hero-image">
					<h1><?php the_title(); ?></h1>
					<div class ="general-button-container">
						<button class = "general-first-button teal-button">Core Training</button>
						<button class = "general-second-button grey-button">For Facilities</button>
					</div><!--general-button-container-->
				</header><!--general-template-section core-hero-->
            
			<section class ="section-15px-padding">
				<div class ="core-h3-container">
                	<p class="core-header">Yoga Outreach Core Training</p>
				</div><!--core-h3-container-->
				<button class ="book-training-button">Register Online</button>
				<p class ="small-para">- Yoga Alliance 24 Continuing Education Non-Contact hrs</p>
				<p class ="small-para">- BCRPA Continuing Education Credits</p>
				<p>Created to empower qualified yoga teachers with the skills to 
					build trauma-informed and strengths focused classes in order to reach 
					individuals who may be facing multiple barriers in their lives, such as 
					violence, post-traumatic stress disorder, addictions, mental health challenges, 
					and incarceration.
				</p>
			</section><!--section-15px-padding-->
			<div class ="testimonal-slideshow-container">
			<!--empty div-->
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
