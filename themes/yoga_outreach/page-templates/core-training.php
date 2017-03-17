<?php 
/* Template Name: Core 
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="core-hero-container">
				<header class = "general-template-section custom-hero-image">
					<h1 class ="page-title-header">
						<?php the_title(); ?>
					</h1>
					<div class ="general-button-container">
						<button class = "general-button teal-button">Core Training</button>
						<button class = "general-button grey-button">For Facilities</button>
					</div><!--general-button-container-->
				</header><!--general-template-section core-hero-->
            
			<section class ="section-15px-padding">
				<div class ="core-h3-container">
                	<p class="core-header">Yoga Outreach Core Training</p>
				</div><!--core-h3-container-->
				<button class ="book-training-button">Register Online</button>
					<p class ="small-para">- Yoga Alliance 24 Continuing Education Non-Contact hrs</p>
					<p class ="small-para">- BCRPA Continuing Education Credits</p>
				<div class ="avail-online-heading-container">
					<img src ="<?php echo get_template_directory_uri(); ?>/images/earth_icon.svg" class = "earth-logo"alt ="earth_icon">
					<h3 class ="avail-online-h3">available online and in-classroom format!</h3>
				</div>
				<p class = "light-training-para"><?php echo CFS()->get('light_paragraph'); ?></p>
				<p class = "dark-training-para"><?php echo CFS()->get('dark_paragraph'); ?></p>
			</section><!--section-15px-padding-->
			<div class ="testimonal-container">
			<!--empty div-->
			</div>
			<section class ="section-15px-padding dates-section">
			<div class ="icon-heading-container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/earth_icon.svg" class = "earth-logo" alt = "earth_icon">
				<h3><?php echo CFS()->get('training_date_header'); ?></h3>
			</div>
			</section>
			<ul class = "training-list">
				<li class="training-list-item">Learning Objectives</li>
				<li class="training-list-item">Work-study Option for up to 50% off tuition</li>
				<li class="training-list-item">Refund Policy</li>
				<li class="training-list-item">Register for Next Class</li>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
