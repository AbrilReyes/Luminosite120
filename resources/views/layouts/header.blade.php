<!-- Header -->
<header id="header">
	@if(session('session_tipo') == 0)
	<h2><a href="{{ route('home')}}" class="logo"><strong>Joyeria</strong> Luminoseté</a></h2>
	@endif
	@if(session('session_tipo') == 1)
	<h2><a href="{{ route('detalleUsuario')}}" class="logo"><strong>Joyeria</strong> Luminoseté</a></h2>
	@endif
	@if(session('session_tipo') == 3)
	<h2><a href="{{ route('home')}}" class="logo"><strong>Joyeria</strong> Luminoseté</a></h2>
	@endif
	@if(empty(session('session_id')))
	<h1></h1>
	@else
	
	

	@endif
	<ul class="icons">

		@if(!empty(session('session_id')))

		

		@if (count(Cart::getContent()))
		@if(session('session_tipo') == 3)
		<a href="{{route('carrito')}}" class="button big"> VER CARRITO </a>
		@endif
		

		@endif

		@else
		<h1></h1>
		@endif

	</ul>
</header>