<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
		@include("layaouts.navbar")
		@yield("Cabecera")
	
		@include("layaouts.card")
		@yield("infoGeneral")
	
	
		<p> Aqui ira el contenido del pie</p>
		@yield("pie")
	
</body>
</html>