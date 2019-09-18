@extends("layaouts/plantilla")

@section("Cabecera")
    
    <h1>Galeria</h1>

@endsection

@section("infoGeneral")

    <p> Aqui ira el contenido principal</p>

    @if(count($alumnos))
        <table width="50%" border="1">
            @foreach($alumnos as $persona)
            <tr>
                <td>
                    {{$persona}}
                </td>
            </tr>
            @endforeach  
        </table>

        @else

            {{"Sin alumnos"}}

    @endif

@endsection

@section("pie")



@endsection