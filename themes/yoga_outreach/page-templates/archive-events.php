<?php 
/*Template Name: Events

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="general-template-section custom-hero-image">
				<h1 class="page-title-header"><?php the_title(); ?></h1>
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
				<div class="general-button-container">
					<button class="general-button grey-button">workshops</button>
					<button class="general-button teal-button">retreat</button>
				</div>
			</header><!--general-template-section-->

            <section class="container">
                <?php $events= CFS()->get( 'new_event' ); ?>  <!--variable to hold email from loop-->    

                <?php if(!empty($events)): ?>
                    <?php foreach( $events as $event ): ?>
                        <h2><?php echo $event['event_header']; ?></h2>

                        <div class="body-info">
                            <div class="title-contain">
                                <h3><?php echo $event['event_title']; ?></h3>
                                <div class="accent-name-shape"></div>
                            </div>

                            <div class="img-contain">
                                <img src="<?php echo $event['event_image'] ?>" alt="event-image" class="event-img">
                            </div>

                            <table>
                                <tr>
                                    <td><h4>Date</h4></td>
                                    <td><p><?php echo $event['event_date']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><h4>Location</h4></td>
                                    <td><p><?php echo $event['event_location']; ?></p></td>
                                </tr>
                                <tr>
                                    <td><h4>Price (CAD)</h4></td>
                                    <td><p><?php echo $event['event_price']; ?></p></td>
                                </tr>
                            </table>

                            <article>
                                <p><?php echo $event['event_info']; ?></p>
                            </article>
                        </div>

                        <div class="info-dropdown">
                            <h3>About the facilitator</h3><span>+</span>
                        </div>
                                
                        <div class="info-field">
                            <div class="facilitator">
                                <img src="<?php echo $event['facilitator_image'] ?>" alt="event-image">
                                <p><?php echo $event['facilitator_name']; ?></p>
                                <div class="accent-name-shape"></div>
                            </div>
                            <p><?php echo $event['facilitator_bio']; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?> 
            </section>
            <div class="booking-button">
                <button class="general-button white-button">book workshop</button>
            </div>

            
         <section class="container2">
                <h2>Retreat heading</h2>
                <div class="body-info">
                    <div class="title-contain">
                        <h3>retreat title</h3>
                        <div class="accent-name-shape"></div>
                    </div>

                    <table>
                        <tr>
                            <td><h4>Date</h4></td>
                            <td><p>Doe</p></td>
                        </tr>
                        <tr>
                            <td><h4>Location</h4></td>
                            <td><p>Doe</p></td>
                        </tr>
                        <tr>
                            <td><h4>Price (CAD)</h4></td>
                            <td><p>Doe</p></td>
                        </tr>
                    </table>

                    <article>
                        <p>
                           Yoga teachers may lack an understanding community to address questions about their work, debrief difficult teacher/student relationships and discuss ethics. In this workshop participants will gain a theoretical and experiential foundation in the unique qualities of the teacher/student relationship as it pertains to yoga teaching in diverse settings, personal and professional boundaries, self care and what it means to teach from a strengths-based, trauma-informed place.
                        </p>
                    </article>
                </div>
            </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
