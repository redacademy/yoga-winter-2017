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
          <?php if(!empty(CFS()->get( 'button_one' ))): ?>
            <a href="#steps" class="general-button grey-button"><?php  echo CFS()->get( 'button_one' ) ?></a>
          <?php endif; ?>
          <?php if(!empty(CFS()->get( 'button_two' ))): ?>
            <a href="#general" class="general-button grey-button"><?php  echo CFS()->get( 'button_two' ) ?></a>
          <?php endif; ?>
          <?php if(!empty(CFS()->get( 'button_three' ))): ?>
            <a href="#register" class="general-button grey-button"><?php  echo CFS()->get( 'button_three' ) ?></a>
          <?php endif; ?>
          <?php if(!empty(CFS()->get( 'button_four' ))): ?>
            <a href="#sponsor" class="general-button grey-button"><?php  echo CFS()->get( 'button_four' ) ?></a>
          <?php endif; ?>
          </div>
      </section>

      <?php if(!empty(CFS()->get( 'challenge_steps' ))): ?>
        <section id="steps" class="container-two">
            <h2><?php echo CFS()->get( 'challenge_steps_title' ); ?></h2>
            <ol>
            <?php
                $fields = CFS()->get( 'challenge_steps' );
                if(!empty($fields)):
                    foreach ( $fields as $field ):?>
                        <div class="volunteer-steps">
                            <li>
                            <div class="volunteer-step"><?php echo $field['challenge_step']; ?></div>
                            </li>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ol>
            <a href="21-day-challenge-registration" class="dark-button main-button apply-button">Register Now</a>
        </section>
      <?php endif; ?>

      <?php if(!empty(CFS()->get( 'general_info' ))): ?>
        <section id="general" class="container-one">
            <h2><?php echo CFS()->get( 'general_info_title' ); ?></h2>
            <div class="info-paragraph"><?php echo CFS()->get( 'general_info' ); ?></div>
        </section>
      <?php endif; ?>

      <!-- <?php if(!empty(CFS()->get( 'our_sponsors' ))): ?>
        <section id="council" class="container-three">
            <h2>Advisory Council Member</h2>
            <div class="info-paragraph"><?php echo CFS()->get( 'advisory_council' ); ?></div>
            <a href="non-teaching-volunteer-application-form" class="main-button white-button">Apply Now</a>
        </section>
      <?php endif; ?> -->

      <?php if(!empty(CFS()->get( 'challenge_registration' ))): ?>
        <section id="register" class="container-four">
            <h2>Register for the Challenge</h2>
            <div class="info-paragraph"><?php echo CFS()->get( 'challenge_registration' ); ?></div>
            <a href="21-day-challenge-registration" class="white-button main-button">Register</a>
        </section>
      <?php endif; ?>

      <?php if(!empty(CFS()->get( 'our_sponsors' ))): ?>
        <section id="sponsor" class="container-one partners-container">
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
