@extends('plantillas.plantilla')
@section('titulo', 'Grado')
@section('contenido')

<h1> Detalles de {{$grado->Grado}} {{$grado->alumno_id}}
<a class="btn btn-warning" href="{{route ('grado.edit', ['id'=>$grado->id])}}"> Editar </a>
</h1>
<br>
<table class="table">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Campos</th>
            <th scope="col">Valor</th>
        </tr>  
    </thead>
    <tbody>
        <tr>
            <th scope="row">Grado</th>
            <td scope="col">{{ $grado->Grado}} </td>
        </tr>

        <tr>
            <th scope="row">Alumno_id</th>
            <td scope="col">{{ $grado->alumno_id }} </td>
        </tr>
       
    </tbody>
</table>

<a class="btn btn-primary" href="{{route('grado.index')}}"> Volver </a>

@endsection 