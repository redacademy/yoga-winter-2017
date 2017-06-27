<?php
/**
 * The template for displaying all pages.
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
<section class="hero-banner custom-hero-image">
</section>
<section class="what-we-do">
  <h2>what we do</h2>
    <p>Our mission is to expand access to trauma-informed yoga programs to heal and connect communities</p>
    <a href="<?php echo get_page_link(18); ?>" class="general-button">about us</a>
</section>
<section class="trauma-approach">
  <h2>What is a trauma informed Approach?</h2>
  <p>Creating a safe and healing environment with a no-touch, no-assist approach that inspires and empowers participants to reconnect with their body.</p>
</section>
<section class="training-programs">
  <h2>training programs</h2>
  <p>Find out more about our training programs for Yoga teachers, and for:</p>
</section>
<section class="program-list">
  <div class="yoga-atwork">
      <div class="programlist-text">
        <h1>using yoga in your work™</h1>
        <h4>For facility staff</h4>
        <p>Skills Training for Support Professionals</p>
      </div>
      <div class="background-accent"></div>
  </div>
   <div class="core-training">
      <div class="programlist-text">
        <h1>yoga outreach core training™</h1>
        <h4>For yoga instructors</h4>
        <p>Get the skills to build trauma-informed classes.</p>
      </div>
      <div class="background-accent"></div>
  </div>
  <div class="yoga-foryouth">
      <div class="programlist-text">
        <h1>yoga tools for youth™</h1>
        <h4>For facility staff</h4>
        <p>Skills for self-care and stress reduction</p>
      </div>
      <div class="background-accent"></div>
  </div>
</section>
<section class="video-section">
  <?php if(!empty(CFS()->get( 'frontpage_video' ))): ?><span class="video-link"><?php echo CFS()->get( 'frontpage_video' )?></span><?php endif; ?>
  <?php if(empty(CFS()->get( 'frontpage_video' ))): ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-placeholder.jpg" /><?php endif; ?>
</section>
<section class="get-involved">
    <h2>Get Involed!</h2>
     <div class="involved-wrap">
        <a href="volunteer" class="involvedimage-one"><img src="<?php echo get_template_directory_uri(); ?>/images/Volunteer_desktop.png"/></a>
        <a href="partner-facility" class="involvedimage-two"><img src="<?php echo get_template_directory_uri(); ?>/images/Partner_desktop.png"/></a>
        <a href="support-us" class="involvedimage-one"><img src="<?php echo get_template_directory_uri(); ?>/images/SupportUs_desktop.png"/></a>
      </div>
    <div class="accent-square"></div>
</section>
<div class="team-container">
  <h2>Get to Know the team</h2>
    <ul class="team-list main-carousel">
      <?php
      $teams = CFS()->get('team_item');
      foreach ( $teams as $team): ?>
      <li class="carousel-cell">
        <img class="carousel-picture" src="<?php echo $team ['team_image'];?>" />
        <p><?php echo $team ['team'];?></p>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="testimonal-container">
  <ul class="testimonial-list main-carousel">
    <?php
    $testimonials = CFS()->get('testimonial_item');
    foreach ( $testimonials as $testimonial): ?>
    <li class="carousel-cell">
      <p><?php echo $testimonial ['testimonial'];?></p>
    </li>
    <?php endforeach ?>
  </ul>
</div><!--testimonial-container-->
<section class="thankyou">
  <h2>Thank you ​to our sponsors and volunteers - you make our programs possible.​</h2>
</section>
<?php get_footer(); ?>
