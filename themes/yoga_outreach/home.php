<?php 
/*Template Name: Blog

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area blog-content">
		<main id="main" class="site-main" role="main">
            <header class="general-template-section custom-hero-image">
			</header><!--general-template-section-->
            <section class="article-slider">
                <ul class="carousel main-carousel">
                    <?php if ( have_posts() ) : ?>   
                        <?php while ( have_posts() ) : the_post(); ?> <!--start loop-->
                            <li class="carousel-cell">
                                <article id="list-<?php the_ID(); ?>" data-post="<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="cell-head">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                            echo '<li class="cell-img" style="background:linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('. $url.') center / cover ">'; ?>
                                        <?php endif; ?>

                                        <?php the_title( sprintf( '<p>', esc_url( get_permalink() ) ), '</p>' ); ?>
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
            </section>
            <section class="full-article">
                <?php if ( have_posts() ) : ?>   
                    <?php while ( have_posts() ) : the_post(); ?> <!--start loop-->
                        <article id="<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
                            <div class="article-head">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                    echo get_the_post_thumbnail(); ?>
                                <?php endif; ?>
                                <?php the_title( sprintf( '<h2>',( get_permalink() ) ), '</h2>' ); ?>
                                <?php get_the_author_meta(); ?> 
                                <?php the_date('M. d, Y', '<h3>', '</h3>'); ?>
                            </div>
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="button-container">
                    <button class="blog-prev-button" type="">Previous article</button>
                    <button class="blog-next-button" type="">Next article</button>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
