<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tema-vemgerir
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div class="site-main-intro col-md-12">
			<h1>passo a passo</h1>	
		</div>
		
		<h1>Juntos catalisando oportunidade</h2>
		
		<p>Criar negócios. Inovar. Transformar ideias em oportunidade. Realizar.</p>
		
		<div class="hr-div">
			<span>Clientes</span>
			<hr>
		</div>

		<div class="site-main-clientes row">
			<div class="site-main-clientes-descricao col-md-6">
				<div class="placeholder-descricao">
					lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</div>
			</div>
			<div class="site-main-clientes-depoimentos col-md-6">
				<div class="placeholder-depoimentos">
					
				</div>
			</div>
		</div>

		
		<hr class="hr-div-esp">

		<div class="hr-div">
			<span>Consultoria Individual</span>
			<hr>
		</div>
		<div class="site-main-consultoria row">
			<div class="site-main-consultoria-descricao col-md-12">
				<div class="placeholder-consultoria">
				</div>
			</div>
		</div>

		<hr class="hr-div-esp">

		<div class="hr-div">
			<span>Nosso Sitema</span>
			<hr>
		</div>

		<div class="site-main-sistema row">
			<div class="site-main-sistema-descricao col-md-4">
				<div class="placeholder-sistema-descricao">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>			
			</div>
			<div class="site-main-sistema-imagem col-md-8">
				<div class="placeholder-sistema-imagem">
				</div>	
			</div>
		</div>		

		<hr class="hr-div-esp">


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] DESABILITA sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
