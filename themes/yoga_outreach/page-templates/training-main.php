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
				<div class ="general-button-container">
					<button class = "general-first-button">Core Training</button>
					<button class = "general-second-button">For Facilities</button>
				</div>
			</header><!--general-template-section-->
            <div class ="main-h3-container section-15px-padding">
                <h3>Trauma Informed Approach</h3>
                <p>Creating a safe and healing environment with a no-touch, 
                    no-assist approach that inspires and empowers participants to reconnect 
                    with their body.</p>
            </div><!--research-h3-container-->
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
