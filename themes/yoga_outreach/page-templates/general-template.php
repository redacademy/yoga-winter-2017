<?php 
/*Template Name: General Template 

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section">
				<h1><?php the_title(); ?></h1>
				<div class ="general-button-container">
					<button class = "general-first-button">Insert Text Here</button>
					<button class = "general-second-button">Insert Text Here</button>
				</div>
			</header><!--general-template-section-->
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
