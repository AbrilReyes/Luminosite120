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

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

			@include ('layouts.header')

			<h2>Editar Usuarios</h2>


				<form action="{{ route('salvar', ['id' => $usu->id_usuario]) }}" method="POST" name="nuevo3" enctype="multipart/form-data">

					{{ csrf_field() }}
					{{ method_field('PUT') }} 

					<div>
						Fecha de nacimiento : <input type="date" name="fn" value="{{ $usu->fn }}">
					</div>
					@if($errors->first('fn')) <i>{{$errors -> first ('fn')}}</i>@endif
					<div >
						Cuenta : <input type="text" name="matricula" value="{{ $usu->matricula}}">
					</div>
					@if($errors->first('matricula')) <i>{{$errors -> first ('matricula')}}</i>@endif
					<div >
						Nombre(s) : <input type="text" name="nombre" value="{{ $usu->nombre}}">
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif
					<div >
						Correo : <input type="text" name="email" value="{{ $usu->email }}">
					</div>
					@if($errors->first('email')) <i>{{$errors -> first ('email')}}</i>@endif
					<div >
						Apellido Paterno : <input type="text" name="app" value="{{ $usu->app }}">
					</div>
					@if($errors->first('app')) <i>{{$errors -> first ('app')}}</i>@endif
					<div>
						Apellido Materno : <input type="text" name="apm" value="{{ $usu->apm }}">
					</div>
					@if($errors->first('apm')) <i>{{$errors -> first ('apm')}}</i>@endif
					<div >
						Contraseña : <input type="text" name="pass" value="{{ $usu->pass }}">
					</div>
					@if($errors->first('pass')) <i>{{$errors -> first ('pass')}}</i>@endif
					<div >
						Número Telefonico : <input type="text" name="tel" value="{{ $usu->tel }}">
					</div>
					@if($errors->first('tel')) <i>{{$errors -> first ('tel')}}</i>@endif
					<div >
						Tipo usuario : <input type="text" name="tipo_usuario" value="{{ $usu->tipo_usuario }}">
					</div>
					@if($errors->first('tipo_usuario')) <i>{{$errors -> first ('tipo_usuario')}}</i>@endif
					
					<hr>

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>
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

</html>