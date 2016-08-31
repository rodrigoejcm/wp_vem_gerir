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

		<div 	class="parallax-window superheader-vemcriar" 
					data-parallax="scroll" >
		</div>

			<div class="site-main-planos">

				<div class="row">
						
						<div class="col-md-12">
						
							<div class="banner banner-criar">
								<span class="cor-abe11e texto-realce ">Vem criar com a gente!</span>
								<div class="banner-texto ">
									Um time de consultores disponível para te ajudar a fazer o seu sonho sair do papel e se tornar realidade.
								</div>
							</div>

						</div>

				</div>

				<h1 class="vci-header">Vem Criar</h1>
				<span class="vci-sub-header texto-cor-verce-abe11e">Educação Empreendedora</span>

				<div class="row">
					<div class="col-md-12 ">
						
						<div class="vem-criar-planos">

							<div class="row">

								<div class="col-md-6 sem-margem-padrao" >
									<p class="texto">
										Vamos sentar com você e construir um plano de negócios para alavancar a sua ideia. Começamos conhecendo o produto/serviço e avançamos para discussões práticas das etapas necessárias a serem cumpridas para que sua empresa ganhe forma e, o mais importante, que ela consiga ser rentável!
									</p>
								</div>

								<div class="col-md-6 col-sm-12">
									<div class="row">
										<div class="descricao-resumo col-md-12">	
											<div class="icone-propriedade verde-c">
												<i class="fa fa-check fa-3x" aria-hidden="true"></i>
											</div>
											<div class="descricao-propriedade">
												Consultor a distância mensal
											</div>

										</div>
									</div>
									<div class="row">
										<div class="descricao-assinatura col-md-12">
											<div class="descricao-assine">
												<a  href="#" class="descricao-assine-botao botao-abe11e">
													<p>Assine</p>
												</a>
											</div>
											<div class="descricao-preco valor-plano texto-cor-verce-abe11e ">
												R$ 69,90
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<br><br><br><br>

				<!-- <div class="row">
					<div class="col-md-12">
						<div class="header-texto">
							<p >Nossos módulos</p>	
						</div>
						<div class="hr-div">
							<hr>
						</div>
					</div>
				</div>

				<br><br><br>

				<div class="sistema">
					<div class="row">
						<div class="col-md-6">
							<div class="conteudo-vci">
								<div class="conteudo-vci-icone">
									<img src="<?=get_template_directory_uri().'/img/M1_planejamentoestrategico.png' ?>" >
									</img>
								</div>
								<div class="conteudo-vci-disci">
									<h1 class="vci-header-criar">Planejamento Estratégico</h1>
								</div>
								<div class="conteudo-vci-ch">
									<h1 class="vci-header-criar-ch">Carga Horária: 6 horas</h1>
								</div>
								<div class="conteudo-vci-desc">
									<p>
										O que o empreendedor precisa saber sobre
										estratégia? Nesse módulo iremos mostrar
										que ter visão estratégica é essencial para a
										criação do negócio.
										Muitas vezes temos uma ideia boa e
										resolvemos colocá-la em prática, porém, sem
										observar os fatores externos ou sem estar
										preparado para receber uma grande
										demanda logo no início, abalando nossas
										estruturas, causando prejuízo e nos
										desmotivando.
										Aprenda a planejar de forma estratégica o
										seu negócio.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="conteudo-vci">
								<div class="conteudo-vci-icone">
									<img src="<?=get_template_directory_uri().'/img/M2_planovendas.png' ?>" >
								</div>
								<div class="conteudo-vci-disci">
									<h1 class="vci-header-criar">Estratégia e plano de vendas</h1>
								</div>
								<div class="conteudo-vci-ch">
									<h1 class="vci-header-criar-ch">Carga Horária: 6 horas</h1>
								</div>
								<div class="conteudo-vci-desc">
									<p>
									Quando falamos de vendas, estamos
									tratando de um dos pilares mais
									importantes do negócio. Nesse módulo
									iremos ensinar as diferentes estratégias
									de venda para comercialização de
									produto ou serviço.
									Após a euforia inicial de ter criado um
									negócio, nossas energias devem ser
									concentradas nas vendas. Devemos nos
									perguntar: “Será que alguém vai pagar
									por isso?” ou “Se eu fosse cliente, eu
									pagaria por isso?”.
									Aprenda as estratégias de venda para
									alavancar seu negócio.
									</p>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-6">
							<div class="conteudo-vci">
								<div class="conteudo-vci-icone">
										<img src="<?=get_template_directory_uri().'/img/M3_marketing.png' ?>" >
								</div>
								<div class="conteudo-vci-disci">
									<h1 class="vci-header-criar">Noções básicas de Marketing</h1>
								</div>
								<div class="conteudo-vci-ch">
									<h1 class="vci-header-criar-ch">Carga Horária: 6 horas</h1>
								</div>
								<div class="conteudo-vci-desc">
									<p>
									Nesse módulo iremos mostrar que o
									Marketing é uma disciplina que engloba o
									planejamento estratégico de um
									produto, desde sua concepção à pesquisa
									de mercado, os canais de distribuição até
									as vendas e a comunicação.
									Vamos destacar pontos importantes do
									Marketing de Relacionamento e
									estratégias para fidelização do cliente no
									pós venda.
									É o momento em que percebemos que o
									Marketing é uma espécie de espinha
									dorsal do negócio.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="conteudo-vci">
								<div class="conteudo-vci-icone">
										<img src="<?=get_template_directory_uri().'/img/M4_financas.png' ?>" >
								</div>
								<div class="conteudo-vci-disci">
									<h1 class="vci-header-criar">Finanças<br>básicas</h1>
								</div>
								<div class="conteudo-vci-ch">
									<h1 class="vci-header-criar-ch">Carga Horária: 6 horas</h1>
								</div>
								<div class="conteudo-vci-desc">
									<p>
									Para criar qualquer tipo de
									empreendimento, independente do
									segmento escolhido, o empreendedor
									deve ter conhecimento básico de
									finanças.
									Nesse módulo iremos trabalhar o
									conhecimento básico financeiro para
									o empreendedor conseguir planejar e
									administrar o fluxo de caixa do seu
									negócio.
									Vamos destacar a importância de
									termos um controle gerencial
									financeiro para obter lucro e detalhar
									nossos custos e despesas.
									</p>
								</div>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-6">
							<div class="conteudo-vci">
								<div class="conteudo-vci-icone">
										<img src="<?=get_template_directory_uri().'/img/M5_gestaopessoas.png' ?>" >
								</div>
								<div class="conteudo-vci-disci">
									<h1 class="vci-header-criar">Gestão de Pessoas</h1>
								</div>
								<div class="conteudo-vci-ch">
									<h1 class="vci-header-criar-ch">Carga Horária: 6 horas</h1>
								</div>
								<div class="conteudo-vci-desc">
									<p>
									No módulo de Gestão de Pessoas iremos
									trabalhar a importância de sabermos qual a
									essência do nosso negócio. Por que criamos?
									Para quem criamos? Qual o nosso desafio?
									Para responder essas perguntas é
									importante sabermos qual a cultura
									organizacional do nosso negócio.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="conteudo-vci">
								<div class="conteudo-vci-icone">
										<img src="<?=get_template_directory_uri().'/img/M6_criatividade.png' ?>" >
								</div>
								<div class="conteudo-vci-disci">
									<h1 class="vci-header-criar">Criatividade e inovação</h1>
								</div>
								<div class="conteudo-vci-ch">
									<h1 class="vci-header-criar-ch">Carga Horária: 6 horas</h1>
								</div>
								<div class="conteudo-vci-desc">
									<p>
									No módulo de Criatividade e Inovação
									vamos discutir os conceitos básicos e
									debater a diferença entre Criatividade
									e Inovação.
									Teremos a missão de transformar a
									complexa análise de tendência em
									algo prazeroso e fácil para nos
									anteciparmos no mercado.
									Vamos estudar os comportamentos e
									expressões individuais, e como esses
									são impactantes na geração de ideias.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] Carrega sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
