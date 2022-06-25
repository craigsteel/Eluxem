<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eluxem
 */

// No direct access, please
if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>

<!doctype html>
	<html <?php language_attributes(); ?> class="no-svg">
		<head>
			<title><?php bloginfo( 'name' ); wp_title(); ?></title>
			<meta name="description" content="<?php bloginfo( 'description' ); ?>">
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link rel="apple-touch-icon" sizes="57x57" href="/eluxem-logo-mark-icon/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="/eluxem-logo-mark-icon/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="/eluxem-logo-mark-icon/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="/eluxem-logo-mark-icon/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="/eluxem-logo-mark-icon/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="/eluxem-logo-mark-icon/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="/eluxem-logo-mark-icon/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="/eluxem-logo-mark-icon/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="/eluxem-logo-mark-icon/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="/eluxem-logo-mark-icon/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/eluxem-logo-mark-icon/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="/eluxem-logo-mark-icon/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/eluxem-logo-mark-icon/favicon-16x16.png">
			<link rel="manifest" href="/eluxem-logo-mark-icon/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="/eluxem-logo-mark-icon/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">
			<?php wp_head(); ?>
		</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eluxem' ); ?></a>

	<header id="masthead" class="site-header">

			<nav id="menu" class="top-menu">

				<span class="menu-top-left"><?php eluxem_social_icons_output(); ?></span>

				<?php wp_nav_menu( array( 
					'theme_location' => 'top-right', 
					'menu_id'	 	 => 'menu-right',
					'menu_class'	 => 'menu-top-right',
					'container' 	 =>  false
					) ); 
				?>
															
			</nav><!-- #site-navigation -->
				<?php get_search_form(); ?>
		
					<div class="site-branding">
						 <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/images/eluxem-logo-color.svg" alt="eluxem logo color"></a>
					</div><!-- .site-branding -->
		
					<div class="site-branding-white">		
						<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/images/eluxem-logo-white.svg" alt="eluxem logo white"></a>		
					</div><!-- .site-branding-white -->
								
						<?php if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
							$eluxem_description = get_bloginfo( 'description', 'display' );
						if ($eluxem_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $eluxem_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>

						<button class="menu-toggle hamburger hamburger--collapse" aria-controls="mobile-menu" aria-expanded="false">    
								
							<span class="hamburger-inner"></span>

						</button>

							<nav id="site-navigation" class="main-navigation">

								<?php wp_nav_menu( array( 
									'theme_location' => 'primary', 
									'menu_id'	 	 => 'primary-menu',
									'container' 	 =>  false
									) ); 
								?>

									<?php wp_nav_menu( array( 
									'theme_location' => 'mobile', 
									'menu_id'	 	 => 'mobile-menu',
									'container' 	 =>  false
									) ); 
								?>
					
							</nav><!-- #site-navigation -->
							
	</header><!-- #masthead -->
	
