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
		
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="logo-header-image" src="<?php echo get_template_directory_uri() . '/img/LogoHeader.svg'; ?>" alt="VemGerir-logo-header"></img>				
				</a>
			</div><!-- .site-branding -->
		
			<div class="site-fb">
				<a href="#" class="fa fa-facebook" aria-hidden="true">
				</a>
			</div>

			<div class="site-login">

			<nav>
			  <ul>
			    <li id="login">
			      <a id="login-trigger" href="#">
			        Área do Cliente
			      </a>
			      <div id="login-content">
			      



			        <form name="frm_login" id="frm_login" method="post" action="http://sistema.vemgerir.com.br/login.act.php?">
			          
						<div class="input-group input-group-sm">
								<span class="input-group-addon glyphicon glyphicon-user" id="vg-user">
								</span>
								<input id="login_input" name="login" type="text" class="form-control" placeholder="Usuário" aria-describedby="vg-user">
						</div>

						<div class="input-group input-group-sm">
								<span class="input-group-addon glyphicon glyphicon-asterisk" id="vg-password">
								</span>
								<input id="senha_input" type="password" name="senha" value="" type="text" class="form-control" placeholder="Senha" aria-describedby="vg-password">
						</div>

	         
			            <input class="submit-input" type="submit" id="submit" value="Log in">
			            
			         
			        </form>
			      </div>                     
			    </li>
			  </ul>
			</nav>
				<!-- <a href="#" class="dropdown-toggle" href="#" data-toggle="dropdown">Área do Cliente</a>
				<div class="dropdown-menu">
				
					<form action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
						<div class="input-group input-group-sm">
							<span class="input-group-addon glyphicon glyphicon-user" id="vg-user">
							</span>
							<input type="text" class="form-control" placeholder="Usuário" aria-describedby="vg-user">
					</div>

					<div class="input-group input-group-sm">
							<span class="input-group-addon glyphicon glyphicon-asterisk" id="vg-password">
							</span>
							<input type="text" class="form-control" placeholder="Usuário" aria-describedby="vg-password">
					</div>



					</form>
				</div> -->
              <!-- Login form here -->
            </div>
		
			<div id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tema-vemgerir' ); ?></button>
				<?php wp_nav_menu( array( 
											'theme_location' => 'primary', 
	 										'menu_id' => 'primary-menu',
	 										'menu_class' => '' ) ); ?>
			</div><!-- #site-navigation -->
		
			
	
	
		</div><!-- container -->
	</div><!-- #masthead -->

	<div id="content" class="site-content container">
