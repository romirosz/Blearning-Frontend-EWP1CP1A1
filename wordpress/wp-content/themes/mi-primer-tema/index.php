<?php get_header() ?>
	

	
	<h2 class="subtitulo">EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h2>
	<p class="parrafo1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio optio deleniti modi nobis quasi, non,<br> fuga sapiente ipsa! Alias, placeat ex.sDolor explicabo aut consequuntur nisi laborum, rem iusto!</p>


	<div class="container">
		<div class="row">

			<div class="col-md-3 col-sm-3 col-xs-12"></div>

			<div class="col-md-6 col-sm-4 col-xs-12">

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="assets/images/viewing-gallery-for-happy-people.png"  class="img-responsive" alt="...">
							<div class="carousel-caption">
								...
							</div>
						</div>
						<div class="item">
							<img src=""<?php the_theme_file_uri(‘/assets/images/tortuga.jpg’)?>" class="img-responsive" alt="...">
							<div class="carousel-caption">
								...
							</div>
						</div>
						<div class="item">
							<img src="assets/images/carita.png" class="img-responsive" alt="...">
							<div class="carousel-caption">
								...
							</div>
						</div>
						...
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>


				<div class="col-md-3 col-sm-3 col-xs-12"></div>
			</div>
		</div>

	</div>


	<div class="jumbotron">
		<h2> <strong>SOLICITA INFORMACIÓN E INSCRÍBETE</h2></strong>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum corrupti nihil quam asperiores, quisquam aliquid eum<br> omnis eaunde itaque, suscipit! Mollitia, enim! Neque consequuntur laudantium, hic aspernatur aliquam sed!</p>
		<p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Inscríbete</a></p>
			<p>Vive la experiencia Desafio Latam!</p>
		</div>			


		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-3 col-xs-12"></div>
				<div class="col-md-3 col-sm-3 col-xs-12" ">
					<div class="contacto">
						<h2>Contacto</h2>
						<p> <strong>Desafio Latam</strong></p>
						<p>Ezequias Allende 2361</p>
						<p>P: 56 9 96591978</p>
						<a href="#">inscripciones@desafiolatam.com</a>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="contacto">
						<h2>Suscribete</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

						<div class="input-group">
							<input type="text" class="form-control" placeholder="Ingresa tu Email" aria-describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2">Enviar</span>
						</div>
					</div>

				</div>
			</div>
		</div>

		






<?php get_footer() ?>