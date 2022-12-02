<!DOCTYPE HTML>
<html>
<head>
	<title>Principal</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')
				

				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>

						
							<h1>El lujo no debe <br />
								ser caro</h1>
							<p>ANTECEDENTES DE LA ORGANIZACIÓN</p>
						</header>
						<p>Joyería Luminoseté es una empresa orgullosamente mexicana , establecida en el año 2020
							ubicada en Toluca con presencia en el centro de toluca, a un lado de la plaza de los mártires. Esta empresa fue creada por 3 estudiantes apasionados por el mundo de digital
							para facilitar la búsqueda de joyas al mejor precio, pero manteniendo la mejor calidad posible, a su disposición.
							Nos enfocamos en la venta de joyeria de segunda mano, no incluyendo los aspectos de distribución y entrega de los productos, directamente la empresa no proporciona estos servicios pero contando con terceros para la distribución.</p>
						<ul class="actions">
							<li><a href="{{route('catalogo')}}" class="button big">Compra ahora</a></li>
						</ul>
					</div>
					<span class="image object">
						<img src="{{asset('images/bg.jpg')}}" alt="" />
					</span>
				</section>

				<!-- Section -->
				<section>
					<header class="major">
						<h2>Nuestra empresa</h2>
					</header>
					<div class="features">
						<article>
							<span class="icon fa-gem"></span>
							<div class="content">
								<h3>MISIÓN DE LA ORGANIZACIÓN</h3>
								<p>Ofrecer una amplia variedad de joyas con la mejor, calidad y
									valor, y brindar los mejores precios en el mercado.</p>
							</div>
						</article>
						<article>
							<span class="icon solid fa-paper-plane"></span>
							<div class="content">
								<h3>VISIÓN DE LA ORGANIZACIÓN</h3>
								<p>Crecer como empresa líder en el mercado de de venta de joyas de segunda mano en línea,buscando la innovación en el sector, motivados por la pasión y compromiso para nuestra empresa y sus nuevos intereses.</p>
							
							</div>
						</article>
						<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
													
												
						
					</div>
				</section>

							<section id="banner">
					<div class="content">
						<header>
							<h1>Encuentranos en:</h1>
						</header>
						<p><h4>Si desea acudir a nuestro establecimiento para comprar o recibir tus productos, puede consultar la dirección en el siguiente enlace, por el bien de todos mantengamos las medidas de prevención de contagio, esperamos su visita.</h4> </p>
						<ul class="actions">
							<li><a href="{{ route('mapa') }}" class="button big"><i class="fas fa-map-marked"></i>  Aquí</a></li>
						</ul>
										</div>
					
				</section>


			</div>
			
		</div>

		@include ('layouts.menu')

	</div>
	
	@include ('layouts.footer')

</body>

</html>

