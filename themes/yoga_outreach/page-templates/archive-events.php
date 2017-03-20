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
                            <td>Date</td>
                            <td>Doe</td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td>Doe</td>
                        </tr>
                        <tr>
                            <td>Price (CAD)</td>
                            <td>Doe</td>
                        </tr>
                    </table>
                </div>
            </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
