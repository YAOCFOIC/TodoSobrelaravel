<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.contenedor{
			background-color: #F00;
			text-align: center;
		}
		.infoGeneral{
			background-color: #00F;
			margin: 200px 0;
			color: #FFF;
		}
		.pie{
			background-color: #FF0;
		}
	</style>
</head>
<body>
	<div class="contenedor">
		@yield("Cabecera")
	</div>
	<div class="infoGeneral">
		@yield("infoGeneral")
	</div>
	<div class="pie">
		<p> Aqui ira el contenido del pie</p>
		@yield("pie")
	</div>
</body>
</html>