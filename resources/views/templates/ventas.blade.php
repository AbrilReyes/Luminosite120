<!DOCTYPE HTML>
<html>

<head>
	<title>Registro de Ventas</title>
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
				<h4>Ventas registradas</h4>
				<div>
					<table>
						<thead>
							<tr>
								<th>
									<h3>Monto total</h3>
								</th>
								<th>
									<h3>Dirección relacionada</h3>
								</th>
								<th>
									<h3>Cliente</h3>
								</th>
								<th>
									<h3>Editar Registro</h3>
								</th>
								<th>
									<h3>Eliminar Registro</h3>
								</th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						<tbody>
							<tr>
								<td>$ {{ $usu->monto_total}}</td>

								@foreach($todos as $todo)

								@if($todo->clientes_id == $usu->clientes_id )

								<td>{{ $todo->calle }} <br>
									{{ $todo->numero_direccion }} <br>
									{{ $todo->estado }}</td>

								@endif

								@endforeach

								@foreach($comps as $comp)
								@if($usu->clientes_id == $comp->id_usuario )
								<td>{{ $comp->app }} {{ $comp->apm }} {{ $comp->nombre }}</td>
								@endif
								@endforeach
								<td>
									<h3><a href="{{ route('modificarVentas', ['id' => $usu->id_venta]) }}"><i class="fas fa-pen-square"></i> Editar</a></h3>
								</td>
								<td>
									<h3><a href="{{ route('borrarVenta', ['id' => $usu->id_venta]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3>
								</td>
							</tr>
						</tbody>

						@endforeach
						
					</table>
				</div>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>