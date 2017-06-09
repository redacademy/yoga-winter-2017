<?php
/**
 *
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area volunteer-content">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                <div>
                    <h1 class="header-title"><?php the_title(); ?></h1>
                    <p>We partners with yoga instructors, community organizations, social service agencies, and prisons to provide trauma-informed and strengths-based yoga programming for our community.</p>
                </div>
                <div class="main-button-holder">
                    <a href="#instructor" class="main-button clear-button">Become a Volunteer Teacher</a>
                    <a href="#volunteer" class="main-button clear-button">Community Volunteer</a>
                    <a href="#council" class="main-button clear-button">Advisory Council Member</a>
                    <a href="#opportunities" class="main-button clear-button">Reaching Out with Yoga</a>
                </div>
            </header><!-- .entry-header -->
            <section id="instructor" class="container-two">
                <h2>Volunteer as a Yoga Instructor</h2>
                <ol>
                <?php
                    $fields = CFS()->get( 'volunteer_steps' );
                    if(!empty($fields)):
                        foreach ( $fields as $field ):?>
                            <div class="volunteer-steps">
                                <li>
                                <p class="volunteer-step"><?php echo esc_html($field['volunteer_step']); ?></p>
                                </li>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ol>
                <div class="button-wrap"><a href="<?php echo get_page_link(176); ?>" class="small-button white-button">Apply Now</a></div>
            </section>
            <section id="volunteer" class="container-one">
                <h2>Community Engagement Volunteer</h2>
                <div class="info-paragraph"><?php echo esc_html(CFS()->get( 'community_engagement' )); ?></div>
                <a href="<?php echo get_page_link(176); ?>" class="grey-button small-button">Apply Now</a>
            </section>
            <section id="council" class="container-three">
                <h2>Community Council Volunteer</h2>
                <div class="info-paragraph"><?php echo CFS()->get( 'advisory_council' ); ?></div>
                <a href="<?php echo get_page_link(67); ?>" class="main-button white-button">Contact Us</a>
            </section>
            <section class="container-one">
                <h2>Benefits for Volunteers</h2>
                <div class = "list-container">
                    <div class="decorative-line"></div>
                    <ul>
                        <?php
                        $fields = CFS()->get( 'volunteer_benefits' ); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <li>
                                    <p><?php echo esc_html($field['volunteer_benefit']); ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    </div>
            </section>
            <section id="opportunities" class="container-four">
                <h2>Volunteer Opportunities</h2>
                <p></p>
                <a href="<?php echo get_page_link(203); ?>" class="white-button main-button">View Here</a>
            </section>

            <?php if(!empty(CFS()->get( 'new_initiative_title' ))): ?>
                <section id="council" class="container-one">
                    <h2><?php echo CFS()->get( 'new_initiative_title' ) ?></h2>
                    <p class="info-paragraph"><?php echo CFS()->get( 'new_initiative_description' ) ?></p>
                    <a href="<?php echo get_page_link(67); ?>" class="dark-button main-button">Contact Us</a>
                </section>
            <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
