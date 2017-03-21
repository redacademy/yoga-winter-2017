<?php 
/*Template Name: Resources Media

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section">
				<h1 class ="page-title-header"><?php the_title(); ?></h1>
				<div class ="general-button-container">
					<button class = "general-button grey-button">Research</button>
					<button class = "general-button teal-button">Media and Videos</button>
				</div>
			</header><!--general-template-section-->
			<div class ="main-h3-container section-15px-padding">
                <h3>Media & Video</h3>
                <p>For Inquiries, email communications@yogaoutreach.com</p>
            </div><!--main-h3-container-->
			<section class ="media-article-section section-15px-padding">
				<div class ="info-dropdown">
					<h3>In the Media</h3>
					<span>+</span>
				</div><!--info-dropdown-->
				<div class ="info-field">
					<ul class ="media-article-list">
					<?php 
					$medias = CFS()->get('in_the_media');
					foreach ( $medias as $media ):
					?>
						<li class ="media-item">
							<h4><?php echo $media ['date'];?></h4>
							<p><?php echo $media['content'];?></p>
						</li>
					<?php endforeach ?>
					</ul><!--media-article-list-->
				</div><!--info-field-->
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
