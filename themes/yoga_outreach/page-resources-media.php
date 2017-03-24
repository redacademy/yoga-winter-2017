<?php 
/*
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="general-template-section">
				<h1 class="page-title-header"><?php the_title(); ?></h1>
				<div class="general-button-container">
					<a href ="resources" class="general-button grey-button">Research</a>
					<a href ="#"class = "general-button teal-button">Media and Videos</a>
				</div>
			</header><!--general-template-section-->
			<div class="main-h3-container section-15px-padding">
                <h3>Media & Video</h3>
                <p>For Inquiries, email communications@yogaoutreach.com</p>
            </div><!--main-h3-container-->
			<section class="media-article-section section-15px-padding">
				<div class="info-dropdown media-heading-flex">
					<h3>In the Media</h3>
					<span>+</span>
						<p class="research-paper-para">Research papers & interesting articles about trauma-sensitive yoga.</p>
				</div><!--info-dropdown-->
			
				<div class="info-field">
					<ul class="media-article-list show-videos">
					<?php 
					$medias = CFS()->get('in_the_media');
					foreach ( $medias as $media ):
					?>
						<li class="media-item">
							<h4 class="media-date"><?php echo $media ['date'];?>
								<div class="media-color media-blue"></div>
							</h4>
							<p><?php echo $media['content'];?></p>
						</li>
					<?php endforeach ?>
					</ul><!--media-article-list-->
					<p class="read-more">Read More</p>
				</div><!--info-field-->
				<div class="info-dropdown">
					<h3>In the Press</h3>
					<span>+</span>
				</div><!--info-dropdown-->
				<div class="info-field">
					<ul class="press-article-list">
					<?php 
					$articles = CFS()->get('in_the_press');
					foreach ( $articles as $article ):
					?>
						<li class="press-item">
							<h4 class="media-date"><?php echo $article ['date'];?>
								<div class="media-color media-purple"></div>
							</h4>
							<p><?php echo $article ['content'];?></p>
						</li>
					<?php endforeach ?>
					</ul><!--media-article-list-->
				</div><!--info-field-->
			</section><!--media-article-section-->
			<section class="video-list-section">
				<h2 class="video-list-heading">Why Yoga Outreach</h2>
				<ul class="media-video-list">
					<?php 
					$videos = CFS()->get('video_list');
					foreach ( $videos as $video ):
					?>
					<li class="video-item">
						<h3><?php echo $video ['title']; ?></h3>
						<span><?php echo $video['video_embed_link'];?></span>
					</li>
					<?php endforeach ?>
				</ul>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
