<?php
/**
 *
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area support-us-content">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image"></header><!-- .entry-header -->
            <section class="page-main-header">
                <div>
                    <h1 class="header-title"><?php esc_html(the_title()); ?></h1>
                    <div class="info-paragraph info-p-center"><?php echo esc_html(CFS()->get( 'about_sponsors' )); ?></div>
                </div>
                <div class="button-container">
                    <a href="#donate" class="general-button grey-button">Donate</a>
                    <a href="#sponsor" class="general-button grey-button">Become a Sponsor</a>
                    <a href="#tshirt" class="general-button grey-button">Shop T-Shirts</a>
                    <a href="#current-sponsor" class="general-button grey-button">Current Sponsors</a>
                </div>
            </section>
            <section class="container-three">
                <div class="main-carousel">
                    <?php
                    $fields = CFS()->get( 'donation_levels' ); // returns an array of posts
                    foreach ( $fields as $field ):?>
                        <div class="carousel-cell">
                            <h1>$<?php echo esc_html($field['donation_level']); ?></h1>
                            <p><?php echo esc_html($field['donation_description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <section id="donate" class="container-one">
                <h2 class="h2-holder">Donate</h2>
                <div class="info-paragraph info-p-center"><?php echo esc_html(CFS()->get( 'donation_information' )); ?></div>
                <a href="<?php echo esc_url(CFS()->get( 'donation_page_url' ));?>" target="_blank" class="main-button dark-button">Donate Now</a>
            </section>
            <section class="container-one container-blue">
                <div class="accent-background monthly"><div class="background-accent"></div></div>
                <h2 class="h2-holder">Become a Monthly Contributor</h2>
                    <div class="contributor">
                        <img src="<?php echo esc_html(CFS()->get( 'monthly_contributor_image' )); ?>" alt="">
                    </div>
                <div class="info-paragraph info-p-center"><?php echo CFS()->get( 'monthly_contributor_info' ); ?></div>
                <div><a href="<?php echo esc_url(CFS()->get( 'donation_page_url' ));?>" target="_blank" class="main-button white-button">Donate Now</a></div>
            </section>
            <section id="sponsor" class="container-one">
                <div class="accent-background"><div class="background-accent"></div></div>
                <h2 class="h2-holder">Become a Sponsor</h2>
                <div class="info-paragraph info-p-center"><?php echo esc_html(CFS()->get( 'event_sponsor' )); ?></div>
                <div class="button-wrap">
                    <h3 class="contact-header">To become an event sponsor big or small please contact Delanie </h3>
                    <a href="<?php echo get_page_link(67); ?>" class="small-button white-button">Contact</a>
                </div>
            </section>
            <section id="tshirt" class="container-one container-blue">
                <div class="accent-background monthly"><div class="background-accent"></div></div>
                <h2 class="h2-holder">Get a T-Shirt</h2>
                    <div class="contributor">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tshirt_mobile.png" alt="tshirt">
                    </div>
                <div class="info-paragraph info-p-center"><?php echo CFS()->get( 't_shirt_about' ); ?></div>
                <div><a href="<?php echo esc_url(CFS()->get( 't_shirt_shop_url' ));?>" target="_blank" class="main-button white-button">Shop T-Shirts</a></div>
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
                                    <div class="info-paragraph"><?php echo esc_html($field['current_sponsor']); ?></div>
                                    </li>
                                </div>
                    <?php endforeach; ?>
                    </ul></div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
