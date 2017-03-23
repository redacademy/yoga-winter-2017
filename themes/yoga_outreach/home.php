<?php 
/*Template Name: Blog

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section blog-header">

            <section class="article-slider">
                <ul class="carousel main-carousel"
                data-flickity='{ "accessibility": false }'>
                    <?php if ( have_posts() ) : ?>   
                        <?php while ( have_posts() ) : the_post(); ?> <!--start loop-->
                    
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <li class="carousel-cell">

                                    <div class="postcell">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <img src="<?php the_post_thumbnail( 'large' ); ?>">
                                        <?php endif; ?>

                                        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                        
                                        <?php if ( 'post' === get_post_type() ) : ?>
                                            <p><?php the_date('m-d-Y', '<h2>', '</h2>'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    
                                </li>

                            </article> <!-- #post-## -->

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </section>

			</header><!--general-template-section-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
