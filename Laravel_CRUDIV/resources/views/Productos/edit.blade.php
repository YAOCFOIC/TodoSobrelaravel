@extends("layaouts/plantilla")

@section("cabecera")
EDITAR REGISTROS
@endsection
@section("contenido")
	<form method="post" action="/productos/{{$Producto->id}}">
		<div class="form-group">
			<input type="text" name="NombreArticulo" class="form-control" placeholder="Nombre Articulo" value="{{$Producto->NombreArticulo}}">

			{{csrf_field()}}
			 <input type="hidden" name="_method" value="PUT">
		</div>
		<div class="form-group">
			<input type="text" name="Seccion" class="form-control" placeholder="Seccion" value="{{$Producto->Seccion}}">
		</div>
		<div class="form-group">
			<input type="text" name="Precio" class="form-control" placeholder="Precio" value="{{$Producto->Precio}}">
		</div>
		<div class="form-group">
			<input type="date" name="Fecha" class="form-control" placeholder="Fecha" value="{{$Producto->Fecha}}">
		</div>
		<div class="form-group">
			<input type="text" name="PaisOrigen" class="form-control" placeholder="Pais Origen" value="{{$Producto->PaisOrigen}}">
		</div>
		<div class="form-group">
			<input type="submit" name="enviar" value="Actualizar" class="btn btn-primary">
			<input type="reset" name="Borrar" class="btn btn-danger" value="Borrar Campos">
		</div>

	</form>
	<form method="post" action="/productos/{{$Producto->id}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" name="Eliminar" value="Eliminar" class="btn btn-danger">
	</form>

@endsection

@section("pie")

@endsection