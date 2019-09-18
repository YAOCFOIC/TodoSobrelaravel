@extends("layaouts/plantilla")

@section("cabecera")
INSERTAR REGISTROS
@endsection
@section("contenido2")

<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nombre Articulo</th>
			<th scope="col">Seccion</th>
			<th scope="col">Precio</th>
			<th scope="col">Fecha</th>
			<th scope="col">Pais Origen</th>
			<th scope="col">Imagen</th>
		</tr>
	</thead>
	<tbody>
		@foreach($Productos as $producto)
			<tr>
				<td>{{$producto->id}}</td>
				<td><a href="{{route('productos.edit',$producto->id)}}">{{$producto->NombreArticulo}}</a></td>
				<td>{{$producto->Seccion}}</td>
				<td>{{$producto->Precio}}</td>
				<td>{{$producto->Fecha}}</td>
				<td>{{$producto->PaisOrigen}}</td>
				<td><img src="images/{{$producto->ruta}}" width="100"></td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection

@section("pie")

@endsection