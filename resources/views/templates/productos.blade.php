<!DOCTYPE HTML>
<html>

<head>
	<title>Productos</title>
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


				<h2>Productos registrados</h2>

				<div>
					<table>
						<thead>
							<tr>

								<th><h3>Nombre producto</h3></th>
								<th><h3>Numero existencias</h3></th>
								<th><h3>Precio</h3></th>
								<th><h3>Descripcion</h3></th>
								<th><h3>Medida</h3></th>
								<th><h3>Precio de oferta</h3></th>
								<th><h3>Editar Registro</h3></th>
								<th><h3>Eliminar Registro</h3></th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						<tbody>
							<tr>
								<td>{{ $usu->nombre_producto}}</td>
								<td>{{ $usu->no_existencias}}</td>
								<td>{{ $usu->precio }}</td>
								<td>{{ $usu->descripcion}}</td>
								<td>{{ $usu->medida }}</td>
								<td>{{ $usu->precio_oferta}}</td>
								<td><h3><a href="{{ route('modificarProductos', ['id' => $usu->id_producto]) }}"><i class="fas fa-pen-square"></i> Editar</a></h3></td>
								<td><h3><a href="{{ route('borrarProducto', ['id' => $usu->id_producto]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

							</tr>
						</tbody>
						
						@endforeach
						

						<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->
					</table>
				</div>



				<!-- <div id="">
					<div class=""></div>
					<h1>
						
					</h1>
					<div class="">

					 <br>
						
						 <br>
						{{ $usu->pass }} <br>
						{{ $usu->img }} <br>
						{{ $usu->id_grupo }} <br>
						{{ $usu->id_tipo}} <br>
						{{ $usu->activo }} <br>
					</div>
				</div> -->

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>