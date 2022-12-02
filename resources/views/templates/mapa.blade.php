<!DOCTYPE HTML>

<html>

<head>
	<title>Inicio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

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
                        <h1>Nos encontramos en:</h1>
                        <p><h2>Av. Benito Juarez 732 Toluca Centro, 50000 </h2></p>
						</header>
						<div style="width: auto; height: 500px;">
                             {!! Mapper::render() !!}
                        </div>
                        <br>

						<ul class="actions">
							<li><a href="{{route('home')}}" class="button big">Regresar</a></li>
						</ul>
					</div>
				</section>

			</div>
		</div>

	@include ('layouts.footer')


</body>

</html>





