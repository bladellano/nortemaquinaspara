	
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<div class="container">

		<a class="navbar-brand js-scroll-trigger" href="#topo">NORTE MÁQUINAS</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#empresa">Empresa</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="?i=produtos">Produtos</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#servicos">Serviços</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#feiras">Feiras</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#representacoes">Representações</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#fale-conosco">Fale Conosco</a></li>

			</ul>

			<!-- <button class="btn btn-success my-2 my-sm-0" type="submit">Webmail</button> -->
			<!-- <button  type="submit">Webmail</button> -->
			<a class="btn btn-success my-2 my-sm-0" href="http://webmail.nortemaquinaspara.com.br" target="_blank">Webmail</a>

		</div>

	</div>
</nav> <!-- fim navbar -->




<!-- fim formulário orçamento -->

<!-- redes sociais vertical -->
<div class="rede sr-logo">  
	<div id="facebook"><a href="https://www.facebook.com/NorteMaquinas/" target="_blank" class="fab fa-facebook-f"></a></div>
	<div id="youtube"><a href="https://www.youtube.com/channel/UCkgpJCOuJwAqUXQo3KJALOA" target="_blank" class="fab fa-youtube"></a></div>
	<div id="instagram"><a href="https://www.instagram.com/p/Bu4iwFyHhm8/" target="_blank" class="fab fa-instagram"></a></div>
	<div id="whatsapp"><a href="https://api.whatsapp.com/send?phone=55988554723" target="_blank" class="fab fa-whatsapp"></a></div>
</div>
<!-- fim - redes sociais vertical -->

<section id="topo"></section>

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="images/imagens(1).jpeg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/imagens(2).jpeg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/imagens(3).jpeg" alt="Third slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/imagens(4).jpg" alt="Fourth slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- fim carousel -->

<!-- empresa -->
<section id="empresa" class="sr-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="">Empresa</h2><hr><p class="text-justify">

					<p>Fundada no ano de 1986, através do Sr. Paulo Ferreira, a Norte Máquinas esta localizada na cidade de Ananindeua/PA destaca-se na representação e distribuição máquinas e suprimentos p/ indústria em geral (madeira, metal-mecânica, espuma, alimenticia e etc.).</p>

					<h4>Nossos princípios e valores</h4>
					<ul>
						<li>Plena satisfação dos nossos clientes</li>
						<li>Respeito aos colaboradores e fornecedores</li>
						<li>Integridade</li>
						<li>Honestidade</li>
						<li>Transparência</li>
						<li>Evolução constante</li>
						
					</ul>			

					<h4>Missão</h4>
					<p>Ser a empresa de maior diferencial para o seu cliente, no que diz respeito ao atendimento pré e pós-vendas na área de máquinas industriais, e ser assim, imediatamente reconhecida, perante nosso mercado e comunidade.</p>

					<h4>Visão</h4>
					<p>Ser uma empresa transparente e integra, para todos: clientes, fornecedores e colaboradores, assegurando que todos se sintam amplamente satisfeitos.</p>

					<h4>Política de Qualidade</h4>
					<p>Comercializar produtos e serviços que através de nossas marcas adicionem valor para o cliente. Cumprir os requisitos e buscar a melhoria contínua do sistema de gestão de qualidade.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- fim empresa -->

	<!-- categoria/noticias/produtos/serviços -->
	<section id="categoria" class="sr-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Categoria</h2><hr><p class="text-justify">
						<ul class="ul-square-categoria">
							<li><a href="view_paginas.php?titulo=Equipamentos novos">Equipamentos novos</a></li>
							<li><a href="view_paginas.php?titulo=Equipamentos usados">Equipamentos usados</a></li>
							<li><a href="view_paginas.php?titulo=Produtos#FERRAMENTAS">Ferramentas</a></li>
						</ul>
					</div>

					<div class="col-md-3"><h2>Produtos</h2><hr><p class="text-justify">
						<?php include_once('includes/produtos.php'); ?>
					</div>
					<div class="col-md-6"><h2 class="">Notícias</h2><hr><p class="text-justify">
						<?php include_once('includes/noticias.php'); ?>
					</div>

				</div>
			</div>
		</section>
		<!-- fim categoria/noticias/produtos/serviços -->


		<!-- categoria/noticias/produtos/serviços -->
		<section id="servicos" class="sr-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="">Serviços</h2><hr><p class="text-justify">
							<ul>
								<li>Serviço de repastilhamento de fresas e serras circulares em widia;</li>
								<li>Serviço de afiação de facas e serras circulares em widia e aço hss;</li>
								<li>Serviço de manutenção e reforma de máquinas indústrias com garantia.</li>
								<li>Serviços industriais, montagem, usinamgem e caldeira.</li>
							</ul>
						</div>			 
					</div>
				</section>
				<!-- fim categoria/noticias/produtos/serviços -->



				<!-- representações -->
				<section id="representacoes" class="sr-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<h2 class="">Representações</h2><hr>
								<div class="logos-rep">
									<div><img src='img/arflux.png' ></div>						
									<div><img src='img/logo-aguia-equipamentos.png'></div>
									<div><img src='img/logo_leut.jpg'></div>
									<div><img src='img/logo_freud.jpg'></div>
									<div><img src='img/logo_fepam.png'></div> 
									<div><img src='img/logo_minelli_.png'></div>
									<div><img src='img/logo_indfema.png'></div>
									<div><img src='img/logo_starret.png'></div>
									<div><img src='img/logo_vima.png'></div>
									<div><img src='img/logo_possa.png'></div>
									<div><img src='img/logo_inabra.png'></div>
									<div><img src='img/logo_marond.png'></div>
									<div><img src='img/logo_osg.png'></div>
									<div><img src='img/logo_union.png'></div>
									<div><img src='img/logo_hansatecnica.png'></div>
									<div><img src='img/logo_tito.png'></div>
									<div><img src='img/logo_alwema.png'></div>
									<div><img src='img/logo_lmpe.png'></div>
									<div><img src='img/logo_cavemac.png' ></div>
									<div><img src='img/logo_ip.png'></div>
									<div><img src='img/logo_weinig2.png'></div>
									<div><img src='img/logo_roster.png'></div>
									<div><img src='img/logo_euron.png'></div>
									<div><img src='img/logo_power.png'></div>
									<div><img src='img/logo_metalcava.png'></div>
									<div><img src='img/logo_mendes.png'></div>
									<div><img src='img/logo_pinacle.png'></div>
									<div><img src='img/logo_harwar.png'></div>
									<div><img src='img/logo_arpi.png'></div>
									<div><img src='img/logo_inmes.png'></div>
									<div><img src='img/logo_momil.png'></div>
									<div><img src='img/logo_relman.jpg'></div>
									<div><img src='img/logo_mazutti.png'></div>
									<div><img src='img/logo_dambroz.png'></div>
									<!-- <div><img src='img/logo_ruldivtec.png'></div> -->
									<!-- <div><img src='img/logo_divdear.png'></div> -->

								</div>

								<!-- <div id="target" style="color:#ff6677">Preencha-me</div> -->
							</div>
						</div>
					</div>
				</section>
				<!-- fim representações -->


				<!-- feiras -->
				<section id="feiras" class="sr-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<h2 class="">Feiras</h2><hr>

								<p>XIII FIPA <span class="expositor">[ EXPOSITOR ]</span></p>
								<a href="https://www.fiepa.org.br/post/xiii-fipa" target="_blank"><i class="fas fa-link"></i>https://www.fiepa.org.br/</a>
								<hr>
								<p>Feiplastic</p>
								<a href="https://www.feiplastic.com.br/" target="_blank"><i class="fas fa-link"></i> https://www.feiplastic.com.br/</a>
								<hr>
								<p>ForMóbile</p>
								
								<a href="https://www.formobile.com.br/" target="_blank"><i class="fas fa-link"></i> https://www.formobile.com.br/</a>
								<hr>
								<p>Fimma Brasil</p>
								<a href="https://www.fimma.com.br/" target="_blank"><i class="fas fa-link"></i> https://www.fimma.com.br/</a>
								
								<hr>


							</div>
						</div>
					</div>
				</section>
				<!-- fim feiras -->


				<!-- localização -->
				<section id="fale-conosco" class="sr-section">
					<div class="container">
						<div class="row">
							<div class="col-md-6">

								<h2>Localização</h2><hr>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.713074259236!2d-48.38755728583121!3d-1.3486541360763307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a46089f0c411c7%3A0xe089af4010713917!2sNORTE+MAQUINAS+para+industria+em+geral!5e0!3m2!1spt-BR!2sbr!4v1524509650149" width="100%" height="349" frameborder="0" style="border:1px solid #c8d6e5; border-radius: 4px" allowfullscreen></iframe>
							</div>
							<div class="col-md-6">

								<h2 class="">Formulário de Contato</h2><hr>
								<!-- formulario contato -->							

								<form id="simples-formulario-ajax">
									<div class="form-group">
										<div class="row"><div class="col-md-12"> <input type="text" class="form-control" placeholder="Nome" required id="nome"></div></div></div>
										<div class="form-group">
											<div class="row"><div class="col-md-12"> <input type="text" class="form-control" placeholder="E-mail" id="email"></div></div></div>
											<div class="form-group">
												<div class="row"><div class="col-md-12"> <input type="text" class="form-control" placeholder="Empresa/Cliente" id="cliente"></div></div></div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-6"> 
															<input type="text" class="form-control" placeholder="Telefone" id="telefone">
														</div>
														<div class="col-md-6"> 
															<input type="text" class="form-control input-ajust" placeholder="Assunto" id="assunto">
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="row">
														<div class="col-md-12"> 
															<textarea id="mensagem" cols="40" rows="5" class="form-control" placeholder="Mensagem" ></textarea> 
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12 text-center">
														<!-- <button class="btn btn-light">ENVIAR</button> -->
														<input class="btn btn-light" type="submit" id="enviar" value="Enviar">

														<input type="hidden" id="metodo" value="formulario-ajax">

													</div>
												</div>
											</form>
											<!-- fim - formulario contato -->

										</div>
									</div>
								</div>
							</section>
							<!-- fim localização -->

