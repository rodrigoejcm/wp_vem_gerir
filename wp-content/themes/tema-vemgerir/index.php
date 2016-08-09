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
		
		<!-- ROW 1 -->
		
		<div class="row">
			<div class="col-md-12">
				<p class="texto">
					Nós, como empreendedores que somos, sabemos dos principais desafios, das lutas de todos os dias e da dificuldade de ver o seu resultado no final do mês. Nós nos identificamos com você e criamos soluções personalizadas pra cada tipo de negócio.
				</p>
			</div>
		</div>	

		<!-- ROW 2 -->

		<div class="row">
			<div class="col-md-6">
					<div class="info-box">
						<div class="centralizar">
							<p class="header header-box">Vem</p>
							<p class="header header-box">criar!</p>	
							<p class="texto texto-box">
								Se você quer iniciar seu próprio negócio, a Vem Gerir te dá o suporte
								necessário para você ver que empreender é simples!
							</p>
						</div>
					</div>
			</div>

			<div class=" col-md-6">
				<div class="info-box">
						<div class="centralizar">
							<p class="header header-box">Vem</p>
							<p class="header header-box">crescer!</p>	
							<p class="texto texto-box">
								Se você tem uma empresa,organizamos seu negócio passo a passo!
							</p>
						</div>
				</div>
			</div>
		</div>

		<!-- ROW 3 -->

		<div class="row">
			<div class="col-md-12">
				<h1>É simples.<h1/>	
			</div>
		</div>

		<!-- ROW 4 -->


		<div class=" hr-div">
			<span>Clientes</span>
			<hr>
		</div>

		
		<!-- ROW 5 -->

		<div class="site-main-clientes row">
			<div class="site-main-clientes-descricao col-md-6">
				<p class="texto">
					Você tem o seu próprio negócio, trabalha 24 horas por dias e mesmo assim não consegue ver a cor do dinheiro? Uma rotina de trabalho pesada, contas a pagar, dinheiro pra receber, funcionários e fornecedores pra controlar, atendimento ao cliente... Difícil gerenciar tudo isso sozinho, não é? Foi pensando em você que criamos nossas soluções para simplificar a sua vida. Vem gerir com a gente!
				</p>
			</div>
			<div class="site-main-clientes-depoimentos col-md-6">
				
				<div class="testimonial-quote group">
			        <img src="<?php bloginfo('template_directory'); ?>/img/renato.jpg">
			        <div class="quote-container">
			            <blockquote>
			                <p>	Seu Renato, após vender
								pastéis por cinco anos sem ver a
								cor do dinheiro, viu sua vendinha
								crescer após contratar a Vem
								Gerir. Sabe certinho quanto ainda
								tem pra gastar até o final do mês”</p>
			            </blockquote>  
			            <cite><span>Seu Renato</span><br>
			                Livreiro
			            </cite>
			        </div>
			    </div>

			</div>
		</div>

		<!-- ROW 6 -->
		
		<hr class="hr-div-esp">

		<div class="hr-div">
			<span>Nosso Sitema</span>
			<hr>
		</div>

		<div class="site-main-sistema row">
			<div class="site-main-sistema-descricao col-md-4">
				<p class="texto">
					A Vem Gerir é muito mais do
					que uma ferramenta para
					controlar o seu dinheiro.
				</p>
				<p class="texto">
					É uma plataforma que te
					ajuda a criar uma rotina
					gerencial, a controlar suas
					finanças e suas principais
					tarefas
				</p>			
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
