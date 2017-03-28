<?php
/**
 * The template for displaying who we are page.
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area who-we-are-content">
    <div class="staff-popup">
        <button class="exit-button">X</button>
        <div class="popup-description"></div>
    </div>
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image hero-text">
                <h1 class="header-title"><?php the_title(); ?></h1>
                <?php
                    // TO SHOW THE PAGE CONTENTS
                    while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
                        <div class="entry-content-page">
                            <?php the_content(); ?> <!-- Page Content -->
                        </div>
                    <?php
                    endwhile; //resetting the page loop
                    wp_reset_query(); //resetting the page query
                    ?>
            </header>
            
            <section class="team">
                <div class="teamheader">
                    <h2>The YO Team</h2>
                    <p>Click on name for bio and contact info.</p>
                </div>

                <?php $fields= CFS()->get( 'staff_groups' ); ?>  <!--variable to hold staff from loop-->    
                    <?php if(!empty($fields)): ?>
                        <?php foreach( $fields as $field ): ?>

                        <div class="info-dropdown">
                            <h3 class ="staff-header"><?php echo $field[ 'title' ]; ?></h3><span>+</span>
                        </div>
                            
                        <div class="info-field staff-item-container">
                            <?php if(!empty($field['staff_member'])): ?>
                                <?php foreach( $field['staff_member'] as $member): ?>
                                    <?php echo CFS()->get( 'staff_photo','staff_name' ) ?>
                                    <div class="member-contain">
                                        <img src="<?php echo $member['staff_photo']; ?>" alt="staff photo" class="staffphoto">
                                        <a href=""><?php echo $member['staff_name'] ?></a>
                                        <div class="accent-name-shape"></div>
                                        <p class="staff-description"><?php echo $member['staff_description']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </section>   
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
