<!DOCTYPE HTML>

<html>

<head>
	<title>Nuevo Material</title>
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

			<h2>Nuevo Material</h2>


				<form action="{{ route ('guardarMateriales')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					<div style="padding: 1%;">
						Nombre del material : <input type="text" name="nombre" value="{{ old('nombre')}}">
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

					<div style="padding: 1%;">
						Tipo de material : <input type="text" name="tipo_material" value="{{ old('tipo_material')}}">
					</div>
					@if($errors->first('tipo_material')) <i>{{$errors -> first ('tipo_material')}}</i>@endif
					
					<hr>

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>