<?php
/**
 * The template for displaying modules.
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="entry-header custom-hero-image">
                    <div class="modules-title">
						<?php the_archive_title( '<h1 class="header-title">', '</h1>' ); ?>
						<p>Seelect your modules below</P>
					</div>
                    <div class="groups-button"><a href="" class="main-button dark-button">Groups</a></div>
            </header><!-- .entry-header -->


			<section class="course-modules">
				<div class="tab">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<button class="tablinks module-button" value="<?php the_title() ?>">Module <?php the_title() ?></button>
				<?php endwhile; ?>
			<?php endif; ?>
				</div>


			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="<?php the_title() ?>" value="<?php the_title() ?>" class="tabcontent">
				<div class="dec-space"></div>
				<?php $lessons = CFS()->get( 'module_lessons' ); ?>  <!--variable to hold module info from loop--> 

				<?php if(!empty($lessons)): ?>
                    <?php foreach( $lessons as $lesson ): ?>
						<?php $contents = $lesson['lesson_content']; ?>  <!--variable to hold lesson info from loop-->
						<?php
						$types = $lesson['lesson_type'];
						foreach ( $types as $key => $label ) {
							$type = $label;
						}
						?>
						<div class="individual-lesson">
							<div class="info-dropdown lesson-dropdown to-do">
								<div class="info-content">
									<img  class="lesson-icon" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $type ?>.svg" />
									<div class="info-container">
										<p><?php the_title() ?>.<?php echo $lesson['order_number'] ?> - <?php echo $lesson['lesson_title'] ?></p>
										<p><?php echo $lesson['lesson_description'] ?></p>
									</div>
								</div>
								<div class="progress">
									<div class="progress-icon incomplete"></div>
									<p class="progress-text"></p>
								</div>
							</div>
							<?php if(!empty($contents)): ?>
								<?php foreach( $contents as $content): ?>
								<?php
									$quizzes = $content['module_quiz'];
									foreach ( $quizzes as $key => $label ) {
										$quiz = $label;
									}
								?>
									<div class="lesson-field">
										<?php if(!empty($content['video_file'])): ?><iframe width="560" height="315" src="<?php echo $content['video_file']?>" frameborder="0" allowfullscreen></iframe><?php endif; ?>
										<?php if(!empty($quiz)): ?>
										<p> To proceed you must complete the following quiz and receive a passing grade </p>
										<button class="main-button grey-button"><a href="/module-<?php the_title() ?>-quiz" class="button">Proceed to Quiz <?php the_title() ?></a></button>
										<?php endif; ?>
										<?php if(!empty($content['module_homework'])): ?><p><?php echo $content['module_homework'] ?></p><?php endif; ?>
										<?php if(!empty($content['slides'])): ?>
											<div class="main-carousel">
												<?php
												foreach ( $content['slides'] as $slide ):?>
													<div class="carousel-cell">
														<img src="<?php echo $slide['slide'] ?>" alt="slide">
													</div>
												<?php endforeach; ?>
											</div>
										<?php endif; ?>
										<input type="checkbox" id="completed" name="completed" value="completed"><span>Lesson Completed</span></input>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
                    <?php endforeach; ?>
                <?php endif; ?>
			</div>
			<?php endwhile; ?>
			
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
