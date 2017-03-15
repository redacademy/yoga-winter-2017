<?php /* Template Name: Resources Research Mobile ?>

/**

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section">
				<h1><?php the_title(); ?></h1>
				<div class ="general-button-container">
					<button class = "general-first-button teal-button">Research</button>
					<button class = "general-second-button grey-button">For Facilities</button>
				</div>
			</header><!--general-template-section-->
            <div class ="research-h3-container section-15px-padding">
                <h3>Research</h3>
                <p>Trauma sensitive yoga research from around the globe.</p>
            </div><!--research-h3-container-->
			<section class ="resources-article-pdf-list-container">
				<p>Articles</p>
				<p>+</p>
			</section>
			<section class="resources-links-container section-15px-padding">
				<p>Links</p>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
