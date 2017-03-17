<?php /* Template Name: Resources Research 

/**

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image">
				<h1 class ="page-title-header">
					<?php the_title(); ?>
				</h1>
				<!--<p>
					<?php the_content(); ?> Get entry-content
				</p>-->
				<div class ="general-button-container">
					<button class = "general-button teal-button">Research</button>
					<button class = "general-button grey-button">For Facilities</button>
				</div>
			</header><!--general-template-section-->
            <div class ="main-h3-container section-15px-padding">
                <h3>Research</h3>
                <p>Trauma sensitive yoga research from around the globe.</p>
            </div><!--research-h3-container-->
			<section class ="resources-article-pdf-list-container section-15px-padding">
				<p>Articles</p>
				<p>+</p>
				<p>Research papers & interesting articles about trauma-sensitive yoga</p>
				<ul class ="resource-pdf-list">
					<?php 
						$pdfs = CFS()->get('pdf_list');
						foreach ( $pdfs as $pdf ):?>
						<li class ="pdf-item">
							<a href ="<?php echo $pdf ['pdf_item'];?>" class ="pdf-button">PDF</a>
							<p><?php echo $pdf['name_of_pdf'];?></p>
						</li>
						<?php endforeach ?>
			</section>
			<section class="resources-links-container section-15px-padding">
				<div>
					<p>Links</p>
					<button>-</button>
				</div>
				<ul class ="link-list">
					<p><?php echo CFS()->get('link_text'); ?></p>
					<?php
					$links = CFS()->get('link_list');
					foreach ( $links as $link): ?>
					<li><?php echo $link ['link'];?></li>
					<?php endforeach ?>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
