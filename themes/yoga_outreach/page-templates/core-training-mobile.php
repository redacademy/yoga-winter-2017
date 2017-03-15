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
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
