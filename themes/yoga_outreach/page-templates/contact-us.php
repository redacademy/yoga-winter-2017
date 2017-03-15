<?php /* Template Name: Contact Us ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image hero-text">
                <h1 class="header-title"><?php the_title(); ?></h1>
                <p>Yoga Outreach is possible thanks to the dedicated, hard-working team  running the programs.</p>
            </header>
            
            <section class="team">
                <h2>The YO Team</h2>
                <p>Click on name for bio and contact info.</p>

                <div class="staff">
                    <span>Staff <button>-</button></span>
                    <div class="circle"><?php echo CFS()->get( 'staff_photo' );?></div>
                    <p>Place holder name<?php echo CFS()->get( 'staff_name' );?></p>
                    <div class="accent-name-shape"></div>
                </div>

                <div class="staff">
                    <span>Board of Directors<button>+</button></span>
                    <div class="circle"></div>
                    <p>Place holder name</p>
                    <div class="accent-name-shape"></div>
                </div>

                <div class="staff" >
                    <span>Advisory Council<button>+</button></span>
                    <div class="circle"></div>
                    <p>Place holder name</p>
                    <div class="accent-name-shape"></div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
