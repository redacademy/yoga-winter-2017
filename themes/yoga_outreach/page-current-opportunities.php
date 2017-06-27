<?php
/**
 *
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
<header class="general-small-page-header">
</header><!--general-template-section-->

	<div id="primary" class="content-area current-ops-content">
		<main id="main" class="site-main" role="main">
            <h1>Current Volunteer Opportunities</h1>
            <section>
                <div class = "list-container">
                    <ul>
                        <?php
                        $fields = CFS()->get( 'volunteer_opportunities' );
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <li>
                                    <h2 class="opps-header"><?php echo $field['opportunity_name']; ?></h2>
                                    <div class="opps-info">
                                        <p><span class="opps-subhead">Date:</span>  <?php echo $field['opportunity_date']; ?></p>
                                        <p><span class="opps-subhead">Time:</span>  <?php echo $field['opportunity_time']; ?></p>
                                        <p><span class="opps-subhead">Position:</span>  <?php echo $field['volunteer_position']; ?></p>
                                        <p><span class="opps-subhead">Description:</span>  <?php echo $field['opportunity_description']; ?></p>
                                    </div>
                                    <button class="small-button white-button"><a href="volunteer-application-form" class="button">Apply Now</a></button>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
