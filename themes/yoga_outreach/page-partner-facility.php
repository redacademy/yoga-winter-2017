<?php
/**
 *
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area partner-facility-content">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image"></header><!-- .entry-header -->
            <section class="page-main-header">
                <div>
                    <h1 class="header-title"><?php the_title(); ?></h1>
                    <div class="info-paragraph info-p-center"><?php echo CFS()->get( 'about_facility_partners' ); ?></div>
                </div>
                <div class="button-container">
                    <a href="#provide" class="general-button grey-button">What We Provide</a>
                    <a href="#perspective" class="general-button grey-button">A Facility Perspective</a>
                    <a href="#program" class="general-button grey-button">Receive your Program</a>
                    <a href="#partners" class="general-button grey-button">Our Current Partners</a>
                </div>
            </section>
            <section id="provide" class="container-one">
                <h2 class="h2-holder">What We Provide</h2>
                <div class="info-paragraph info-p-center"><?php echo CFS()->get( 'about_facility_partners' ); ?></div>
                <div class="info-paragraph info-p-center"><?php echo CFS()->get( 'what_we_provide' ); ?></div>
                <div class="info-dropdown custom-info-container"><h3>Apply for Partnership</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p>We process new applications on a monthly basis, and will be in touch with you about your application as soon as we can.</p>
                    <a href="<?php echo get_page_link(174); ?>" class="dark-button main-button apply-button">Apply Now</a>
                </div>
            </section>
            <section id="perspective" class="container-two">
                <h2 class="facility-h2">A Facility Perspective</h2>
                <?php if(!empty(CFS()->get( 'facility_video' ))): ?><span class="video-link"><?php echo CFS()->get( 'facility_video' )?></span><?php endif; ?>
                <?php if(empty(CFS()->get( 'facility_video' ))): ?><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-placeholder.jpg" /><?php endif; ?>
            </section>
            <section id="program" class="container-one partner-facility">
                <h2 class="h2-holder">Receive yoga for Outreach Programming</h2>
                <div class = "interested-facility">
                    <h3> Interested in having a yoga program at your facility?</h3>
                    <ul>
                    <?php
                        $fields = CFS()->get( 'facility_requirements' ); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bluecheck.svg"/>
                                    <p><?php echo esc_html($field['facility_requirement']); ?></p>
                                    </li>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <a href="<?php echo get_page_link(174); ?>" class="dark-button main-button apply-button">Apply Now</a>
            </section>
            <section id="partners" class="container-three partner-facility">
                <h2 class="h2-holder">Our Current Partners</h2>
                <div class = "partners-container">
                    <div class="info-dropdown"><h3>Current Facility Partners</h3><span>+</span></div>
                    <div class="info-field"><ul>
                        <?php
                        $fields = CFS()->get( 'current_partners' ); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <p><?php echo esc_html($field['current_partner']); ?></p>

                                    </li>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul></div>
                    <div class="info-dropdown"><h3>Affiliate Programs</h3><span>+</span></div>
                    <div class="info-field"><ul>
                        <?php
                        $fields = CFS()->get( 'affiliate_programs' ); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <p><?php echo esc_html($field['affiliate_program']); ?></p>
                                    </li>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul></div>
                    <div class="info-dropdown"><h3>Past Programs Partners</h3><span>+</span></div>
                    <div class="info-field"><ul>
                        <?php
                        $fields = CFS()->get( 'past_program_partners' ); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <p><?php echo esc_html($field['past_program_partner']) ?></p>
                                    </li>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul></div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
