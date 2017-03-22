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
          <button class="signin-button"><a href="">sign in</a></button>
          </div>
          
        </nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
