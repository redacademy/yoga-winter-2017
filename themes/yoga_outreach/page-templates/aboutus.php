<?php /* Template Name: about-us*/ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <h1>who we are</h1> 
            <div class="hero-text">
                <h2>who are we</h2>
                <p>Yoga Outreach is possible thanks to the dedicated, hard-working team  running the programs.</p>
            </div>
            <section class="team">
                <h2>The YO Team</h2>
                <p>Click on name for bio and contact info.</p>

                <div class="staff">
                    <span>Staff <button>-</button></span>
                    <div class="circle"></div>
                    <p>Place holder name</p>
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

            <form class="e-news-signup">
                <label for="e-news">Sign Up for E-News</label>
                <span class="input-bar">
                    <input type="email" id="e-news">
                    <input type="submit" id="submit-button" value="join" onclick="sendMail()">
                </span>
            </form>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
