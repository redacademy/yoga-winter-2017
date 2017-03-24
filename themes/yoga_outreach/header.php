<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>hello</a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<span class="responsive-menu">
				    <i class="fa fa-bars" aria-hidden="true"></i>
		    	</span>
            <div class="menu-dropdown">
              <div class="wrapper">
            <form class="form-signin">       
              <h3>username</h3>
              <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
              <h3>password</h3>
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
              <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
              </label>
              <button class="btn btn-lg btn-primary btn-block dropdown-btn" type="submit"><a href="">sign in</a></button>   
            </form>
          </div>
              <ul class="dropdown-menu-list">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                  <fieldset>
                    <button class="search-submit">
                      <span class="icon-search" aria-hidden="true">
                        <i class="fa fa-search"></i>
                      </span>
                    </button>
                    <label>
                      <input type="search" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
                      <span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
                    </label>
                  </fieldset>
                </form>
                <button class="signin-button-dropdown"><a href="">sign in</a></button>
               
                <li>
                
                  <h2>Training</h2>
                  <img class="cross" src="<?php echo get_template_directory_uri(); ?>/images/cross_icon.png"/>
                </li>
                <li>
                  <h2>Get involed</h2>
                  <img class="cross" src="<?php echo get_template_directory_uri(); ?>/images/cross_icon.png"/>
                </li>
                <li>
                  <h2>Events</h2>
                </li>
                <li>
                  <h2>About us</h2>
                  <img class="cross" src="<?php echo get_template_directory_uri(); ?>/images/cross_icon.png"/>
                </li>
                <li>
                  <h2>Resources</h2>
                  <img class="cross" src="<?php echo get_template_directory_uri(); ?>/images/cross_icon.png"/>
                </li>
                <li>
                  <h2>Blog</h2>
                </li>
              </ul>
            </div>
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu') ); ?>
          <div id="header-logo">
            <div class="logo-image">
              <?php show_easylogo(); ?>
            </div>
					</div>
          
          <div class="signin-section">
            <div class="wrapper">
            <form class="form-signin">       
              <h3>username</h3>
              <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
              <h3>password</h3>
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
              <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
              </label>
              <button class="btn btn-lg btn-primary btn-block" type="submit"><a href="">sign in</a></button>   
            </form>
          </div>
          <button class="signin-button"><a href="">sign in
    <!--<?php if (is_user_logged_in()) : ?>
  <a href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a>
    <?php endif;?>
    <?php $current_user = wp_get_current_user();
if ( is_user_logged_in() ) {
    echo 'welcome, ' . $current_user->user_login;
} else {
    echo 'Welcome, visitor!';
}?>-->
</a></button>
          </div>
          
        </nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
