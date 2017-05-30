<?php
/**
 * Template part for displaying forms.
 * Template Name: Forms
 * @package Yoga_Outreach_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class = "custom-hero-image forms-header">
			</header><!--general-template-section-->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
</article><!-- #post-## -->