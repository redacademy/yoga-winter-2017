<?php
/**
 * 
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<header class="general-template-section custom-hero-image">
					<div class="page-title-container">
						<h1 class="page-title-header"><?php the_title(); ?></h1>
						<div>
							<p class="page-subtitle">Trauma-informed training for your staff.</p>
						</div>
					</div>
					
					<p class="heading-subtitle"><?php echo CFS()->get('page_subtitle'); ?>
					<div class="general-button-container">
						<button class="general-button grey-button">Core Training</button>
						<button class="general-button teal-button button-black-text">For Facilities</button>
				</header><!--general-template-section-->
				<section class="training-yoga-tools-section">
					<div class="info-dropdown">
						<h3 class="training-h3-heading">Yoga Tools for Youth</h3>
						<span>+</span>
					</div>
					<div class="info-field">
						<p><?php echo CFS()->get('tools_for_youth'); ?></p>
					<div><!--info-field-->
				</section>
				<section class="training-yoga-work-section">
					<div class="info-dropdown">
						<h3 class="training-h3-heading">Using Yoga in Your Work</h3>
						<span>+</span>
					</div><!--info-dropdown-work-->
					<div class="info-field">
						<p><?php echo CFS()->get('yoga_in_your_work'); ?></p>
					</div><!--info-field-work-->
				</section>
				<button class="book-training-button">Book Training</button>
				<p class="small-para section-15px-padding">-Skills Training for Support Professionals</p>
				<p class="under-skills-training-para section-15px-padding">Are you interested in learning about 
				the practical applications of yoga in your work with clients? 
				Or perhaps you’d like to use yoga for self-care and stress reduction? 
				Yoga Outreach has developed a training just for you!
				</p>
				<div class="testimonal-container">
					<ul class="testimonial-list main-carousel">
						<?php
						$testimonials = CFS()->get('testimonial_list');
						foreach ( $testimonials as $testimonial): 
						?>
						<li class="carousel-cell"><?php echo $testimonial ['testimonial'];?></li>
						<?php endforeach ?>
					</ul>
				</div><!--testimonial-container-->
				<ul class="training-list">
                	<?php
                	$infoItems = CFS()->get('yoga_info_list');
                	foreach ( $infoItems as $infoItem ):
                	$infoPDF = $infoItem ['list_file_upload'];
                	$infoContent = $infoItem ['list_content'];
					?>
                	<li class="training-list-item">
						<div id="training-pdf-container">
							<?php if(!empty($infoPDF)): ?>
							<h3><?php echo $infoItem ['list_title'];?></h3>
                    		<a href="<?php echo $infoItem ['list_file_upload'];?>">PDF</a>
						</div><!--training-pdf-container-->
							<?php endif; ?>
                    <?php if(!empty($infoContent)): ?>
					<div class="info-dropdown info-list-title">
						<h3 class="yoga-info-title"><?php echo $infoItem ['list_title']; ?></h3>
						<span>+</span>
					</div>
					<div class="info-field info-list-content">
                    	<p><?php echo $infoItem ['list_content']; ?></p>
					</div>
					<?php endif; ?>
                </li><!--training-list-item-->
                <?php endforeach; ?>
            </ul>
			<div class="bottom-button-container">
				<button class="general-button">Book Training</button>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
