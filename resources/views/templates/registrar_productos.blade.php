<!DOCTYPE HTML>
<html>

<head>
	<title>Registrar Productos</title>
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


				<form action="{{ route ('guardarProductos')}}" method="POST" name="nuevo" enctype="multipart/form-data">

					{{ csrf_field() }}

					<div >
						Nombre Del Producto : <input type="text" name="nombre_producto" value="{{ old('nombre_producto')}}">
					</div>
					@if($errors->first('nombre_producto')) <i>{{$errors -> first ('nombre_producto')}}</i>@endif

					<div >
						Numero de existencias : 
					<input type="text" name="no_existencias" value="{{ old('no_existencias')}}">
					</div> 
					@if($errors->first('no_existencias')) <i>{{$errors -> first ('no_existencias')}}</i>@endif
					

					<div >
						Precio :
					<input type="text" name="precio">
					</div>
					@if($errors->first('precio')) <i>{{$errors -> first ('precio')}}</i>@endif

					<div >
					<!-- como cambiar el tamaño -->
						Descripcion : 
					<input type="text" name="descripcion" value="{{ old('descripcion')}}">
					</div>
					@if($errors->first('descripcion')) <i>{{$errors -> first ('descripcion')}}</i>@endif

					<div >
						Medida : 
					<input type="text" name="medida">
					</div>
					@if($errors->first('medida')) <i>{{$errors -> first ('medida')}}</i>@endif

					<div >
						Precio oferta : 
					<input type="text" name="precio_oferta">
					</div>
					@if($errors->first('precio_oferta')) <i>{{$errors -> first ('precio_oferta')}}</i>@endif
					
					Imagen : <input type="file" name="img">

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