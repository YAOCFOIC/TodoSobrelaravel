@extends("../layaouts/plantilla")

@section("cabecera")

@section("contenido")
	
	<form method="post" action="/productos">
		{{csrf_filed}}
		<input type="text" name="NombreArticulo">
		<input type="submit" name="enviar" value="Enviar">
	</form>