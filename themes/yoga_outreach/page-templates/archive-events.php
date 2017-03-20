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
					<button class="general-button grey-button">workshop</button>
					<button class="general-button teal-button">repeat</button>
				</div>
			</header><!--general-template-section-->
            <section>
                <h2>Event heading</h2>
                <div>
                    <h2>work shop title</h2>
                    <div class="accent-name-shape"></div>
                    <img src="" alt="workshopimg">

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
                            Most teacher trainings provide teachers with the essential foundations for conducting public classes but often leave graduates without more in-depth training in negotiating the teacher/student relationship . 
                        </p>
                        <p>
                            Yoga teachers may lack an understanding community to address questions about their work, debrief difficult teacher/student relationships and discuss ethics. In this workshop participants will gain a theoretical and experiential foundation in the unique qualities of the teacher/student relationship as it pertains to yoga teaching in diverse settings, personal and professional boundaries, self care and what it means to teach from a strengths-based, trauma-informed place.
                        </p>
                    </article>

                    <div class="info-dropdown">
                        <h3>About the facilitator</h3><span>+</span>
                    </div>
                    <div class="info-field">
                    <?php $fields= CFS()->get( 'staff_members' ); ?>  <!--variable to hold staffs from loop-->

                    <?php if(!empty($fields)): ?>
                        <?php foreach( $fields as $field ): ?>
                            <div class="stafflist"> 
                                <img src="<?php echo $field['']; ?>" alt="staff photo" class="staffphoto">
                                <p><?php echo $field['']; ?></p>
                                <div class="accent-name-shape"></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                    <div>
                        
                    </div>
                </div>
                    <button class="general-button white-button">book workshop</button>
                </div>
            </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
