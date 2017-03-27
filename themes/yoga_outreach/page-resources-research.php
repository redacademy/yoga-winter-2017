<?php 

/*
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area resources-research-content">
		<main id="main" class="site-main" role="main">
			<header class="general-template-section custom-hero-image">
				<div class="color-background"></div>
				<div class="page-title-container">
					<h1 class="page-title-header"><?php the_title(); ?></h1>
					<?php
                while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
                    <div class="entry-content-page">
                    	<?php the_content(); ?> <!-- Page Content -->
                    </div><!--entry-content-page-->
                    <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
				</div><!--page-title-container-->
				<div class="general-button-container">
					<a class="general-button teal-button black-text">Research</a>
					<a href ="training-for-facilities"class="general-button grey-button">For Facilities</a>
				</div><!--general-button-container-->
			</header><!--general-template-section-->
            <div class="main-h3-container section-15px-padding">
                <h3>Research</h3>
                <p>Trauma sensitive yoga research from around the globe.</p>
            </div><!--main-h3-container-->
			<section class="resources-article-pdf-list-container section-15px-padding">
				<div class="info-dropdown">
					<h3>Articles</h3>
					<span class="plus-sign">+</span>
				</div><!--info-dropdown-->
				<div class="info-field">
					<ul class="resource-pdf-list">
						<p class="resource-link-text"><?php echo CFS()->get('resource_link_text'); ?></p>
						<?php 
						$pdfs = CFS()->get('pdf_list');
						foreach ( $pdfs as $pdf ):
						?>
						<li class="pdf-item">
							<a href ="<?php echo $pdf ['pdf_item'];?>" class="pdf-button">PDF</a>
							<p><?php echo $pdf['name_of_pdf'];?></p>
						</li>
					<?php endforeach ?>
					</ul><!--resource-pdf-list-->
				</div><!--info-field-->
			</section>
			<section class="resources-links-container section-15px-padding">
				<div class="links-button-container info-dropdown">
					<h3>Links</h3>
					<span>+</span>
				</div><!--links-button-container-->
				<ul class="link-list info-field">
					<p><?php echo CFS()->get('link_text'); ?></p>
					<?php
					$links = CFS()->get('link_list');
					foreach ( $links as $link): 
					?>
					<li>
						<?php echo $link ['link'];?>
					</li>
					<?php endforeach ?>
				</ul>
			</section>
			</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
