@extends('plantillas.plantilla')
@section('titulo', 'Alumno')
@section('contenido')

<h1> Detalles de {{$alumno->nombre}} {{$alumno->apellido}}
<a class="btn btn-warning" href="{{route ('alumno.edit', ['id'=>$alumno->id])}}"> Editar </a>
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
            <td scope="col">{{ $alumno->nombre}} </td>
        </tr>
        <tr>
            <th scope="row">Apellido</th>
            <td scope="col">{{ $alumno->apellido }} </td>
        </tr>
        <tr>
            <th scope="row">Fecha de Nacimiento</th>
            <td scope="col">{{ $alumno->fecha_nacimiento }} </td>
        </tr>
        <tr>
            <th scope="row">Identidad</th>
            <td scope="col">{{ $alumno->identidad }} </td>
        </tr> 
        <tr>
            <th scope="row">Grado</th>
            <td scope="col">{{ $alumno->grado }} </td>
        </tr>
        <tr>
            <th scope="row">Seccion</th>
            <td scope="col">{{ $alumno->Seccion }} </td>
        </tr>
        <tr>
            <th scope="row">Jornada</th>
            <td scope="col">{{ $alumno->jornada }} </td>
        </tr>

    </tbody>
</table>

<a class="btn btn-primary" href="{{route('alumno.index')}}"> Volver </a>

@endsection 