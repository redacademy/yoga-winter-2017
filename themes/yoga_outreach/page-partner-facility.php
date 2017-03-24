<?php
/**
 * 
 *
 * @package Yoga Outreach
 */
 
get_header(); ?>

	<div id="primary" class="content-area partner-facility-content">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                <div class="header-info">   
                    <h1 class="header-title"><?php the_title(); ?></h1>
                    <p><?php echo CFS()->get( 'about_facility_partners' ); ?></p>
                </div>
                <div class="main-button-holder">
                    <button class="main-button clear-button"><a href="#provide" class="button">What We Provide</a></button>
                    <button class="main-button clear-button"><a href="#perspective" class="button">A Facility Perspective</a></button>
                    <button class="main-button clear-button"><a href="#program" class="button">Receive your Program</a></button>
                    <button class="main-button clear-button"><a href="#partners" class="button">Our Current Partners</a></button>
                </div>
            </header><!-- .entry-header -->
            <section id="provide" class="container-one">
                <h2 class="h2-holder">What We Provide</h2>
                <p><?php echo CFS()->get( 'about_facility_partners' ); ?></p>
                <p><?php echo CFS()->get( 'what_we_provide' ); ?></p>
                <div class="info-dropdown custom-info-container"><h3>Apply for Partnership</h3><span>+</span></div>
                <div class="info-field custom-info-container drop-down-info">
                    <p>We process new applications on a monthly basis, and will be in touch with you about your application as soon as we can.</p>
                    <div class="button-wrap"><button class="small-button white-button"><a href="<?php echo get_page_link(174); ?>" class="button">Apply Now</a></button></div>
                </div>
            </section>
            <section id="perspective" class="container-two">
                <h2 class="h2-holder">A Facility Perspective</h2>
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
                                    <p><?php echo $field['facility_requirement']; ?></p>
                                    </li>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul> 
                </div>
                <div class="button-wrap"><button class="small-button white-button"><a href="<?php echo get_page_link(174); ?>" class="button">Apply Now</a></button></div>
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
                                    <p><?php echo $field['current_partner']; ?></p>

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
                                    <p><?php echo $field['affiliate_program']; ?></p>
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
                                    <p><?php echo $field['past_program_partner']; ?></p>
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