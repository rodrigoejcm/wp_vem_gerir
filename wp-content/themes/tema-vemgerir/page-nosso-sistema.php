<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tema-vemgerir
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="hmargem">Como Funciona</h1>
			<div class="row sistema">

				<div class="col-md-4 sitema-caracteristicas">
					<div class="sitema-caracteristicas-titulo">
						<span>Rotina Gerencial</span>
					</div>
					<div class="sitema-caracteristicas-icone">
						<img src="holder.js/200x200" class="img-circle">
					</div>
					<div class="sitema-caracteristicas-descricao">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</span>
						<hr class="sitema-caracteristicas-descricao-borda"></span>
					</div>
				</div>
			
				<div class="col-md-4 sitema-caracteristicas">
					<div class="sitema-caracteristicas-titulo">
						<span>Lista de Tarefas</span>
					</div>
					<div class="sitema-caracteristicas-icone">
						<img src="holder.js/200x200" class="img-circle">
					</div>
					<div class="sitema-caracteristicas-descricao">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</span>
						<hr class="sitema-caracteristicas-descricao-borda"></span>
					</div>
				</div>
			
				<div class="col-md-4 sitema-caracteristicas">
					<div class="sitema-caracteristicas-titulo">
						<span>Fluxo de Caixa</span>
					</div>
					<div class="sitema-caracteristicas-icone">
						<img src="holder.js/200x200" class="img-circle">
					</div>
					<div class="sitema-caracteristicas-descricao">
						<span>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</span>
						<hr class="sitema-caracteristicas-descricao-borda"></span>
					</div>
				</div>
				
				<div class="sistema-como-funciona col-md-12 ">
					<div>
						<img class="como-funciona-gif" src="http://www.vemgerir.com.br/estilo/imagens/03.gif"></img>
					</div>
				</div>

			</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] Carrega sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
