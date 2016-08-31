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

	<div id="primary" class="nhuit-area nosso-sistema">
		<main id="main" class="site-main" role="main">
			
			<div class="row ">
				<div class="col-md-12">
					<div class="sistema-como-funciona">
						<div class="esq">
							<p class="texto">
								Conheça a plataforma
								<br>
								que ajuda você a se
								<br>
								<span>organizar</span>, <span>conquistar</span>
								<br>
								<span>novos clientes</span>
								<br>
								e <span>reduzir despesas</span> !
							</p>
						</div>
						<img class="como-funciona-gif" src="<?=get_template_directory_uri().'/img/animacao.gif' ?>" ></img>
							
						
						
					
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>


			<div class="row">
				<div class="col-md-12">
					<div class="header-texto ht-sistema" >
						<p>Algumas facilidades do nosso sistema</p>		
					</div>
					<div class="hr-div hr-div-sistema">
						<hr>
					</div>
				</div>
			</div>


			<br>
			<br><br>
			<br>




			<div class="row central400">
					
				<div class="col-md-6 col-xs-12 central400">
					<div class="conteudo-vci-sistema vci-rotina">
						<div class="conteudo-vci-icone-sistema">
							<img src="<?=get_template_directory_uri().'/img/rotina.png' ?>" >
							</img>
						</div>
						<div class="conteudo-vci-disci-sistema">
							<h1 class="vci-header-criar">Rotina Gerencial</h1>
						</div>

						<div class="conteudo-vci-desc-sistema">
							<p>
								Tire o melhor do nosso sistema mantendo seu dia organizado. Realizando o passo a passo que a Vem Gerir propõe, você verá como é fácil acompanhar a sua rotina.
							</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 col-xs-12">
					<div class="conteudo-vci-sistema-imagem">
						<div class="conteudo-vci-print icone-ger">
							<img  src="<?=get_template_directory_uri().'/img/NOSSO-SISTEMA_RotinaGerencial.png' ?>">	
						</div>
					</div>
				</div>

			</div>
			<br><br><br><br>
			<div class="row central520">
					
				<div class="col-md-6 col-xs-12">
					<div class="conteudo-vci-sistema vci-painel">
						<div class="conteudo-vci-icone-sistema">
							<img src="<?=get_template_directory_uri().'/img/painel.png' ?>" >
							</img>
						</div>
						<div class="conteudo-vci-disci-sistema">
							<h1 class="vci-header-criar">Painel Gerencial</h1>
						</div>

						<div class="conteudo-vci-desc-sistema">
							<p>
								Tenha uma visão geral de todos os processos que acontecem na sua empresa. Por aqui você tem o controle das suas vendas e despesas, o que falta receber e pagar, e quantos clientes novos você cadastrou.
							</p>
						</div>
					</div>
					
				</div>

				<div class="col-md-6 col-xs-12">
					<div class="conteudo-vci-sistema-imagem">
						<div class="conteudo-vci-print icone-ger">
							<img  src="<?=get_template_directory_uri().'/img/NOSSO-SISTEMA_PainelGerencial.png' ?>">	
						</div>
					</div>
				</div>

			</div>
			<br><br><br><br>
			<div class="row central400">
					
				<div class="col-md-6 col-xs-12">
					<div class="conteudo-vci-sistema vci-cadastro">
						<div class="conteudo-vci-icone-sistema">
							<img src="<?=get_template_directory_uri().'/img/cadastro.png' ?>" >
							</img>
						</div>
						<div class="conteudo-vci-disci-sistema">
							<h1 class="vci-header-criar">Cadastros</h1>
						</div>

						<div class="conteudo-vci-desc-sistema">
							<p>
								Em um só lugar você pode cadastrar tudo que seu negócio precisa para funcionar. Clientes e funcionários, produtos e serviços, temos até uma área para cadastro das formas de pagamento que seu estabelecimento trabalha.
							</p>
						</div>
					</div>
					
				</div>

				<div class="col-md-6 col-xs-12">
					<div class="conteudo-vci-sistema-imagem">
						<div class="conteudo-vci-print icone-ger">
							<img  src="<?=get_template_directory_uri().'/img/NOSSO-SISTEMA_Cadastro.png' ?>">	
						</div>
					</div>
				</div>

			</div>


			<br><br><br>

			
			
			<br><br><br>

		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// [RODRIGO] Carrega sidebar
// posts e comentarios recentes, metas e categorias
//get_sidebar();
get_footer();
