<?php
/**
 * Template Name: Partner
 *
 * @package Yoga Outreach
 */
 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                <h1 class="header-title"><?php the_title(); ?></h1>
                <p>We partners with yoga instructors, community organizations, social service agencies, and prisons to provide trauma-informed and strengths-based yoga programming for our community.</p>
                <div>
                    <button class="button-holder"><a href="#provide" class="button">What We Provide</a></button>
                    <button class="button-holder"><a href="#perspective" class="button">A Facility Perspective</a></button>
                    <button class="button-holder"><a href="#program" class="button">Receive your Program</a></button>
                    <button class="button-holder"><a href="#partners" class="button">Our Current Partners</a></button>
                </div>
            </header><!-- .entry-header -->
            <section id="provide" class="container-one">
                <h2 class="h2-holder">What We Provide</h2>
                <p><?php echo CFS()->get( 'what_we_provide' ); ?></p>
                <div class="info-dropdown custom-info-container"><h3>Apply for Partnership</h3><span>+</span></div>
                <div class="info-field custom-info-container">
                    <p>We process new applications on a monthly basis, and will be in touch with you about your application as soon as we can.</p>
                    <div class="button-wrap"><button class="button-holder">Apply Now</button></div>
                </div>
            </section>
            <section id="perspective" class="container-two">
                <h2 class="h2-holder">A Facility Perspective</h2>
                <img src="<?php echo CFS()->get( 'facility_video' ); ?>" />
            </section>
            <section id="program" class="container-one partner-facility">
                <h2 class="h2-holder">Receive yoga for Outreach Programming</h2>
                <div class = "interested-facility">
                    <h3> Interested in having a yoga program at your facility?</h3>
                    <ul>
                    <?php
                        $fields = CFS()->get( 'facility_requirements' ); // returns an array of posts
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bluecheck.svg"/>
                                    <p><?php echo $field['facility_requirement']; ?></p>
                                    </li>
                                </div>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <div class="button-wrap"><button class="button-holder">Apply Now</button></div>
            </section>
            <section id="partners" class="container-three">
                <h2 class="h2-holder">Our Current Partners</h2>
                <div class = "partners-container">
                    <div class="info-dropdown"><h3>Current Facility Partners</h3><span>+</span></div>
                    <div class="info-field"><ul>
                        <?php
                        $fields = CFS()->get( 'current_partners' ); // returns an array of posts
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <p><?php echo $field['current_partner']; ?></p>
                                    </li>
                                </div>
                    <?php endforeach; ?>
                    </ul></div>
                    <div class="info-dropdown"><h3>Affiliate Programs</h3><span>+</span></div>
                    <div class="info-field"><ul>
                        <?php
                        $fields = CFS()->get( 'affiliate_programs' ); // returns an array of posts
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <p><?php echo $field['affiliate_program']; ?></p>
                                    </li>
                                </div>
                    <?php endforeach; ?>
                    </ul></div>
                    <div class="info-dropdown"><h3>Past Programs Partners</h3><span>+</span></div>
                    <div class="info-field"><ul>
                        <?php
                        $fields = CFS()->get( 'past_program_partners' ); // returns an array of posts
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <p><?php echo $field['past_program_partner']; ?></p>
                                    </li>
                                </div>
                    <?php endforeach; ?>
                    </ul></div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>