<?php /* Template Name: Training Template ?>

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
					<button class = "general-first-button">Core Training</button>
					<button class = "general-second-button">For Facilities</button>
				</div>
			</section><!--general-template-section-->
			<section class ="training-yoga-tools-section">
					<h3 class ="training-h3-heading clearfix">Yoga Tools for Youth<button class ="train-plus-button" onClick="showContent()">+</button></h3>
					<p id="slide-para">In either a half or full day format the curricula 
					will provide youth with the skills they need to incorporate 
					breathing, mindfulness, grounding, and rhythmic movement into 
					their day. Backed by credible research into the benefits of mindfulness-based stress 
					reduction techniques and trauma-informed teaching practices for youth these 
					workshops will provide students with a solid foundation to use these tools. 
					Highly experiential this program will guide youth through several simple yet 
					powerful exercises that they will be able to utilize in their everyday life.
					</p>
					<h3 class ="training-h3-heading clearfix">Using Yoga in Your Work<button class="train-minus-button">-</button></h3>
				<button class ="book-training-button">Book Training</button>
				<p class= "small-para">-Skills Training for Support Professionals</p>
				<p class = "under-skills-training-para">Are you interested in learning about the practical applications of yoga 
					in your work with clients? Or perhaps you’d like to use yoga for self-care 
					and stress reduction? Yoga Outreach has developed a training just for you!
				</p>
			</section>
			<div class ="testimonal-slideshow-container">
			</div>
			<ul class="training-list">
				<li class="training-list-item">Summary</li>
				<li class="training-list-item">Poster for Your Workplace</li>
				<li class="training-list-item">Learning Objectives</li>
				<li class="training-list-item">Refund Policy</li>
				<li class="training-list-item">Book a Training Section</li>
			</ul>
			<div class="bottom-book-training-button-container">
				<button class="book-training-button fill-white">Book Training</button>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
