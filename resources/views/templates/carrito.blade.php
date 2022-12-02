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
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
     
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

	.izquierda {
		text-align: right;
	}

	.derecha {
		align-content: left;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')

				<h2>Carrito de productos</h2>
				<a href="{{ route('catalogo')}}" class="button big">Catalogo</a><br></br>
				<div>
					<div>
						<div>
							@if (count(Cart::getContent()))
							<table>
								<thead>
									<th>NOMBRE</th>
									<th>CANTIDAD</th>
									<th>PRECIO</th>
									<th>ELIMINAR</th>

								</thead>
								<tbody>
									<input type="hidden" name="total" value="{{$total=0}}">
									@foreach (Cart::getContent() as $item)
									<tr>
										<td>{{$item->name}}</td>
										<td>{{$item->quantity}}</td>
										<td>{{$item->price}}</td>
										
										<td>
											<input type="hidden" name="total" value="{{$total=$total+ ($item->quantity * $item->price) }}">
											<form action="{{route('cart.removeitem')}}" method="POST">
												@csrf
												<input type="hidden" name="id" value="{{$item->id}}">
												<button type="submit" class="btn btn-link btn-sm text-danger">x</button>
											</form>
										</td>
									</tr>

									@endforeach

									<tr>
										<td></td>
										<td></td>
										<td>Costo Total: </td>
										<td>${{$total}}</td>
										<td></td>
									</tr>
								</tbody>
							</table>
							@else
							<p>Carrito vacio</p>
							<p>Regresa a Comprar!!</p>

							@endif

						<!--	@if(empty(session('session_tipo')))
							<button href="{{ route('registrarDireccion', ['id' => $item->id,'cantidad' => $total]) }}" class="button big" disabled>Comprar</button>
														@endif
						-->



						</div>

					</div>
				</div>

			
			

				<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
                          <!-- <script>paypal.Buttons().render('body');</script> -->
        <script
          src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
        </script>
   
			

			<div id="paypal-button-container"></div>

			<!-- <script>
				paypal.Buttons().render('#paypal-button-container');
				// This function displays Smart Payment Buttons on your web page.
			</script> -->

			
			<script>
				paypal.Buttons({
				createOrder: function(data, actions) {
					// This function sets up the details of the transaction, including the amount and line item details.
					return actions.order.create({
					purchase_units: [{
						amount: {
						value: '{{$total}}'            }
					}]
					});
				},
				onApprove: function(data, actions) {
					// This function captures the funds from the transaction.
					return actions.order.capture().then(function(details) {
					// This function shows a transaction success message to your buyer.
					alert('Transaction completed by ' + details.payer.name.given_name);
					});
				}
				}).render('#paypal-button-container');
				//This function displays Smart Payment Buttons on your web page.
			</script>
            </h4>
			</div>


			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>