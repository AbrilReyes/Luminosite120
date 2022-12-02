<!DOCTYPE HTML>

<html>

<head>
	<title>Perfil</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>

<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		transition: 0.3s;

		border-radius: 5px;
		text-align: center;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	img {
		border-radius: 5px 5px 0 0;
	}

	.container {
		padding: 2px 16px;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')


				<h2>Perfil</h2>

				<div>
				@foreach($usus as $usu)
				@if($usu->id_usuario == session('session_id'))

					<div class="card">
						<img src="{{ asset('img/'.$usu->img) }}" alt="Imagen" width="200" height="200">
						<div class="container">
							Nombre : {{ $usu->nombre}} {{ $usu->app}} {{ $usu->apm}} <br>
							Cuenta {{ $usu->matricula}} <br>
							Fecha de nacimiento: {{ $usu->fn }} <br>
							Telefono: {{ $usu->tel}} <br>
							Email: {{ $usu->email }} <br>
						
							<br>
							<a href="{{ route('home')}}" class="button big">Regresar al Inicio</a><br>

						</div>
					</div>
					@endif

@endforeach


				</div>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>