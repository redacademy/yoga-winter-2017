<?php
/**
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area resources-media-content">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section custom-hero-image"></header>
			<div class="main-header-contain">
				<?php
                	while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
						<div class="page-main-header ">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?> <!-- Page Content -->
							<div class="button-container">
								<a href ="resources-research" class="general-button grey-button">Research</a>
							</div>
						</div>
                    <?php
                	endwhile; //resetting the page loop
                	wp_reset_query(); //resetting the page query
                	?>
			</div>
			<section class="video-list-section">
				<h2 class="video-list-heading">Why Yoga Outreach</h2>
				<ul class="media-video-list">
					<?php
					$videos = CFS()->get('video_list');
					foreach ( $videos as $video ):
					?>
					<li>
						<h3><?php echo esc_html($video ['title']); ?></h3>
						<span class="video-link"><?php echo $video['video_embed_link'];?></span>
					</li>
					<?php endforeach ?>
				</ul>
			</section>
			<div class="main-h3-container section-15px-padding">
					<h3>Yoga Outreach News</h3>
			</div><!--main-h3-container-->
			<section class="media-article-section">
				<div class="section-15px-padding">
				<?php if(!empty(CFS()->get( 'in_the_press' ))): ?>
					<div class="info-dropdown media-heading-flex">
						<h3>News</h3>
						<span>+</span>
					</div><!--info-dropdown-->
					<div class="info-field">
						<ul class="press-article-list">
						<?php
						$pdfs = CFS()->get('in_the_press');
						foreach ( $pdfs as $pdf ):
						?>
						<a href="<?php echo esc_html($pdf ['pdf_item']);?>" >
						<li class="media-item">
							<h4 class="media-date"><?php echo esc_html($pdf ['pdf_date']);?>-<?php echo esc_html($pdf['name_of_pdf']);?>
								<div class="media-color media-purple"></div>
							</h4>
							<p><?php echo esc_html($pdf['pdf_description']);?></p>
						</li>
					</a>
						<?php endforeach ?>
						</ul><!--media-article-list-->
					</div><!--info-field-->
					<?php endif; ?>
				</div>
			</section><!--media-article-section-->

			<div class="main-h3-container section-15px-padding">
				<h3>Yoga Outreach in the Media</h3>
			</div><!--main-h3-container-->
			<section class="media-article-section">
			<div class="section-15px-padding">
			<?php if(!empty(CFS()->get( 'in_the_media' ))): ?>
				<div class="info-dropdown media-heading-flex">
					<h3>Media</h3>
					<span>+</span>
				</div><!--info-dropdown-->

				<div class="info-field">
					<ul class="media-article-list show-videos">
					<?php
					$medias = CFS()->get('in_the_media');
					foreach ( $medias as $media ):
					?>
					<a href="<?php echo esc_html($media['media_link']); ?>">
						<li class="media-item">
							<h4 class="media-date"><?php echo esc_html($media ['date']);?>
								<div class="media-color media-blue"></div>
							</h4>
							<p><?php echo esc_html($media['content']);?></p>
						</li>
					</a>
					<?php endforeach ?>
					</ul><!--media-article-list-->
				</div><!--info-field-->
			<?php endif; ?>
			</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
