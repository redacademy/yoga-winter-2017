<?php
/**
 * Template Name: Training Template
 *
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image">
				<?php the_title(); ?>
				<div class ="general-button-container">
					<button class = "general-button grey-button">Core Training</button>
					<button class = "general-button teal-button button-black-text">For Facilities</button>
				</div>
			</header><!--general-template-section-->
			<section class ="training-yoga-tools-section">
					<h3 class ="training-h3-heading clearfix">Yoga Tools for Youth
						<button class ="train-plus-button" onClick="showContent()">+</button>
					</h3>
						<?php echo CFS()->get('tools_for_youth'); ?>
					<h3 class ="training-h3-heading clearfix">Using Yoga in Your Work
						<button class="train-minus-button">-</button>
					</h3>
						<?php echo CFS()->get('yoga_in_your_work'); ?>

				<button class ="book-training-button">Book Training</button>
				<p class= "small-para">-Skills Training for Support Professionals</p>
				<p class = "under-skills-training-para">
					
				</p>
			</section>
			<div class ="testimonal-container">
					
			</div>
			<ul class="training-list">
				<li class="training-list-item">Summary</li>
				<li class="training-list-item">Poster for Your Workplace</li>
				<li class="training-list-item">Learning Objectives</li>
				<li class="training-list-item">Refund Policy</li>
				<li class="training-list-item">Book a Training Section</li>
			</ul>
			<div class="bottom-button-container">
				<button class="general-first-button">Book Training</button>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
