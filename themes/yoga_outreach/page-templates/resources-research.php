<?php /* Template Name: Resources Research 

/**

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section">
				<h1 class ="page-title-header">
					<?php the_title(); ?>
				</h1>
				<div class ="general-button-container">
					<button class = "general-first-button teal-button">Research</button>
					<button class = "general-second-button grey-button">For Facilities</button>
				</div>
			</header><!--general-template-section-->
            <div class ="research-h3-container section-15px-padding">
                <h3>Research</h3>
                <p>Trauma sensitive yoga research from around the globe.</p>
            </div><!--research-h3-container-->
			<section class ="resources-article-pdf-list-container section-15px-padding">
				<p>Articles</p>
				<p>+</p>
				<p>Research papers & interesting articles about trauma-sensitive yoga</p>
				<ul>
					<?php 
						$pdfs = CFS()->get('pdf_list');
						foreach ( $pdfs as $pdf ):?>
						<li>
							<a href ="<?php echo $pdf ['pdf_item'];?>">PDF</a>
							<p><?php echo $pdf['name_of_pdf'];?></p>
						</li>
						<?php endforeach ?>
			</section>


			
			<section class="resources-links-container section-15px-padding">
				<p>Links</p>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
