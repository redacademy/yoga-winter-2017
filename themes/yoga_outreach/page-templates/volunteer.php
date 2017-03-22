<?php
/**
 * Template Name: Volunteer
 *
 * @package Yoga Outreach
 */
 
get_header(); ?>
 
	<div id="primary" class="content-area"> 
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                <div>
                    <h1 class="header-title"><?php the_title(); ?></h1>
                    <p>We partners with yoga instructors, community organizations, social service agencies, and prisons to provide trauma-informed and strengths-based yoga programming for our community.</p>
                </div>
                <div class="main-button-holder">
                    <button class="grey-button main-button"><a href="#instructor" class="button">Become a Yoga Teacher</a></button>
                    <button class="grey-button main-button"><a href="#volunteer" class="button">Community Volunteer</a></button>
                    <button class="grey-button main-button"><a href="#council" class="button">Advisory Council Member</a></button>
                    <button class="grey-button main-button"><a href="#opportunities" class="button">Reaching Out with Yoga</a></button>
                </div>
            </header><!-- .entry-header -->
            <section class="container-one">
                <h2>Benefits for Volunteers</h2>
                <div class = "list-container">
                    <div class = "decorative-line-case"><span class="decorative-line"></span></div>
                    <ul>
                        <?php
                        $fields = CFS()->get( 'volunteer_benefits' ); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <li>
                                    <p><?php echo $field['volunteer_benefit']; ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    </div>
            </section>
            <section id="instructor" class="container-two">
                <h2>Volunteer as a Yoga Instructor</h2>
                <ol>
                <?php
                    $fields = CFS()->get( 'volunteer_steps' );
                    if(!empty($fields)):
                        foreach ( $fields as $field ):?>
                            <div class="volunteer-steps">
                                <li>
                                <p class="volunteer-step"><?php echo $field['volunteer_step']; ?></p>
                                </li>
                            </div> 
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ol>
                <div class="button-wrap"><button class="small-button white-button"><a href="<?php echo get_page_link(176); ?>" class="button">Apply Now</a></button></div>
            </section>
            <section id="volunteer" class="container-one">
                <h2>Volunteer for Community Engagement</h2>
                <p class="info-paragraph"><?php echo CFS()->get( 'community_engagement' ); ?></p>
                <button class="grey-button small-button"><a href="<?php echo get_page_link(176); ?>" class="button">Apply Now</a></button>
            </section>
            <section id="council" class="container-three">
                <h2>Volunteer for Advisory Council</h2>
                <p class="info-paragraph"><?php echo CFS()->get( 'advisory_council' ); ?></p>
                <button class="white-button main-button"><a href="<?php echo get_page_link(67); ?>" class="button">Contact Us</a></button>
            </section>
            <section id="opportunities" class="container-four">
                <h2>Volunteer Opportunities</h2>
                <p></p>
                <button class="white-button main-button"><a href="" class="button">View Here</a></button>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>