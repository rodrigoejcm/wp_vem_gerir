<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tema-vemgerir
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tema-vemgerir' ); ?></a>

	<div id="masthead" class="site-header">
		<div class="container">
			<div class="row" >
				<div class="site-branding col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo-header-image" src="<?php echo get_template_directory_uri() . '/img/LogoHeader.svg'; ?>" alt="VemGerir-logo-header">				
					</a>
				</div><!-- .site-branding -->
				
				<div class="col-md-7 col-md-offset-3">
					<div id="site-navigation" class="main-navigation">
						<!-- . <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tema-vemgerir' ); ?></button> -->
						<?php wp_nav_menu( array( 
													'theme_location' => 'primary', 
			 										'menu_id' => 'primary-menu',
			 										'menu_class' => '' ) ); ?>
					</div><!-- #site-navigation -->
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- #masthead -->

	<div id="content" class="site-content container">
