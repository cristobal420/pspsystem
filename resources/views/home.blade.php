<!DOCTYPE html>
<html>
<head>
	<title>INICIO - PSPSYSTEM</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-4.5.2-dist/css/bootstrap.min.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	{{-- <link rel="stylesheet" href="{{ asset('AdminLte/plugins/fontawesome-free/css/all.min.css') }}"> --}}
	<!-- Theme style -->
	{{-- <link rel="stylesheet" href="{{ asset('AdminLte/css/adminlte.min.css') }}"> --}}
	<style type="text/css">
		.izquierda, .derecha {
			height: 50vh;
			width: 100%;
		}
		@media screen and (min-width:768px){
			.izquierda, .derecha {
				height: 100vh;
			}
		}
		.izquierda {
			background: red;
		}
		.derecha {
			background: blue;
		}
	</style>
</head>
<body>

	<div class="row no-gutters">

		{{-- LADO IZQUIERDO --}}
		<div class="col-md-6 no-gutters">

			<div class="izquierda"></div>

		</div>



		{{-- LADO DERECHO --}}
		<div class="col-md-6 no-gutters">

			<div class="derecha"></div>

		</div>
	</div>

</body>

</html>









