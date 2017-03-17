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
                <h1 class="header-title"><?php the_title(); ?></h1>
                <p>We partners with yoga instructors, community organizations, social service agencies, and prisons to provide trauma-informed and strengths-based yoga programming for our community.</p>
                <div>
                    <button class="button-holder"><a href="#instructor" class="button">Become a Yoga Teacher</a></button>
                    <button class="button-holder"><a href="#volunteer" class="button">Community Volunteer</a></button>
                    <button class="button-holder"><a href="#council" class="button">Advisory Council Member</a></button>
                    <button class="button-holder"><a href="#opportunities" class="button">Reaching Out with Yoga</a></button>
                </div>
            </header><!-- .entry-header -->
            <section class="container-one">
                <h2 class="h2-holder">Benefits for Volunteers</h2>
                <div class = "list-container">
                    <div class = "decorative-line-case"><span class="decorative-line"></span></div>
                    <ul>
                        <li>Program continuity for students, opportunity to integrate best practices for service yoga settings</li>
                        <li>Peer networking & community building</li>
                        <li>Ongoing program support & mentorship opportunities</li>
                        <li>Continuing education training (access to affordable workshops)</li>
                        <li>Opportunities to co-teach</li>
                        <li>Facility screening and liaising with staff handled by us!</li>
                    </ul>
                    </div>
            </section>
            <section id="instructor" class="container-two">
                <h2 class="h2-holder">Volunteer as a Yoga Instructor</h2>
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
                <div class="button-wrap"><button class="button-holder">Apply Now</button></div>
            </section>
            <section id="volunteer" class="container-one">
                <h2 class="h2-holder">Volunteer for Community Engagement</h2>
                <p>Are you passionate about Yoga? Do you love meeting new people? Are you short on cash but have enthusiasm to spare? Join our team of Community Engagement Volunteers today! We are looking for volunteers with strong communication skills and a passion for people to join our team, especially individuals with skills in fundraising, marketing, communications, and information technology. </p>
                <button class="button-holder">Apply Now</button>
            </section>
            <section id="council" class="container-three">
                <h2 class="h2-holder">Volunteer for Advisory Council</h2>
                <p>Yoga Outreach is seeking Advisory Council members who believe in our mission and wish to contribute expertise in the field of counseling psychology to the current and future work of the charity.</p>
                <button class="button-holder">Contact Us</button>
            </section>
            <section id="opportunities" class="container-four">
                <h2 class="h2-holder">Volunteer Opportunities</h2>
                <p></p>
                <button class="button-holder">View Here</button>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>