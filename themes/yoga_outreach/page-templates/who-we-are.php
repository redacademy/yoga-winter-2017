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
            
                <div class="info-dropdown">
                    <h3>staff</h3><span>+</span>
                </div>
                <div class="info-field">
                    <?php $fields= CFS()->get( 'staff_members' ); ?>  <!--variable to hold staffs from loop-->

                    <?php if(!empty($fields)): ?>
                        <?php foreach( $fields as $field ): ?>
                            <div class="stafflist"> 
                                <img src="<?php echo $field['staff_photo']; ?>" alt="staff photo" class="staffphoto">
                                <p><?php echo $field['staff_name']; ?></p>
                                <div class="accent-name-shape"></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                </div>

                <div class="info-dropdown">
                    <h3>Board of Directors</h3><span>+</span>
                </div>
                <div class="info-field">
                    <?php $fields= CFS()->get( 'board_of_directors' ); ?>  <!--variable to hold staffs from loop-->

                    <?php if(!empty($fields)): ?>
                        <?php foreach( $fields as $field ): ?>
                            <div class="stafflist"> 
                                <img src="<?php echo $field['directors_photo']; ?>" alt="staff photo" class="staffphoto">
                                <p><?php echo $field['directors']; ?></p>
                                <div class="accent-name-shape"></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                </div>

                <div class="info-dropdown">
                    <h3>Advisory Council</h3><span>+</span>
                </div>
                <div class="info-field">
                    <?php $fields= CFS()->get( 'council' ); ?>  <!--variable to hold staffs from loop-->

                    <?php if(!empty($fields)): ?>
                        <?php foreach( $fields as $field ): ?>
                            <div class="stafflist"> 
                                <img src="<?php echo $field['council_photo']; ?>" alt="staff photo" class="staffphoto">
                                <p><?php echo $field['council_name']; ?></p>
                                <div class="accent-name-shape"></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                </div>

            </section>   
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
