<?php /* Template Name: Who We Are*/ ?>

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
            </section>
            <?php $fields= CFS()->get( 'staff_members' ); ?>  <!--variable to hold email from loop-->

            <?php if(!empty($fields)): ?>
                <?php foreach( $fields as $field ): ?>
                    <div class="info-dropdown">
                        <h3>staff</h3><span>+</span>
                    </div>
                    <div class="info-field"> 
                        <img src="<?php echo $field['staff_photo']; ?>" alt="staff photo" class="staffphoto">
                        <p><?php echo $field['staff_name']; ?></p>
                        <div class="accent-name-shape"></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>        

            <form class="e-news-signup">
                <label for="e-news">Sign Up for E-News</label>
                <label class="input-bar">
                    <input type="email" id="e-news">
                    <input type="submit" id="submit-button" value="join" onclick="sendMail()">
                </label>
            </form>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php /*get_footer(); ?>*/
