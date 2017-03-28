<?php 
/**
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area event-content">
		<main id="main" class="site-main" role="main">
			<header class="general-template-section custom-hero-image">
                <div class="color-background"></div>
                <?php
                    // TO SHOW THE PAGE CONTENTS
                    while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
                        <div class="entry-content-page">
                            <h1 class="page-title-header"><?php the_title(); ?></h1>
                            <?php the_content(); ?> <!-- Page Content -->
                            <div class="general-button-container">
                                <a href="#workshop" class="general-button grey-button">workshop</a>
                                <a href="#retreat" class="general-button grey-button"">retreat</a>
                            </div>
                        </div>
                    <?php
                        endwhile; //resetting the page loop
                        wp_reset_query(); //resetting the page query
                    ?>
			</header><!--general-template-section-->

            <section id="workshop" class="container">
                <?php $events= CFS()->get( 'new_event' ); ?>  <!--variable to hold email from loop-->    

                <?php if(!empty($events)): ?>
                    <?php foreach( $events as $event ): ?>
                        <h2><?php echo $event['event_header']; ?></h2>

                        <div class="body-info">
                            <div class="title-contain">
                                <h3><?php echo $event['event_title']; ?></h3>
                                <a href="<?php echo get_page_link(275); ?>"class="primary-button">book</a>
                                <div class="accent-name-shape"></div>
                            </div> <!--title-contain -->

                            <div class="desktop-contain">
                                <div class="img-contain">
                                    <img src="<?php echo $event['event_image_1'] ?>" alt="event-image" class="event-img photo-frame">
                                    <img src="<?php echo $event['event_image_2'] ?>" alt="event-image" class="event-img photo-frame">
                                    <img src="<?php echo $event['event_image_3'] ?>" alt="event-image" class="event-img photo-frame">
                                </div> <!-- img-contain -->

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
                            </div> <!-- desktop-contain-->

                            <aside class="desktop-right">
                                <h3>About the facilitator</h3>
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
                            </aside> <!--desktop-facilitator-->
                        </div>

                        <div class="info-dropdown">
                            <h3>About the facilitator</h3><span>+</span>
                        </div>
                                
                        <div class="info-field info-container">
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
                <a href="<?php echo get_page_link(275); ?>"class="primary-button">book workshop</a>
            </div>

            <?php $fields= CFS()->get( 'about_info' ); ?>  <!--variable to hold info category from loop--> 
            
            <section id="retreat" class="container">
                <?php $retreats= CFS()->get( 'new_retreats' ); ?>  <!--variable to hold email from loop-->    

                <?php if(!empty($retreats)): ?>
                    <?php foreach( $retreats as $retreat ): ?>
                        <h2><?php echo $retreat['retreat_header']; ?></h2>

                        <div class="body-info">
                            <div class="title-contain">
                                <h3><?php echo $retreat['retreat_title']; ?></h3>
                                <a href="<?php echo get_page_link(273); ?>"class="primary-button">register</a>
                                <div class="accent-name-shape"></div>
                            </div>

                            <div class="desktop-contain">
                                <?php if(!empty($retreat['retreat_booking_info'])): ?>
                                    <?php foreach( $retreat['retreat_booking_info'] as $info): ?>
                                        <table>
                                            <tr>
                                                <td><h4>Date</h4></td>
                                                <td><p><?php echo $info['retreat_date']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Location</h4></td>
                                                <td><p><?php echo $info['retreat_location']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Price (CAD)</h4></td>
                                                <td><p><?php echo $info['retreat_price']; ?></p></td>
                                            </tr>
                                        </table>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <article>
                                    <p><?php echo $info['retreat_info']; ?></p>
                                </article>

                                <?php $fields= CFS()->get( 'about_info' ); ?>  <!--variable to hold info category from loop-->
                                <?php $schedules= CFS()->get( 'retreat_schedule' ); ?>  <!--variable to hold the scedule drop down loop-->

                                <section>
                                    <?php if(!empty($fields)): ?>
                                        <?php foreach( $fields as $field ): ?>
                                            <h3 class="event-dropdown"><?php echo $field[ 'info_title' ]; ?><span>+</span></h3>
                                            <div class="event-info">
                                                <?php if(!empty($field['info_rows'])): ?>
                                                    <?php foreach( $field['info_rows'] as $row): ?>
                                                        <?php echo esc_html(CFS()->get( 'info_field' )); ?>
                                                        <p><?php echo $row['info_field'] ?></p>
                                                    <?php endforeach ?>
                                                <?php endif ?>
                                            </div>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </section>

                                <section>
                                    <?php if(!empty($schedules)): ?>
                                        <?php foreach( $schedules as $schedule ): ?>
                                            <h3 class="event-dropdown"><?php echo $schedule[ 'retreat_schedule_title' ]; ?><span>+</span></h3>
                                            <?php if(!empty($schedule['schedule_row'])): ?>
                                                <?php foreach( $schedule['schedule_row'] as $row): ?>
                                                    <?php echo esc_html(CFS()->get( 'schedule_upload' )); ?>
                                                    <p><?php echo $row['schedule_upload'] ?></p>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </section>
                            </div>

                            <div class="desktop-right">
                                <div class="img-contain">
                                    <img src="<?php echo $retreat['retreat_image_1'] ?>" class="photo-frame" alt="event-image">
                                    <img src="<?php echo $retreat['retreat_image_2'] ?>" class="photo-frame" alt="event-image">
                                    <img src="<?php echo $retreat['retreat_image_3'] ?>" class="photo-frame" alt="event-image">
                                    <?php if(!empty($retreat['retreat_image'])): ?> <!--if there is no image upload do not display anything-->
                                        <img src="<?php echo $retreat['retreat_image'] ?>" alt="retreat-image" class="event-img">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="booking-button">
                            <a href="<?php echo get_page_link(273); ?>"class="primary-button">register online</a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?> 
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
