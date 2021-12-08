@extends('Plantillas.plantilla')

@section('titulo', 'Lista De Profesores')
@section('contenido')
    
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <h1> Profesor <a class="btn btn-primary" href="{{route('profesor.crear')}}"> Nuevo </a> </h1>
    {{ $profesors->links()}}
    
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>  
        </thead>
        <tbody>
        @forelse ($profesors as $profesor)
            <tr>
                <th scope="row">{{ $profesor->id }}</th>
                <td scope="col">{{ $profesor->nombre }}</td>
                <td scope="col"> {{ $profesor->apellido }} </td>
                <td scope="col">{{ $profesor->email }}</td>
                <td scope="col">{{ $profesor->telefono }}</td>
                <td> <a class="btn btn-info" href="{{ route('profesor.mostrar',['id' => $profesor->id]) }}"> Ver </a></td>
                <td> <a class="btn btn-warning" href="{{ route('profesor.edit',['id' => $profesor->id]) }}"> Editar </a></td>
                <td>
                    <form method="POST" action="{{route ('profesor.borrar', ['id'=>$profesor->id])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>   
            </tr>
        @empty
            <tr>
                <td colspan="4"> No hay profesores </td>
            </tr>    
        @endforelse

        </tbody>
    </table>
    
@endsection