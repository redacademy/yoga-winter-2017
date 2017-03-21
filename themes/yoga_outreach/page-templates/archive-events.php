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

                            <?php if(!empty($event['event_booking_info'])): ?>
                                <?php foreach( $event['event_booking_info'] as $info): ?>
                                    <table>
                                        <tr>
                                            <td><h4>Date</h4></td>
                                            <td><p><?php echo $info['event_date']; ?></p></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Location</h4></td>
                                            <td><p><?php echo $info['event_location']; ?></p></td>
                                        </tr>
                                        <tr>
                                            <td><h4>Price (CAD)</h4></td>
                                            <td><p><?php echo $info['event_price']; ?></p></td>
                                        </tr>
                                    </table>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <article>
                                <p><?php echo $info['event_info']; ?></p>
                            </article>
                        </div>

                        <div class="info-dropdown">
                            <h3>About the facilitator</h3><span>+</span>
                        </div>
                                
                        <div class="info-field">
                            <?php if(!empty($info['event_facilitator'])): ?>
                                <?php foreach( $info['event_facilitator'] as $facilitator): ?>
                                    <div class="facilitator">
                                        <img src="<?php echo $facilitator['facilitator_image'] ?>" alt="event-image">
                                        <p><?php echo $facilitator['facilitator_name']; ?></p>
                                        <div class="accent-name-shape"></div>
                                    </div>
                                    <p><?php echo $facilitator['facilitator_bio']; ?></p>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?> 
            </section>

            <div class="booking-button">
                <button class="general-button white-button">book workshop</button>
            </div>

			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
