<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Inicio</title>
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


				<h2>Detalle Producto</h2>

				<div>
					<div class="card">
						<img src="{{ asset('img/'.$usu->img) }}" alt="Imagen" width="150" height="150">
						<div class="container" >
					Nombre del producto: {{ $usu->nombre_producto}} <br>
							Descripcion: {{ $usu->descripcion}} <br>
							Existencias: {{ $usu->no_existencias}} <br>
							Precio: {{ $usu->precio }} <br>
							Medida: {{ $usu->medida }} <br>
							Precio de oferta: {{ $usu->precio_oferta}} <br>
						   <br>
							<form action="{{route('cart.add')}}" method="post">
								@csrf
								<input type="hidden" name="producto_id" value="{{$usu->id_producto}}">
								@if(session('session_tipo') == 3)
								<input type="submit" name="btn" class="btn btn-success" value="AÑADIR AL CARRITO">
										@endif
										@if(session('session_tipo') == 0)
										<a href="{{ route('iniciar_sesion')}}" class="button big" >AÑADIR AL CARRITO</a><br>								
										@endif
							</form>
							</form>
							<a href="{{ route('catalogo')}}" class="button big">Regresar</a><br>

						</div>
					</div>




				</div>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>