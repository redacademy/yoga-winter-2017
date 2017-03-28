<?php 
/**
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area about-us-content">
		<main id="main" class="site-main" role="main">
			<header class="general-template-section custom-hero-image">
                <?php
                    // TO SHOW THE PAGE CONTENTS
                    while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
                        <div class="entry-content-page">
                            <h1 class="page-title-header"><?php the_title(); ?></h1>
                            <?php the_content(); ?> <!-- Page Content -->
                            <div class="general-button-container">
                                <a class="primary-button grey-button" href="<?php echo get_page_link(69); ?>">who we are</a>
                                <a class="primary-button grey-button" href="<?php echo get_page_link(67); ?>">contact us</a>
                            </div>
                        </div>
                    <?php
                    endwhile; //resetting the page loop
                    wp_reset_query(); //resetting the page query
                    ?>
			</header><!--general-template-section-->

            <?php $subs = CFS()->get( 'subtexts' ); ?>  <!--variable to hold sub texts from loop--> 
            <?php $items = CFS()->get( 'list_of_items' ); ?>  <!--variable to hold list items from loop-->
            <?php $fields= CFS()->get( 'about_info' ); ?>  <!--variable to hold info category from loop--> 
            <?php $articles= CFS()->get( 'training_articles' ); ?>  <!--variable to hold training articles from loop--> 

            <section class="container">

                <?php if(!empty($subs)): ?>
                    <?php foreach( $subs as $sub ): ?>

                        <div class="subtext">
                            <h2><?php echo CFS()->get( 'what_we_do' ); ?></h2>
                            <p><?php echo $sub[ 'subtext_one' ]; ?></p>
                            <img class="photo-frame" src="<?php echo CFS()->get( 'image1' ); ?>" alt="what we do image">
                        </div>

                        <section>
                            <h3 class="info-dropdown"><?php echo CFS()->get( 'dropdown_title' ); ?><span>+</span></h3>
                            

                            <div class="info-field info-container">
                                <section class="">
                                    <img class="photo-frame" src="<?php echo CFS()->get( 'image2' ); ?>" alt="what we do image">
                                    <div class="list">
                                        <p class="list-title"><?php echo CFS()->get( 'list_title' ); ?>:</p>
                                        <?php if(!empty($items)): ?>
                                            <?php foreach( $items as $item ): ?>
                                                <ul>
                                                    <li><?php echo $item[ 'list_item' ]; ?></li>
                                                </ul>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    </div> <!--class list-->
                                    <p class="description-mobile"><?php echo CFS()->get( 'dropdown_description' ); ?></p>
                                </section>
                            </div>
                            <p class="description-desktop"><?php echo CFS()->get( 'dropdown_description' ); ?></p>
                            <a class="primary-button desktop-button" href="<?php echo get_page_link(174); ?>">become a facility partner</a>
                        </section>

                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="mid-sub-text">
                    <p class="subtext" ><?php echo $sub[ 'subtext_two' ]; ?></p>
                    <div class="accent-name-shape"></div>
                </div>

                <?php if(!empty($fields)): ?>
                    <?php foreach( $fields as $field ): ?>

                    
                    <h3 class="info-dropdown"><?php echo $field[ 'info_title' ]; ?><span>+</span></h3>
                    
                        
                    <div class="info-field training-contain">
                        <?php if(!empty($field['info_rows'])): ?>
                            <?php foreach( $field['info_rows'] as $row): ?>

                                <?php echo CFS()->get( 'info_field' ) ?>
                                <p><?php echo $row['info_field'] ?></p>
                                <a class="primary-button desktop-button" href="<?php echo get_page_link(234); ?>">our training programs</a>

                                <section class="desktop-article">
                                    <?php if(!empty($articles)): ?>
                                        <?php foreach( $articles as $article ): ?>

                                            <article class="article">
                                                <h2><?php echo $article['article_title']; ?></h2>
                                                <div class="img-contain">
                                                    <img src="<?php echo $article['article_image']; ?>" alt="article image">
                                                </div>
                                                <div class="article-text">
                                                    <p><?php echo $article['article_content']; ?></p>
                                                </div>
                                            </article> <!-- article -->

                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </section> <!-- desktop-article -->
        
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="bottom-sub-text">
                        <img class="photo-frame" src="<?php echo CFS()->get( 'image3' ); ?>" alt="what we do image">
                        <p class="subtext" ><?php echo $sub[ 'subtext_three' ]; ?></p>
                    </div>

                    <?php endforeach; ?>
                <?php endif; ?>
                
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
