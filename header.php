<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nctsa
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/styles/style.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/styles/mobileNav.css"/>

</head>

<body <?php body_class(); ?>>
<div class="mobile-container" data-effect="mobile-slide">

			<nav class="show-for-medium-down" role="navigation">
				<input type="checkbox" id="mobile-menu" class="mobile-toggle"/>
			        <label class="mobile-toggle-label" for="mobile-menu">
			            <span class="mobile-toggle-icon"></span>
			        </label>
			    <div class="mobile-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); ?>
				</div>
			</nav>
	
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nctsa' ); ?></a>



			<header class="header" role="banner">
				<nav class="main-navigation show-for-large-up" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>
				


				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png"></a>

				</div><!-- .site-branding -->
			</header><!-- #masthead -->




			<div id="content" class="site-content">
