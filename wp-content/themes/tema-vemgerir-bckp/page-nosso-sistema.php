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

	<div id="primary" class="nhuit-area">
		<main id="main" class="site-main" role="main">
			
			<div class="row ">
				<div class="col-md-12">
					<div class="sistema-como-funciona">
						<div class="esq">
							<p class="texto">
								Conheça a plataforma que ajuda você a se organizar, conquistar novos clientes e reduzir despesas!
							</p>
						</div>
						<img class="como-funciona-gif" src="<?=get_template_directory_uri().'/img/animacao.gif' ?>" ></img>
							
						
						
					
					</div>
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-md-12">
					<div class="header-texto">
						<p>Algumas facilidades do nosso sistema</p>		
					</div>
					<div class="hr-div">
						<hr>
					</div>
				</div>
			</div>


			<br>
			<br>

			<div style="clear:both"></div>

			<div class="row">
					
				<div class="col-md-6">
					<div class="conteudo-vci-sistema">
						<h1 class="vci-header-sistema">Painel Gerencial</h1>
					</div>
					
					<div class="conteudo-vci-desc-sistema">
						<p>
						Tenha uma visão geral de todos os processos que acontecem na sua empresa. Por aqui você tem o controle das suas vendas e despesas, o que falta receber e pagar, e quantos clientes novos você cadastrou.
						</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="conteudo-vci">
						<div class="conteudo-vci-print icone-ger">
							<img  src="<?=get_template_directory_uri().'/img/prt-produtos.png' ?>">	
						</div>
					</div>
				</div>

			</div>

			<div class="row">
					
				<div class="col-md-6">
					<div class="conteudo-vci-sistema">
						<h1 class="vci-header-sistema">Cadastros</h1>
					</div>
					
					<div class="conteudo-vci-desc-sistema">
						<p>
						Em um só lugar você pode cadastrar tudo que seu negócio precisa para funcionar. Clientes e funcionários, produtos e serviços, temos até uma área para cadastro das formas de pagamento que seu estabelecimento trabalha.
						</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="conteudo-vci">
						<div class="conteudo-vci-print icone-ger">
							<img  src="<?=get_template_directory_uri().'/img/prt-rotina.png' ?>">
						</div>
					</div>
				</div>

			</div>
			<div class="row">
					
				<div class="col-md-6">
					<div class="conteudo-vci-sistema">
						<h1 class="vci-header-sistema">Rotina Gerencial</h1>
					</div>
					
					<div class="conteudo-vci-desc-sistema">
						<p>
							Tire o melhor do nosso sistema mantendo seu dia organizado. Realizando o passo a passo que a Vem Gerir propõe, você verá como é fácil acompanhar a sua rotina.
						</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="conteudo-vci">
						<div class="conteudo-vci-print icone-ger">
							<img  src="<?=get_template_directory_uri().'/img/prt-painel.png' ?>">	
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
