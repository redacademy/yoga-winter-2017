<?php 
/*Template Name: Blog

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="article-slider">
                <ul class="carousel main-carousel">
                    <?php if ( have_posts() ) : ?>   
                        <?php while ( have_posts() ) : the_post(); ?> <!--start loop-->
                            <li class="carousel-cell">
                                <article id="post-<?php the_ID(); ?>" data-post="<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="cell-head">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                            echo '<li class="cell-img" style="background: url('. $url.') center / cover">'; ?>
                                        <?php endif; ?>

                                        <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                    </div>
                                        
                                    <?php if ( 'post' === get_post_type() ) : ?>
                                        <div class="cell-date">
                                            <?php the_date('M. d, Y', '<h3>', '</h3>'); ?>
                                        </div>
                                    <?php endif; ?>
                                </article> <!-- #post-## -->
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </section class="full-article" >
                <?php if ( have_posts() ) : ?>   
                    <?php while ( have_posts() ) : the_post(); ?> <!--start loop-->
                        <article id="post-<?php the_ID(); ?>" data-post="<?php the_ID(); ?>" <?php post_class(); ?>>
                         <?php if ( has_post_thumbnail() ) : ?>
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            echo '<div class="article-img" style="background: url('. $url.') center / cover"></div>'; ?>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            <section>
                img
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
