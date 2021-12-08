@extends('Plantillas.plantilla')

@section('titulo', 'Lista De Alumnos')
@section('contenido')
    
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <h1> alumno <a class="btn btn-primary" href="{{route('alumno.crear')}}"> Nuevo </a> </h1>
    {{ $alumnos->links()}}
    
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Grado</th>
                <th scope="col">Seccion</th>
                <th scope="col">Jornada</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>  
        </thead>
        <tbody>
        @forelse ($alumnos as $alumno)
            <tr>
                <th scope="row">{{ $alumno->id }}</th>
                <td scope="col">{{ $alumno->nombre }} </td>
                <td scope="col">{{ $alumno->apellido }} </td>
                <td scope="col">{{ $alumno->fecha_nacimiento }} </td>
                <td scope="col">{{ $alumno->grado }}</td>
                <td scope="col">{{ $alumno->Seccion }}</td>
                <td scope="col">{{ $alumno->jornada }}</td>
                <td> <a class="btn btn-info" href="{{ route('alumno.mostrar',['id' => $alumno->id]) }}"> Ver </a></td>
                <td> <a class="btn btn-warning" href="{{ route('alumno.edit',['id' => $alumno->id]) }}"> Editar </a></td>
                <td>
                    <form method="POST" action="{{route ('alumno.borrar', ['id'=>$alumno->id])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>   
            </tr>
        @empty
            <tr>
                <td colspan="4"> No hay alumnos </td>
            </tr>    
        @endforelse

        </tbody>
    </table>
    
@endsection