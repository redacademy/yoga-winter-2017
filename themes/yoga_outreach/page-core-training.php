<?php 
/* 
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area core-training-content">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image">
				<div class ="page-title-container">
				<h1 class ="page-title-header"><?php the_title(); ?></h1>
				
				<?php
                while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
                    <div class="entry-content-page">
                    	<?php the_content(); ?> <!-- Page Content -->
                    </div><!--entry-content-page-->
                    <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
				<div class="general-button-container">
					<a href="#" class="general-button teal-button black-text">Core Training</a>
					<a href="#" class="general-button grey-button">For Facilities</a>
				</div><!--general-button-container-->
      </div><!--page-title-container-->
			</header><!--general-template-section core-hero-->
            <section class="section-15px-padding">
				<div class="core-h3-container">
                	<p class="core-header">Yoga Outreach Core Training ™</p>
				</div><!--core-h3-container-->
				<div class="register-button-para-container">
					<button class="book-training-button register-online-button">Register Online</button>
					<div class="small-para-container">
						<p class="small-para">- Yoga Alliance 24 Continuing Education Non-Contact hrs</p>
						<p class="small-para">- BCRPA Continuing Education Credits</p>
					</div><!--small-para-container"-->
				</div><!--register-button-para-cotnainer-->
				<div class="avail-online-heading-container">
					<div class="earth-logo-change"></div>
					<h3 class="avail-online-h3">available online and in-classroom format!</h3>
				</div><!--avail-online-heading-container-->
				<div class="main-paragraph-container">
					<p class="light-first-para"><?php echo CFS()->get('first_core_para'); ?></p>
					<p class="dark-second-para"><?php echo CFS()->get('second_core_para'); ?></p>
				</div><!--main-paragraph-container-->
			</section><!--section-15px-padding-->
			<div class="testimonial-container">
				<ul class="testimonial-list main-carousel">
					<?php
					$testimonials = CFS()->get('testimonial_list');
					if (!empty($testimonials)):
					foreach ( $testimonials as $testimonial): ?>
					<li class="carousel-cell"><?php echo $testimonial ['testimonial'];?></li>
					<?php endforeach ?>
					<?php endif ?>
				</ul>
			</div><!--testimonial-container-->
			<div class="table-section-container">
				<section class="section-15px-padding online-dates-section">
					<div class="online-class-icon-heading-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/earth_icon.svg" class="earth-logo" alt = "earth_icon">
						<h3>2017 Training Dates Online (8 weeks)</h3>
					</div><!--online-class-icon-heading-container-->
					<table class="dates-table">
					<?php $dates = CFS()->get('online_dates_container');?>
					<?php 	if (!empty($dates)):
							foreach ($dates as $date):?>
						<tr>
							<td class="training-table-data">
								<p class="table-heading">Date</p>
								<p class="table-content"><?php echo $date ['date'];?></p>
							</td>
							<td class="training-table-data">
								<p class="table-heading">Price</p>
								<p class="table-content"><?php echo $date ['price'];?></p>
							</td>
						<?php endforeach ?>
						<?php endif ?>
						</tr>
					</table>
					<p>Now you can take the training online in an eight week format.</p>
					<p><?php echo CFS()->get('training_dates_paragraph')?></p>
				</section>
				<section class="classroom-dates-section section-15px-padding">
					<div class="core-training-text-image-container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/house_icon.svg" class ="house-logo" alt="house logo">
						<h3>2017 Training Dates Classroom (18 hours)</h3>
					</div><!--core-training-text-iamge-container-->
					<table class="dates-table">
						<?php $classroomDates = CFS()->get('classroom_dates_container');?>
						<?php if(!empty($classroomDates)): ?>
						<?php foreach ($classroomDates as $classroomDate):?>
							<tr class="classroom-tr">
								<td class="training-table-data">
									<p class="table-heading">Date</p>
									<p class="table-content"><?php echo $classroomDate ['date'];?></p>
								</td>
								<td class="training-table-data">
									<p class="table-heading">Location</p>
									<p class="table-content"><?php echo $classroomDate ['location'];?></p>
								</td>
								<td class="training-table-data">
									<p class="table-heading">Price (CAD)</p>
									<p class="table-content"><?php echo $classroomDate ['price'];?></p>
								</td>
							</tr>
							<?php endforeach ?>
							<?php endif ?>
					</table>
				</section><!--classroom-dates-section-->
			</div><!--table-section-->
      <div class="traininglist-container">
        <ul class="training-list">
                <?php
              $infoItems = CFS()->get('yoga_info_list');
          // if (!empty($infoItems)): FIX TMR
              foreach ( $infoItems as $infoItem ):
                  $infoPDF = $infoItem ['list_file_upload'];
                  $infoContent = $infoItem ['list_content'];
          ?>
                  <li class="training-list-item">
            <div id="training-pdf-container">
              <?php if(!empty($infoPDF)): ?>
              <h3><?php echo $infoItem ['list_title'];?></h3>
                        <a href ="<?php echo $infoItem ['list_file_upload'];?>">PDF</a>
            </div><!--training-pdf-container-->
            <?php 
            endif; 
            ?>
                      <?php if(!empty($infoContent)): ?>
            <div class ="info-dropdown">
              <h3 class="yoga-info-title"><?php echo $infoItem ['list_title']; ?></h3>
              <span>+</span>
            </div><!--tools-first-heading-->
            <div class="info-field">
                        <p class="info-list-content"><?php echo $infoItem ['list_content']; ?></p>
            </div><!--info-field-->
            <?php endif; ?>
                  </li><!--training-list-item-->
                  <?php endforeach; ?>
        </ul>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
