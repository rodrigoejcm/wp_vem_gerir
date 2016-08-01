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

				<div class="tabela-planos verde-a">
					<table class="table-striped ">
						<thead>
							<tr>
								<th>
									<div class="nome-plano">PLANO 1</div>
									<hr class="hr-table">
									<div class="valor-plano">R$ 100,00</div>
									<div class="peridiocidade-plano">( por mŝs )</div>
								</th>
							</tr>	
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 1</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 2</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="cinza icone-propriedade">
										<i class="fa fa-times fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 3</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="cinza icone-propriedade">
										<i class="fa fa-times fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 4</div>
								</td>
							</tr>
						</tbody>
					</table>
					<a class="botao-tabela" href="#">
						Assinar 
					</a>	
				</div>
				<div class="tabela-planos verde-b">	
					<table class="table-striped">
						<thead>
							<tr>
								<th>
									<div class="nome-plano">PLANO 2</div>
									<hr class="hr-table">
									<div class="valor-plano">R$ 100,00</div>
									<div class="peridiocidade-plano">( por mŝs )</div>
								</th>
							</tr>	
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 1</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 2</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 3</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="cinza icone-propriedade">
										<i class="fa fa-times fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 4</div>
								</td>
							</tr>
						</tbody>
					</table>
					<a class="botao-tabela" href="#">
						Assinar 
					</a>
				</div>
				<div class="tabela-planos verde-c">
					<table class="table-striped">
						<thead>
							<tr>
								<th>
									<div class="nome-plano">PLANO 3</div>
									<hr class="hr-table">
									<div class="valor-plano">R$ 100,00</div>
									<div class="peridiocidade-plano">( por mŝs )</div>
								</th>
							</tr>	
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 1</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 2</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 3</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="icone-propriedade">
										<i class="fa fa-check fa-2x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">Propreidade 1</div>
								</td>
							</tr>
						</tbody>
					</table>
					<a class="botao-tabela" href="#">
						Assinar 
					</a>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] Carrega sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
