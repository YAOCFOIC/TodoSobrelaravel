<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
	<div class="cabecera">
		<div class="form-group text-center">
			<img src="/images/logo.jpg" class="imagenCabecera">
		</div>
		<div class="form-group">
			@yield("cabecera")
		</div>
	</div>
	<div class="contenido">
		<div class="container text-center">
			@yield("contenido")
		</div>
	</div>
	<div class="contenido2">
		<div class="container">
			@yield("contenido2")
		</div>
	</div>
	<div class="pie text-center">
		@yield("pie")
		Alejandro Osorio Todos los derechos reservados
	</div>
</body>
</html>