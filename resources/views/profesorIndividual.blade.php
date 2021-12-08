@extends('plantillas.plantilla')
@section('titulo', 'Profesor')
@section('contenido')

<h1> Detalles de {{$profesor->nombre}} {{$profesor->apellido}}
<a class="btn btn-warning" href="{{route ('profesor.edit', ['id'=>$profesor->id])}}"> Editar </a>
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
            <th scope="row">Nombre</th>
            <td scope="col">{{ $profesor->nombre}} </td>
        </tr>
        <tr>
            <th scope="row">Apellido</th>
            <td scope="col">{{ $profesor->apellido }} </td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td scope="col">{{ $profesor->email }} </td>
        </tr>
        <tr>
            <th scope="row">Direccion</th>
            <td scope="col">{{ $profesor->Direccion }} </td>
        </tr> 
        <tr>
            <th scope="row">Telefono</th>
            <td scope="col">{{ $profesor->telefono }} </td>
        </tr>

    </tbody>
</table>

<a class="btn btn-primary" href="{{route('profesor.index')}}"> Volver </a>

@endsection 