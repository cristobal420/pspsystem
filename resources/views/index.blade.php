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
		.cont{
			position: absolute;
			left: 0;
			right: 0;
			margin: auto;
			top: 50%;
			transform: translateY(-50%);
		}
		.linea{
			border-right: 1px solid #ccc;
			width: 1px;
			height: 100%;
		}
		@media (max-width: 767px) {
			.linea{
				border-right: none;
				border-bottom: 1px solid #ccc;
				width: 100%;
				height: 1px;
			}
		}
	</style>
</head>
<body>

	<div class="container cont">
		<div class="row">
			<div class="col-md-5 mx-auto mb-5">
				<div class="card h-100 py-5 bg-primary">
					<div class="card-body">
						<!-- Acá contenido -->
					</div>
				</div>
			</div>
			<div class="col-12 col-md-1 mb-5">
				<div class="linea mx-auto"></div>
			</div>
			<div class="col-md-5 mx-auto mb-5">
				<div class="card h-100 py-5 bg-primary">
					<div class="card-body">
						<!-- Acá contenido -->
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>