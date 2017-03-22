<?php 
/*Template Name: About Us

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
					<button class="general-button grey-button"><a href="#whoweare" class="button">who we are</a></button>
					<button class="general-button teal-button"><a href="#contactus">contact us</a></button>
				</div>
			</header><!--general-template-section-->

            <section class="container">
                <h2>what we do</h2>
                <p>Yoga Outreach has been supporting adults and youth through trauma-informed yoga programming within community service facilities, across British Columbia, since 1996.</p>
            </section>
            
            <section>
                <div class="info-dropdown">
                    <h3><?php echo CFS()->get( 'dropdown_title' ); ?></h3><span>+</span>
                </div>

            
                <div class="info-field">
                    <p class="list-title"><?php echo CFS()->get( 'list_title' ); ?>:</p>
                
                    <?php $items = CFS()->get( 'list_of_items' ); ?>  <!--variable to hold email from loop-->    
                        <?php if(!empty($items)): ?>
                            <?php foreach( $items as $item ): ?>
                            <div class="list">
                                <ul>
                                    <li><p><?php echo $item[ 'list_item' ]; ?></p></li>
                                </ul>
                                <?php endforeach ?>
                            <?php endif; ?>
                    </div>
                    <?php echo CFS()->get( 'dropdown_description' ); ?>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
