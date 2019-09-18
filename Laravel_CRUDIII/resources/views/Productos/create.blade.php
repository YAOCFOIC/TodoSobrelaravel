@extends("layaouts/plantilla")

@section("cabecera")
INSERTAR REGISTROS
@endsection
@section("contenido")
	<form method="post" action="/productos" enctype="multipart/form-data">
		<div class="form-group">
			<input type="text" name="NombreArticulo" class="form-control" placeholder="Nombre Articulo">
			{{csrf_field()}}
		</div>
		<div class="form-group">
			<input type="text" name="Seccion" class="form-control" placeholder="Seccion">
		</div>
		<div class="form-group">
			<input type="number" name="Precio" class="form-control" placeholder="Precio">
		</div>
		<div class="form-group">
			<input type="date" name="Fecha" class="form-control" placeholder="Fecha">
		</div>
		<div class="form-group">
			<input type="text" name="PaisOrigen" class="form-control" placeholder="Pais Origen">
		</div>
		<div class="form-group">		
			<input type="file" name="file" class="custom-file-input" id="inputGroupFile02">
    		
		</div>
		@if(count($errors)>0)
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<div class="form-group">
			<input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
			<input type="reset" name="Borrar" class="btn btn-danger" value="Borrar">
		</div>

	</form>

@endsection

@section("pie")

@endsection