<!DOCTYPE HTML>
<html>
	<head>
		<title>Menu</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<script>

		</script>
	</head>

<!-- Sidebar -->
<div id="sidebar">
						<div class="inner">

													<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
										@if(session('session_tipo') == 3)
										 <h4>Hola {{session('session_name')}}</h4>
										@endif
										@if(session('session_tipo') == 1)
										<h4>Hola {{session('session_name')}}</h4>
										@endif
										
									</header>
									<ul>
										@if(session('session_tipo') == 3)
										<li><a href="{{ route('home')}}">Pagina de Inicio</a></li>
										@endif
										@if(session('session_tipo') == 0)
										<li><a href="{{ route('home')}}">Pagina de Inicio</a></li>
										@endif
										
										@if(session('session_tipo') == 3)
										<li><a href="{{ route('catalogo')}}">Catalogo de productos</a></li>
										@endif
										@if(session('session_tipo') == 0)
										<li><a href="{{ route('catalogo')}}">Productos</a></li>
										@endif
										<li>
											<span class="opener">Sesion/Cliente</span>
											<ul>
												@if(session('session_tipo') == 0)
												<li><a href="{{ route('registrarse')}}">Registrarse</a></li>
										@endif
												
												
												@if(session('session_tipo') == 1)
												<li><a href="{{ route('detalleUsuario')}}">Ver perfil</a></li>
										@endif
										@if(session('session_tipo') == 3)
												<li><a href="{{ route('detalleUsuario')}}">Ver perfil</a></li>
												
										@endif
									
										@if(session('session_tipo') == 1)
										<li><a href="{{ route ('logout')}}">Cerrar Sesion</a></li>
												
										@endif
										@if(session('session_tipo') == 3)
										<li><a href="{{ route ('logout')}}">Cerrar Sesion</a></li>
												
										@endif
										
										@if(session('session_tipo') == 0)
										<li><a href="{{ route('iniciar_sesion')}}">Iniciar sesion</a></li>
										@endif
												
												

											</ul>
										</li>
										@if(session('session_tipo') == 1)
										<li>
											<span class="opener">Usuarios</span>
											<ul>
												<li><a href="{{ route('registrarse')}}">Registrar Usuarios</a></li>
												<li><a href="{{ route('usuarios')}}">Ver lista de Usuarios</a></li>
												
											</ul>
										</li>
										<li>
											<span class="opener">Productos</span>
											<ul>
												<li><a href="{{ route('registrarProductos')}}">Registrar Productos</a></li>
												<li><a href="{{ route('productos')}}">Ver lista de productos</a></li>
												
											</ul>
										</li>
										<li>
											<span class="opener">Ventas</span>
											<ul>
												<!-- <li><a href="{{ route('registrarVentas')}}">Registrar Nueva Venta</a></li> -->
												<li><a href="{{ route('ventas')}}">Ver Registro de Ventas</a></li>
												<li><a href="{{ route('reporte')}}">Reporte de Ventas</a></li>
											</ul>
										</li>
										
										<li>
											<span class="opener">Materiales</span>
											<ul>
												<li><a href="{{ route('registrarMateriales')}}">Registrar Material</a></li>
												<li><a href="{{ route('materiales')}}">Ver Registro de Materiales</a></li>
											</ul>
										</li>
										@endif
										
										
									</ul>
								</nav>
								<section>
									<header class="major">
										<h2>Contactanos</h2>
									</header>
									<p>Si tienes alguna duda, contactanos nosotros la resolveremos</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="mailto:ventas.alex@luminosete.com">ventas.alex@luminosete.com</a></li>
										<li class="icon solid fa-envelope"><a href="mailto:luminosetecontacto@luminosete.com">luminosetecontacto@luminosete.com</a></li>
										<li class="icon solid fa-envelope"><a href="#">ventas1@luminosete.com</a></li>
										<li class="icon solid fa-phone">7224127939</li>
										<li class="icon solid fa-home">Centro Historico de Toluca<br />
										Av. Benito Juarez 732 Toluca, México</li>
										<a href="{{ route('aviso') }}">Aviso de Privacidad</a>
									</ul>
								</section>

						</div>
					</div>