
<!DOCTYPE HTML>

<html>

<head>
	<title>Inicio de Sesion</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>
<style>
	.alinear{
		text-align: center;
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				
			   @include ('layouts.header')
			   @if ($errors->any())
			   <div class="alert alert-danger">
				   <ul>
					   @foreach ($errors->all() as $error)
					   <li>{{ $error }}</li>
					   @endforeach
				   </ul>
			   </div><br />
			   @endif

				@if(empty(session('session_id')))

				<form action="{{ route ('validar')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					<div>
						Email : <input type="email" name="email"><br>
					</div>
					
					@if($errors->first('email')) <i>{{$errors -> first ('email')}}</i>@endif

					<div>
						Password : <input type="password" name="pass"><br>
						
					</div>
					<div>
						@if($errors->first('pass')) <i>{{$errors -> first ('pass')}}</i>@endif 
					</div>
					
						<div class="form-group mt-4 mb-4">
							<div class="captcha">
								<span>{!! captcha_img() !!}</span>
								<button type="button" class="btn btn-danger" class="reload" id="reload">
									&#x21bb;
								</button>
							</div>
						</div>
		
						<div class="form-group mb-4">
							<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
						</div>
					
					<input type="submit" value="Ingresar">
					
					

				</form>

				@else
				@if(session('session_tipo') == 3)
				<div class="alinear">
					<h1>Hola {{session('session_name')}}</h1>
					<h1>Ya estas Logeado, Ve a comprar algunas joyas.</h1>
					</div>
	
			   @endif
			   @if(session('session_tipo') == 1)
			   <div class="alinear">
				<h1>Bienvenido {{session('session_name')}}</h1>
				<h1>Ya estas Logeado.</h1>
				</div>
	
			   @endif
			    

				@endif


			</div>
		</div>
		@include ('layouts.menu')
	</div>

	@include ('layouts.footer')

</body>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

    </script>

</html>