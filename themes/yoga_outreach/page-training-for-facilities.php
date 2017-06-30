<?php
/**
 *
 *
 * @package Yoga_Outreach_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area training-for-facilities-content">
		<main id="main" class="site-main" role="main">
				<header class="general-template-section custom-hero-image"></header><!--general-template-section-->
        <div class="content-container">
          <section>
            <?php
            while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
            <div class="page-main-header ">
              <div class="page-nobutton-header">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?> <!-- Page Content -->
              </div>
            </div><!--entry-content-page-->
            <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
          </section>

          <section class="training-yoga-tools-section">
            <div class="info-dropdown">
              <h3 class="training-h3-heading">Yoga Tools for Youth™</h3>
              <span>+</span>
            </div><!--info-drop-down-->
            <div class="info-field">
              <p><?php echo CFS()->get('tools_for_youth'); ?></p>
            </div><!--info-field-->
          </section><!--training-yoga-tools-section-->

          <section class="training-yoga-work-section">
            <div class="info-dropdown">
              <h3 class="training-h3-heading">Using Yoga in Your Work™</h3>
              <span>+</span>
            </div><!--info-dropdown-work-->
            <div class="info-field">
              <p><?php echo CFS()->get('yoga_in_your_work'); ?></p>
            </div><!--info-field-work-->
          </section><!--training-yoga-work-section-->

          <a href="contact-form" class="book-training-button">Contact Us</a>

				<div class="testimonial-container">
          <h2 class="testimonial-title">Testimonial</h2>
					<ul class="testimonial-list main-carousel">
						<?php
						$testimonials = CFS()->get('testimonial_list');
						foreach ( $testimonials as $testimonial):
						?>
						<li class="carousel-cell"><?php echo esc_html($testimonial ['testimonial']);?></li>
						<?php endforeach ?>
					</ul>
				</div><!--testimonial-container-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
