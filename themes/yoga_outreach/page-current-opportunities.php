<?php
/**
 * 
 *
 * @package Yoga Outreach
 */
 
get_header(); ?>
 
	<div id="primary" class="content-area"> 
		<main id="main" class="site-main" role="main">
            <h1>Current Volunteer Opportunities</h1>
            <section>
                <div class = "list-container">
                    <ul>
                        <?php
                        $fields = CFS()->get( 'volunteer_opportunities' ); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <li>
                                    <h2 class="opps-header"><?php echo $field['opportunity_name']; ?></h2>
                                    <div class="opps-info">
                                        <p> Date: <?php echo $field['opportunity_date']; ?></p>
                                        <p>Time: <?php echo $field['opportunity_time']; ?></p>
                                        <p>Position: <?php echo $field['volunteer_position']; ?></p>
                                        <p>Description: <?php echo $field['opportunity_description']; ?></p>
                                    </div>
                                    <button class="small-button white-button"><a href="<?php echo get_page_link(176); ?>" class="button">Apply Now</a></button>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>