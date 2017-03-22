<?php
/**
 * The template for displaying modules.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="entry-header custom-hero-image">
                    <div>
						<h1 class="header-title">Course Modules</h1>
						<p>Select your modules below</P>
					</div>
                    <button class="main-button grey-button"><a href="" class="button">Groups</a></button>
            </header><!-- .entry-header -->


			<section class="course-modules">
				<div class="tab">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<button class="tablinks" value="<?php the_title() ?>">Module <?php the_title() ?></button>
				<?php endwhile; ?>
			<?php endif; ?>
				</div>


			<div id="<?php the_title() ?>" class="tabcontent">
			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

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
                    
						<div class="info-dropdown">
							<img  class="lesson-icon" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $type ?>.svg" />
							<h3><?php the_title() ?>.<?php echo $lesson['order_number'] ?> - <?php echo $lesson['lesson_title'] ?>
							<p><?php echo $lesson['lesson_description'] ?></p>
						</div>
                        <?php if(!empty($contents)): ?>
                            <?php foreach( $contents as $content): ?>
								<div class="module-field">
									<?php if(!empty($content['video_file'])): ?><iframe width="560" height="315" src="<?php echo $content['video_file']?>" frameborder="0" allowfullscreen></iframe><?php endif; ?>
                					<?php if(!empty($content['module_quiz'])): ?><button class="main-button grey-button"><a href="" class="button">Proceed to Quiz <?php the_title() ?></a></button><?php endif; ?>
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
                            	</div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

			<?php endwhile; ?>
			
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
