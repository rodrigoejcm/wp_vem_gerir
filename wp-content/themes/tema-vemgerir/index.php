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
			
			<div 	class="parallax-window superheader-home" 
					data-parallax="scroll" >
			</div>
			
			<!-- ROW 1 -->
			
			<div class="area-visivel">
				<div class="double-row">
					<div class="row">
						<div class="col-md-12">
							<p class="texto texto-index">
								Somos empreendedores como você, e queremos compartilhar soluções personalizadas para cada tipo de negócio.Conhecemos os principais desafios, as lutas do dia a dia , e as dificuldades em ver o resultado no final do mês. 
								<span>Faça com a gente. Vem Gerir. </span>
							</p>
						</div>
					</div>	

					<!-- ROW 2 -->

					<div class="row">
						<div class="col-md-6 col-sm-12">
								<div class="info-box info-vem-criar">
									<div class="centralizar">
										<p class="texto texto-box">
											Se você quer iniciar seu próprio negócio, estaremos ao seu lado dando esse primeiro passo!
										</p>
										<a class="botao-box botao-box-verde-a" href="<?php echo get_permalink( get_page_by_title( 'Vem Criar' ) );?>">
											vem criar
										</a>

									</div>
									
								</div>
						</div>

						<div class=" col-md-6 col-sm-12">
							<div class="info-box info-vem-crescer">
									<div class="centralizar">
										<p class="texto texto-box">
											Se você tem uma empresa, vamos organizar seu negócio juntos!
										</p>
										<a class="botao-box botao-box-verde-b" href="<?php echo 
											get_permalink( get_page_by_title( 'Vem Crescer' ) );?>">
											vem crescer
										</a>

									</div>
									
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="intro-scroll-down">
						<div class="scroll-down">
							<img  src="<?=get_template_directory_uri().'/img/seta_banner_home.png' ?>">	
						</div>
					</div>	
				</div>
				


			</div>
			<!-- ROW 3 -->

			<br class="nao-responsivo"><br class="nao-responsivo"><br class="nao-responsivo"><br class="nao-responsivo"><br class="nao-responsivo">

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="header-texto">
						<p>Nossos Clientes</p>		
					</div>
					<div class="hr-div">
						<hr>
					</div>
				</div>
			</div>


			<!-- ROW 4 -->

			<br>

				
			<!-- ROW 5 -->


			

			<div class="row ">
				<div class="col-md-12">
					<div class="dep">
						<div class="dep-info">
							<div class="slider">
								<p class="nao-responsivo">	
									Sou dono de um estabelecimento que vende
									roupas femininas, e no início do meu empreendimento tive diversas dificuldades. Uma delas foi o relacionamento com o cliente. Afinal
									de contas, como manter o cliente pós venda? Após conhecer as funcionalidades da Vem Gerir, pude perceber a importância de fidelizá-las. Comecei a cadastrar todas as minhas clientes, dados
									pessoais, e-mail, telefone, histórico de compra, perfil, e com isso, tracei uma estratégia de marketing: todo mês eu enviava e-mails e
									SMS informando das novas coleções e promoções, e ainda dava desconto no mês de aniversário. Passados dois meses, constatei um aumento de 12% de lucro. Hoje tenho total controle da minha lista de clientes, o que cada uma compra e qual o seu perfil. Me ajuda
									bastante.
								</p>
								<p class="only-responsivo">
									Sou dono de uma loja de moda feminina, e no início tive diversas dificuldades. Uma delas foi como manter o cliente pós venda. Com a Vem Gerir, pude perceber a importância de fidelizá-las. Cadastrei todos os meus clientes, e tracei uma estratégia de marketing: todo mês eu informava as novidades, promoções e descontos. Após dois meses, constatei um aumento de 12% de lucro. Hoje tenho total controle da minha lista de clientes, o que cada uma compra e qual o seu perfil.
								</p>

							

							</div>
							<div class="slider">
								<p class="nao-responsivo">	
									
									Meu nome é Adriana, atualmente sou proprietária de uma lojinha de
									doces, todos os doces são artesanais e somente trabalho por
									encomendas. Logo no início era tudo uma bagunça, eu não conseguia
									separar minhas despesas pessoais das empresariais e não via o lucro no
									final do mês. Foi quando conheci o trabalho da Vem Gerir. Iniciei minha
									rotina gerencial, criei uma rotina para lançar minhas vendas, despesas e
									custos (fixos e variáveis) pelo menos três vezes por semana, e assim,
									conseguia enxergar a minha real situação financeira. Comecei a pensar
									numa forma de reduzir meus custos e o que mais me pesava era a conta
									de luz e de água. Na minha primeira consultoria da Vem Gerir,
									traçamos um plano para deixar a loja mais sustentável e conseguir reduzir
									meus custos em até 15% em três meses. Hoje eu recomendo a Vem Gerir
									para os empreendedores, que assim como eu, não tinham organização
									financeira.
								</p>
								<p class="only-responsivo">
									Sou proprietária de uma lojinha de doces artesanais. No início eu não conseguia separar minhas despesas pessoais das empresariais e não via o lucro no final do mês. Foi quando conheci a Vem Gerir. Na minha primeira consultoria, traçamos um plano para deixar a loja mais sustentável e consegui reduzir meus custos em até 15% em três meses. Hoje faço minha rotina gerencial, lançamento de vendas, despesas e custos toda semana, e enxerguei minha real situação financeira.
								</p>

							
							</div>
							<div class="slider">
								<p class="nao-responsivo">	
									Aos 35 anos resolvi abrir meu primeiro negócio, uma pequena
									padaria com produção de pães artesanais. Após algumas
									dificuldades, consegui me organizar financeiramente
									com a ajuda da consultoria da Vem Gerir. Porém, o ponto forte
									do meu vínculo com a Vem Gerir, foi a possibilidade de gerar metas
									para cada venda, despesa ou custo. Eu me desafiava e buscava
									uma forma de alcançar essa meta criada por mim. Com todo o
									apoio e organização financeira que a Vem Gerir me oferece,
									hoje fico feliz em dizer que amo trabalhar alcançando e
									superando minhas metas. Me motiva traçar um plano de
									estratégia financeira, sabendo que sou capaz de cumpri-lo.
									Obrigado Vem Gerir.
								</p>
								<p class="only-responsivo">
									Aos 35 anos resolvi abrir uma pequena padaria com produção de pães artesanais. Após algumas dificuldades, consegui me organizar com a consultoria da Vem Gerir. Com todo apoio e organização financeira oferecido, hoje amo trabalhar alcançando e superando minhas metas. Me motiva traçar um plano de estratégia financeira, sabendo que sou capaz de cumpri-lo.

								</p>


							</div>
						</div>
					</div>
				</div>

			</div>
		
			
			<br><br><br>

			<div class="row">
				<div class="col-md-12">
					<div class="header-texto">
						<p>Nosso Sistema</p>	
					</div>
					<div class="hr-div">
						<hr>
					</div>
				</div>
			</div>

			
			<br><br><br><br>

			<div class="site-main-sistema row">
				
				<div class="col-md-6">
					<div class="site-main-sistema-descricao">
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
				</div>
				
				<div class="col-md-6">
					<div class="site-main-sistema-imagem">
						
							<img class="img-responsive" src="<?=get_template_directory_uri().'/img/NOSSO-SISTEMA_home.jpg' ?>">
							
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
