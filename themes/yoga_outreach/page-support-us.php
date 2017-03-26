<?php
/**
 *
 *
 * @package Yoga Outreach
 */
 
get_header(); ?>

	<div id="primary" class="content-area support-us-content">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                <div>
                    <h1 class="header-title"><?php the_title(); ?></h1>
                    <p><?php echo CFS()->get( 'about_sponsors' ); ?></p>
                </div>
                <div class="main-button-holder">
                    <a href="#donate" class="main-button clear-button">Donate</a>
                    <a href="#sponsor" class="main-button clear-button">Become Event Sponsor</a>
                    <a href="#tshirt" class="main-button clear-button">Shop T-Shirts</a>
                    <a href="#current-sponsor" class="main-button clear-button">Current Sponsor</a>
                </div>
            </header><!-- .entry-header -->
            <section class="container-three">
                <div class="main-carousel">
                    <?php
                    $fields = CFS()->get( 'donation_levels' ); // returns an array of posts
                    foreach ( $fields as $field ):?>
                        <div class="carousel-cell">
                            <h1>$<?php echo $field['donation_level']; ?></h1>
                            <p><?php echo $field['donation_description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section> 
            <section id="donate" class="container-one">
                <h2 class="h2-holder">Donate</h2>
                <p><?php echo CFS()->get( 'donation_information' ); ?></p>
                <div class= "decorative-line2"></div>
                <a href="<?php echo CFS()->get( 'donation_page_url' );?>" class="main-button dark-button">Donate Now</a>
            </section>
            <section class="container-one">
                <div class="accent-background monthly"><div class="background-accent"></div></div>
                <h2 class="h2-holder">Become a Monthly Contributor</h2>
                    <div class="contributor">
                        <img src="<?php echo CFS()->get( 'monthly_contributor_image' ); ?>" alt="">
                    </div> 
                <p><?php echo CFS()->get( 'monthly_contributor_info' ); ?></p>
                <div><a href="<?php echo CFS()->get( 'donation_page_url' );?>" class="main-button dark-button">Donate Now</a></div>
            </section>
            <section id="sponsor" class="container-one">
                <div class="accent-background"><div class="background-accent"></div></div>
                <h2 class="h2-holder">Become an Event Sponsor</h2>
                <p><?php echo CFS()->get( 'event_sponsor' ); ?></p>
                <h3>To become an event sponsor big or small please contact Delanie </h3>
                <div class="button-wrap"><a href="<?php echo get_page_link(67); ?>" class="small-button white-button">Contact</a></div>
            </section>
            <section id="tshirt" class="container-tshirt">
                <h2 class="h2-holder">Get a T-Shirt</h2>
                <p><?php echo CFS()->get( 't_shirt_about' ); ?></p>
                <div><a href="<?php echo CFS()->get( 't_shirt_shop_url' );?>" class="main-button white-button">Shop T-Shirts</a></div>
            </section>
            <section id="current-sponsor" class="container-one partners-container">
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