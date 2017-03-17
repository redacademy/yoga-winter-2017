<?php
/**
 * Template Name: Support
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
                    <button class="button-holder"><a href="#donate" class="button">Donate</a></button>
                    <button class="button-holder"><a href="#sponsor" class="button">Become Event Sponsor</a></button>
                    <button class="button-holder"><a href="#tshirt" class="button">Shop T-Shirt</a></button>
                    <button class="button-holder"><a href="#current-sponsor" class="button">Current Sponsor</a></button>
                </div>
            </header><!-- .entry-header -->
            <section class="main-carousel">
                    <?php
                    $fields = CFS()->get( 'donation_levels' ); // returns an array of posts
                    foreach ( $fields as $field ):?>
                        <div class="carousel-cell">
                            <h1><?php echo $field['donation_level']; ?></h1>
                            <p><?php echo $field['donation_description']; ?></p>
                        </div>
                    <?php endforeach; ?>
            </section>
            <section id="donate" class="container-one">
                <h2 class="h2-holder">Donate</h2>
                <p>To make a donation today click HERE or give us a call to discuss your support at 604.385.3891 today. We gratefully acknowledge any contribution of $100 or more in our newsletter and via social media. “DONATE” leads to Canada Helps, and the number input going to show on Canada Helps input box.</p>
                <div class="button-wrap"><button class="button-holder">Apply Now</button></div>
            </section>
            <section class="container-one">
                <h2 class="h2-holder">Become a Monthly Contributor</h2>
                    <div class="contributor">
                        <img src="<?php CFS()->get( 'monthly_contributor' ); ?>" alt="">
                    </div> 
                <p>For as little as $15 a month, less than a drop in yoga class, you can ensure that youth and adults in mental health facilities, prison or youth custody, alcohol and drug treatment centers, women and children who have experienced violence, or adults suffering from early onset dementia, have access to the powerful and healing practices of yoga and meditation, providing a method to reclaim their minds and bodies, to self regulate, and to connect with people in their community.</p>
                <button class="button-holder">Donate Now</button>
            </section>
            <section id="sponsor" class="container-three">
                <h2 class="h2-holder">Become an Event Sponsor</h2>
                <p>Yoga Outreach hosts a number of events each year and you could be a sponsor. Our main events are the May Yoga Retreat and the October 30 Day Yoga Challenge. We are always looking for Corporate support to make these events as successful as possible. Your contribution will help us provide scholarships for Yoga Outreach students to attend, provide much needed publicity, and of course cover the cost of hosting an event! We provide varying levels of recognition based on your contribution. </p>
                <h3>To become an event sponsor big or small please contact Delanie </h3>
                <div class="button-wrap"><button class="button-holder">Contact</button></div>
            </section>
            <section id="tshirt" class="container-tshirt">
                <h2 class="h2-holder">Get a T-Shirt</h2>
                <p>Our new t-shirts made by Fairware, these shirts are sustainably made, ethically sourced and absolutely gorgeous to wear! In a wide variety of colours and styles you are sure to find one you love and all proceeds support our programming.</p>
                <button class="button-holder">Shop T-Shirts</button>
            </section>
            <section id="current-sponsor" class="container-one">
                <h2 class="h2-holder">Our Current Sponsors</h2>
                <p>Yoga Outreach's past 20 years of community service has only been possible thanks to volunteers and individuals like YOU who donate to support the healing of your community.</p>
                <div class="info-dropdown custom-info-container"><h3>Program Sponsors, In-kind & Financial Support</h3><span>+</span></div>
                    <div class="info-field custom-info-container"><ul>
                        <?php
                        $fields = CFS()->get( 'current_sponsors' ); // returns an array of posts
                            foreach ( $fields as $field ):?>
                                <div>
                                    <li>
                                    <p><?php echo $field['current_sponsor']; ?></p>
                                    </li>
                                </div>
                    <?php endforeach; ?>
                    </ul></div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>