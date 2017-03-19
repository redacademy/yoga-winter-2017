<?php 
/*Template Name: Resources Media

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section">
				<h1 class ="page-title-header">
                        <?php the_title(); ?>
                </h1>
				<p>
					<?php the_subtitle();?>
				</p>
				<div class ="general-button-container">
					<button class = "general-button grey-button">Research</button>
					<button class = "general-button teal-button">Media and Videos</button>
				</div>
			</header><!--general-template-section-->
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
