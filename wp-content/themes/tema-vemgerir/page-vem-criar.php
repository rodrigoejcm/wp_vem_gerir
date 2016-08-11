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

			<div class="site-main-planos">

			<div class="row">
					
					<div class="col-md-12">
					
						<div class="banner banner-criar">
							<div class="banner-texto">
								Queremos compartilhar com você os pontos necessários para criar seu negócio, mostrando de forma dinâmica e intuitiva quais são pilares centrais do empreendedorismo.
								<br>
								<span>Vem criar com a gente!</span>
							</div>
						</div>

					</div>

				</div>

			<div class="row sistema">

				<div class="col-md-4 sitema-caracteristicas">
					<div class="sitema-caracteristicas-titulo">
						<span>Disciplina 1</span>
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
						<span>Disciplina 2</span>
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
						<span>Disciplina 3</span>
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
				
				
		

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] Carrega sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
