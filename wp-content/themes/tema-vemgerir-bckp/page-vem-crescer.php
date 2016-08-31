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
					
					<div class="banner banner-crescer">
						<div class="banner-texto">
							Contas a pagar, dinheiro pra receber, funcionários e fornecedores pra controlar, atendimento ao cliente... Difícil gerenciar tudo isso sozinho, não é? Foi pensando em você que criamos nossas soluções para simplificar a sua vida.
							<br>
							<span>Vem crescer com a gente!</span>
						</div>
					</div>

				</div>

			</div>

			<h1 class="vci-header">Vem Crescer</h1>
			<span class="vci-sub-header texto-cor-verce-3BD231">consultor on-line</span>

			<div class="row">
				<div class="col-md-12 ">
					
					<div class="vem-crescer-planos row">
						<div class="col-md-6">
							<p class="texto">
								Com um consultor online, você vai ter acesso a conteúdos mais importantes para o seu negócio e, com pequenas mudanças no seu dia a dia, você já vai conseguir ver o seu dinheiro no final do mês. Parece mágica, né? Mas não é. 
								Vem gerir com a gente. É simples.
							</p>
						</div>

						<div class="col-md-6">
							<div class="row">
								<div class="descricao-resumo col-md-12">	
									<div class="icone-propriedade verde-b">
										<i class="fa fa-check fa-3x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">
										Sistema Gerencial
									</div>

									<div class="icone-propriedade verde-b">
										<i class="fa fa-check fa-3x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade ">
										Consultor à distância mensao
									</div>

									<div class="icone-propriedade verde-b">
										<i class="fa fa-check fa-3x" aria-hidden="true"></i>
									</div>
									<div class="descricao-propriedade">
										Educação Gerencial à distância
									</div>
								</div>
							</div>

							<div class="row">
								<div class="descricao-assinatura col-md-12">
									
									<div class="descricao-assine">
										<a href="#" class="descricao-assine-botao botao-3BD231">
											<p>Assine!</p>
										</a>
									</div>
									<div class="descricao-preco valor-plano texto-cor-verce-3BD231 ">
										R$ 79,90 <span>( por mes )</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br>

			<h1 class="vci-header">Vem Crescer</h1>
			<span class="vci-sub-header texto-cor-verce-1D9649">consultor presencial</span>
			<div class="row">
				<div class="col-md-12 ">
					
					<div class="vem-crescer-planos">

						<div class="row">

							<div class="col-md-6">
								<p class="texto">
									Você não sabe nem por onde começar a organizar toda a sua vida? Acha que somente o online não vai ser suficiente? Pois bem, nós entendemos e temos a solução perfeita pra você. Que tal um consultor especializado no seu segmento pra te auxiliar a tomar decisões e te guiar para o sucesso? A Vem Gerir tem consultores que vão até você para entender suas principais dificuldades e te ajuda a encontrar os melhores caminhos. Agende uma visita e vem gerir com a gente. É simples.
								</p>
							</div>

							<div class="col-md-6">
								<div class="row">
									<div class="descricao-resumo col-md-12">	
										<div class="icone-propriedade verde-a">
											<i class="fa fa-check fa-3x" aria-hidden="true"></i>
										</div>
										<div class="descricao-propriedade">
											Sistema Gerencial
										</div>
										<div style="display:block">
											<div class="icone-propriedade verde-a">
												<i class="fa fa-check fa-3x" aria-hidden="true"></i>
											</div>
											
											<div class="descricao-propriedade ">
												Consultor presencial mensal <span>(somente grande rio)</span>
											</div>
										</div>	
										<div class="icone-propriedade verde-a">
											<i class="fa fa-check fa-3x" aria-hidden="true"></i>
										</div>
										<div class="descricao-propriedade">
											Educação Gerencial à distância
										</div>
									</div>
								</div>
								<div class="row">
									<div class="descricao-assinatura col-md-12">
										<div class="descricao-assine">
											<a href="#" class="descricao-assine-botao botao-1D9649">
												<p>Assine!</p>
											</a>
										</div>
										<div class="descricao-preco valor-plano texto-cor-verce-1D9649 ">
											R$ 79,90 <span>( por mes )</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
