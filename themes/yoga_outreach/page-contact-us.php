<?php 
/**
 * The template for displaying contact us page.
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area contact-us-content">
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image hero-text">
                <h1 class="header-title"><?php the_title(); ?></h1>
                <p>We can be reached at:</p>
                <p class="hero-phone"><?php echo CFS()->get( 'phone_number' ); ?></p>
            </header>
          <div class="contact-container">
            <div class="emailinquiry-section">
            <section class="email-inquiries">
                <h2>Email Inquiries</h2>
                <p>For staff directory, visit:</p>
                <a href="<?php echo get_page_link(69); ?>"class="button primary-button">who we are</a>
                </div>
                <div class="contactinfo-container">
                <div class="emailinfo-section">
                    <?php $fields= CFS()->get( 'emails' ); ?>  <!--variable to hold email from loop-->    

                    <?php if(!empty($fields)): ?>
                        <?php foreach( $fields as $field ): ?>
                            <div class="email-info">
                                <h5><?php echo $field['email_for']; ?></h5>
                                <p><?php echo $field['email']; ?></p>
                            </div><!--email-info-->
                        <?php endforeach; ?>
                    <?php endif; ?> 
                </div>
            </section><!--email-inuquiries-->
            <section class="info-section padding-on-sides">
            <?php $fields= CFS()->get( 'about_info' ); ?>  <!--variable to hold email from loop-->    
                <?php if(!empty($fields)): ?>
                    <?php foreach( $fields as $field ): ?>
                    
                    <div class="info-dropdown">
                        <h3><?php echo $field[ 'info_title' ]; ?></h3><span>+</span>
                    </div><!--info-dropdown-->
                    <div class="info-field">
                        <?php if(!empty($field['info_rows'])): ?>
                            <?php foreach( $field['info_rows'] as $row): ?>
                                <p class="info-text"><?php echo CFS()->get( 'info_field' ) ?></p>
                                <p class="info-text"><?php echo $row['info_field'] ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div><!--info-field-->
                    <?php endforeach; ?>
                <?php endif; ?> 
            </section><!--info-section-->
            </div><!--email-info-section-->
        </div> 
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
