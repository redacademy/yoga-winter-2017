<?php
/**
 * Template Name: Training Template
 *
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class ="hero-container">
				<header class = "general-template-section custom-hero-image">
					<h1 class ="page-title-header">
						<?php the_title(); ?>
					</h1>
					<p class ="page-subtitle">Trauma-informed training for your staff.</p>
					<p class ="heading-subtitle"><?php echo CFS()->get('page_subtitle'); ?>
					<div class ="general-button-container">
						<button class = "general-button grey-button">Core Training</button>
						<button class = "general-button teal-button button-black-text">For Facilities</button>
				</header><!--general-template-section-->
			</div>
			<section class ="training-yoga-tools-section">
					<h3 class ="training-h3-heading clearfix">Yoga Tools for Youth
						<button class ="train-plus-button" onClick="showContent()">+</button>
					</h3>
						<?php echo CFS()->get('tools_for_youth'); ?>
					<h3 class ="training-h3-heading clearfix">Using Yoga in Your Work
						<button class="train-minus-button">-</button>
					</h3>
						<?php echo CFS()->get('yoga_in_your_work'); ?>
				<button class ="book-training-button">Book Training</button>
				<p class= "small-para">-Skills Training for Support Professionals</p>
				<p class = "under-skills-training-para">
					
				</p>
			</section>
			<div class ="testimonal-container">
				<ul class ="testimonial-list main-carousel">
					<?php
					$testimonials = CFS()->get('testimonial_item');
					foreach ( $testimonials as $testimonial): ?>
					<li class ="carousel-cell"><?php echo $testimonial ['testimonial'];?></li>
					<?php endforeach ?>
				</ul>
					
			</div>
			<ul class="training-list">
                <?php
                    $infoItems = CFS()->get('yoga_info_list');
                    foreach ( $infoItems as $infoItem ):
                    $infoPDF = $infoItem['list_file_upload'];
                    $infoContent = $infoItem['list_content'];
                ?>
                <li class="training-list-item">
					<div id = "training-pdf-container">
                    	<p><?php echo $infoItem ['list_title'];?></p>
                    	<?php if(!empty($infoPDF)): ?>
                   		<a href ="<?php echo $infoPDF;?>">PDF</a>
					</div>
					<?php endif; ?>
                    <?php if(!empty($infoContent)): ?>
                    <p><?php echo $infoContent;?></p>
					<?php endif; ?>
                </li><!--training-list-item-->
                  
			 <?php endforeach; ?>
            </ul>
			<div class="bottom-button-container">
				<button class="general-button">Book Training</button>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
