<?php
/**
 *
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area volunteer-content">
		<main id="main" class="site-main" role="main">
      <header class="entry-header custom-hero-image"></header><!-- .entry-header -->
      <section class="page-main-header">
          <div>
              <h1 class="header-title"><?php the_title(); ?></h1>
              <div class="info-paragraph info-p-center"><?php echo CFS()->get( 'about_challenge' ); ?></div>
          </div>
          <div class="button-container">
              <a href="#instructor" class="general-button grey-button">Teacher</a>
              <a href="#volunteer" class="general-button grey-button">Community Engagment</a>
              <a href="#council" class="general-button grey-button">Advisory Council</a>
              <a href="#opportunities" class="general-button grey-button">Projects</a>
          </div>
      </section>

      <?php if(!empty(CFS()->get( 'challenge_steps' ))): ?>
        <section id="instructor" class="container-two">
            <h2><?php echo CFS()->get( 'challenge_steps_title' ); ?></h2>
            <ol>
            <?php
                $fields = CFS()->get( 'challenge_steps' );
                if(!empty($fields)):
                    foreach ( $fields as $field ):?>
                        <div class="volunteer-steps">
                            <li>
                            <p class="volunteer-step"><?php echo $field['challenge_step']; ?></p>
                            </li>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ol>
            <a href="volunteer-application-form" class="dark-button main-button apply-button">Register Now</a>
        </section>
      <?php endif; ?>

      <!-- <?php if(!empty(CFS()->get( 'our_sponsors' ))): ?>
        <section id="volunteer" class="container-one">
            <h2>Community Engagement Volunteer</h2>
            <div class="info-paragraph"><?php echo CFS()->get( 'community_engagement' ); ?></div>
            <a href="non-teaching-volunteer-application-form" class="grey-button small-button">Apply Now</a>
        </section>
      <?php endif; ?> -->

      <!-- <?php if(!empty(CFS()->get( 'our_sponsors' ))): ?>
        <section id="council" class="container-three">
            <h2>Advisory Council Member</h2>
            <div class="info-paragraph"><?php echo CFS()->get( 'advisory_council' ); ?></div>
            <a href="non-teaching-volunteer-application-form" class="main-button white-button">Apply Now</a>
        </section>
      <?php endif; ?> -->

      <?php if(!empty(CFS()->get( 'challenge_registration' ))): ?>
        <section id="opportunities" class="container-four">
            <h2>Register for the Challenge</h2>
            <div class="info-paragraph"><?php echo CFS()->get( 'challenge_registration' ); ?></div>
            <a href="current-opportunities" class="white-button main-button">Register</a>
        </section>
      <?php endif; ?>

      <?php if(!empty(CFS()->get( 'our_sponsors' ))): ?>
        <section id="current-sponsor" class="container-one partners-container">
          <h2 class="h2-holder">Our Sponsors</h2>
          <div class="info-field custom-info-container">
            <ul>
            <?php
            $fields = CFS()->get( 'our_sponsors' ); // returns an array of posts
                foreach ( $fields as $field ):?>
                  <div>
                    <li>
                    <div class="info-paragraph"><?php echo $field['sponsor']; ?></div>
                    </li>
                  </div>
            <?php endforeach; ?>
            </ul>
          </div>
        </section>
      <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
