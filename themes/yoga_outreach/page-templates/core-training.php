<?php 
/* Template Name: Core 
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<header class = "general-template-section custom-hero-image">
					<h1 class ="page-title-header"><?php the_title(); ?></h1>
					<div class ="general-button-container">
						<button class = "general-button teal-button">Core Training</button>
						<button class = "general-button grey-button">For Facilities</button>
					</div><!--general-button-container-->
				</header><!--general-template-section core-hero-->
            	<section class ="section-15px-padding">
				<div class ="core-h3-container">
                	<p class="core-header">Yoga Outreach Core Training ™</p>
				</div><!--core-h3-container-->
				<div class ="register-button-para-container">
					<button class ="book-training-button register-online-button">Register Online</button>
					<div class ="small-para-container">
						<p class ="small-para">- Yoga Alliance 24 Continuing Education Non-Contact hrs</p>
						<p class ="small-para">- BCRPA Continuing Education Credits</p>
					</div><!--small-para-container"-->
				</div><!--register-button-para-cotnainer-->
				<div class ="avail-online-heading-container">
					<img src ="<?php echo get_template_directory_uri(); ?>/images/earth_icon.svg" class = "earth-logo"alt ="earth_icon">
					<h3 class ="avail-online-h3">available online and in-classroom format!</h3>
				</div><!--avail-online-heading-container-->
				<p class = "light-training-para"><?php echo CFS()->get('light_training_para'); ?></p>
				<p class = "dark-training-para"><?php echo CFS()->get('dark_training_para'); ?></p>
			</section><!--section-15px-padding-->
			<div class ="testimonal-container">
				<ul class ="testimonial-list main-carousel">
					<?php
					$testimonials = CFS()->get('testimonial_item');
					foreach ( $testimonials as $testimonial): ?>
					<li class ="carousel-cell"><?php echo $testimonial ['testimonial'];?></li>
					<?php endforeach ?>
				</ul>
			</div><!--testimonial-container-->
			<div class = "table-section-container">
				<section class ="section-15px-padding online-dates-section">
					<div class ="online-class-icon-heading-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/earth_icon.svg" class = "earth-logo" alt = "earth_icon">
						<h3>2017 Training Dates Online (8 weeks)</h3>
					</div>
					<table class ="dates-table">
					<?php $dates = CFS()->get('online_dates_container');?>
					<?php foreach ($dates as $date):?>
						<tr>
							<td class ="training-table-data">
								<p class ="table-heading">Date</p>
								<p class ="table-content"><?php echo $date ['date'];?></>
							</td>
							<td class ="training-table-data">
								<p class ="table-heading">Price</p>
								<p class ="table-content"><?php echo $date ['price'];?></p>
							</td>
						<?php endforeach ?>
						</tr>
					</table>
					<p>Now you can take the training online in an eight week format.</p>
					<p>This 8 week online training is comprised of weekly videos, reading, assignments and online interaction. Each week is a new section and will build on the previous . . .</p>
				</section>
				<section class ="classroom-dates-section section-15px-padding">
					<div class ="core-training-text-image-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/house_icon.svg" class ="house-logo" alt="house logo">
						<h3>2017 Training Dates Classroom (18 hours)</h3>
					</div>
					<table class ="dates-table">
						<?php $classroomDates = CFS()->get('classroom_dates_container');?>
						<?php foreach ($classroomDates as $classroomDate):?>
							<tr>
								<td class ="training-table-data">
									<p class ="table-heading">Date</p>
									<p class ="table-content"><?php echo $classroomDate ['date'];?></p>
								</td>
								<td class ="training-table-data">
									<p class ="table-heading">Location</p>
									<p class ="table-content"><?php echo $classroomDate ['location'];?></p>
								</td>
								<td class ="training-table-data">
									<p class ="table-heading">Price (CAD)</p>
									<p class ="table-content"><?php echo $classroomDate ['price'];?></p>
								</td>
							</tr>
							<?php endforeach ?>
					</table>
				</section>
			</div>
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
