<?php 
/*
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area about-us-content">
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
					<a href="<?php echo get_page_link(69); ?>"class="button primary-button">who we are</a>
					<a href="<?php echo get_page_link(67); ?>"class="button primary-button">contact us</a>
				</div>
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
                        </div>

                        <section>
                            <div class="info-dropdown">
                                <h3><?php echo CFS()->get( 'dropdown_title' ); ?></h3><span>+</span>
                            </div>

                            <div class="info-field">
                                <p class="list-title"><?php echo CFS()->get( 'list_title' ); ?>:</p>

                                <?php if(!empty($items)): ?>
                                    <?php foreach( $items as $item ): ?>
                                        <div class="list">
                                            <ul>
                                                <li><?php echo $item[ 'list_item' ]; ?></li>
                                            </ul>
                                        </div>
                                    <?php endforeach ?>
                                <?php endif; ?>

                                <p><?php echo CFS()->get( 'dropdown_description' ); ?></p>
                            </div>
                        </section>

                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="mid-sub-text">
                    <p class="subtext" ><?php echo $sub[ 'subtext_two' ]; ?></p>
                    <div class="accent-name-shape"></div>
                </div>

                <?php if(!empty($fields)): ?>
                    <?php foreach( $fields as $field ): ?>

                    <div class="info-dropdown">
                        <h3><?php echo $field[ 'info_title' ]; ?></h3><span>+</span>
                    </div>
                        
                    <div class="info-field">
                        <?php if(!empty($field['info_rows'])): ?>
                            <?php foreach( $field['info_rows'] as $row): ?>

                                <?php echo CFS()->get( 'info_field' ) ?>
                                <p><?php echo $row['info_field'] ?></p>

                                <?php if(!empty($articles)): ?>
                                    <?php foreach( $articles as $article ): ?>
                                        <article class="article">
                                            <h2><?php echo $article['article_title']; ?></h2>
                                            <div class="imgcontain">
                                                <img src="<?php echo $article['article_image']; ?>" alt="article image">
                                            </div>
                                            <p><?php echo $article['article_content']; ?></p>
                                            <h5>read more</h5>
                                        </article>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="bottom-sub-text">
                        <p class="subtext" ><?php echo $sub[ 'subtext_three' ]; ?></p>
                    </div>

                    <?php endforeach; ?>
                <?php endif; ?>
                
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
