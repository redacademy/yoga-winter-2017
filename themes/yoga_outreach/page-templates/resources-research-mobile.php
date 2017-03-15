<?php /* Template Name: Resources Research Mobile ?>

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
					<button class = "general-first-button teal-button">Research</button>
					<button class = "general-second-button grey-button">For Facilities</button>
				</div>
			</section><!--general-template-section-->
            <div class ="research-h3-container section-15px-padding">
                <h3>Research</h3>
                <p>Trauma sensitive yoga research from around the globe.</p>
            </div><!--research-h3-container-->
            <section class ="resources-pdf-list section-15px-padding">
                <div class ="list-text-container">
                    <p>Articles</p>
                    <p>+</p>
                <div><!--list-heading-container-->
            </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
