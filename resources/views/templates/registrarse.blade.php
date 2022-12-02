<!DOCTYPE HTML>
<html lang="es">

<head>
	<title>Registrarse</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
	<script src="{{ asset('js/jquery-3.6.0.min.js') }}"> </script>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

			@include ('layouts.header')


				<form action="{{ route ('guardar')}}" method="POST" name="nuevo" enctype="multipart/form-data">

					{{ csrf_field() }}

					<div>
						<h2>Por Favor Registrese</h2>
					</div>	
					<div>
						Numero de Cuenta : <input type="text" name="matricula"  minlength="9"  value="{{ old('matricula')}}">
					</div>
					@if($errors->first('matricula')) <i>{{$errors -> first ('matricula')}}</i>@endif
					

					<div>
						Nombre : <input type="text" name="nombre"  value="{{ old('nombre')}}">
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

                    

					<div>
						Apellido Paterno : <input type="text" name="app" value="{{ old('app')}}">
					</div>
					@if($errors->first('app')) <i>{{$errors -> first ('app')}}</i>@endif


					<div>
						Apellido Materno : <input type="text" name="apm" value="{{ old('apm')}}">
					</div>
					@if($errors->first('apm')) <i>{{$errors -> first ('apm')}}</i>@endif
					<div>
					<div>
						Email : <input type="email" name="email" value="{{ old('email')}}">
					</div>
					@if($errors->first('email')) <i>{{$errors -> first ('email')}}</i>@endif
					Telefono : <input type="tel" name="tel"   value="{{ old('tel')}}">
					@if($errors->first('tel')) <i>{{$errors -> first ('tel')}}</i>@endif
					</div>
					<div>Fecha de nacimiento : <input type="date" name="fn" minlength="9">
						@if($errors->first('fn')) <i>{{$errors -> first ('fn')}}</i>@endif
						</div>
					<div>
						Password : <input  type="password" name="pass"  minlength="8"  value="{{ old('pass')}}">
					</div>
					@if($errors->first('pass')) <i>{{$errors -> first ('pass')}}</i>@endif 
					<br>
					Imagen : <input type="file" name="img"><br>
				<br>
				
				@if(session('session_tipo') == 1)
				<div>
					Tipo Usuario : <input  type="text" name="tipo_usuario"   placeholder="Administrador = 1  Cliente = 3" value="{{ old('tipo_usuario')}}">
				</div>
				@if($errors->first('tipo_usuario')) <i>{{$errors -> first ('tipo_usuario')}}</i>@endif <br>
				@endif

					<div class="form-check">
						<input class="form-check-label" type="checkbox"  id="aviso" name="aviso" >
						@if($errors->first('aviso')) <i>{{$errors -> first ('aviso')}}</i>@endif
							
							<a href="{{ route('aviso') }}">Aviso de Privacidad
						</label>
					  </div>
					<br>
					
					<input type="submit" value="Enviar">
					
				</form>
			
			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')
	
	<script >

	
	const $matricula =document.querySelector("#matricula");
	const patronM = /[0-9]+/;
		$matricula.addEventListener("keydown", event => { 
			if (patronM.test(event.key)) {
				document.getElementById('matricula').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8) {} else {
					event.preventDefault();
				}
			}
		});
		
		const $nombre =document.querySelector("#nombre");
		const patronNombre = /[a-zA-Z]+/;
	
		$nombre.addEventListener("keydown", event => {
			if (patronnombre.test(event.key)) {
				document.getElementById('nombre').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		const $email =document.querySelector("#email");
		const patronemail = /[a-zA-Z]+/;
	
		$email.addEventListener("keydown", event => {
			if (patronemail.test(event.key)) {
				document.getElementById('email').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		const $app =document.querySelector("#app");
		const patronapp = /[a-zA-Z]+/;
	
		$app.addEventListener("keydown", event => {
			if (patronapp.test(event.key)) {
				document.getElementById('app').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		const $apm =document.querySelector("#apm");
		const patronapm = /[a-zA-Z]+/;
	
		$app.addEventListener("keydown", event => {
			if (patronapm.test(event.key)) {
				document.getElementById('apm').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
	
		const $tel = document.querySelector("#tel");
		const patrontel = /[0-9\.]+/;
	
		$tel.addEventListener("keydown", event => {
			if (patrontel.test(event.key)) {
				document.getElementById('tel').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		const $fn = document.querySelector("#fn");
		const patronfn = /[0-9/]+/;
	
		$fn.addEventListener("keydown", event => {
			if (patronfn.test(event.key)) {
				document.getElementById('fn').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		const $pass = document.querySelector("#pass");
		const patronpass = /[a-zA-Z/0-9/-/_/.]+/;
	
		$pass.addEventListener("keydown", event => {
			if (patronpass.test(event.key)) {
				document.getElementById('pass').style.border = "1px solid #00cc00";
			} else {
				if (event.keyCode == 8 || event.keyCode == 32) {} else {
					event.preventDefault();
				}
			}
		});
		
	</script>
</body>

</html>