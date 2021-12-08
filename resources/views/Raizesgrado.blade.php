@extends('Plantillas.plantilla')

@section('titulo', 'Grado De los Alumnos')
@section('contenido')
    
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <h1> Grado <a class="btn btn-primary" href="{{route('grado.crear')}}"> Nuevo </a> </h1>
    {{ $grado->links()}}
    
    <table class="table">
        <thead class="table-secondary">        
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Grado</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>  
        </thead>
        <tbody>
        @forelse ($grado as $grado)
            <tr>
                <th scope="row">{{ $grado->id }}</th>
                <td scope="col">{{ $grado->Grado }} </td>
                <td> <a class="btn btn-info" href="{{ route('grado.mostrar',['id' => $grado->id]) }}"> Ver </a></td>
                <td> <a class="btn btn-warning" href="{{ route('grado.edit',['id' => $grado->id]) }}"> Editar </a></td>
                <td>
                    <form method="POST" action="{{route ('grado.borrar', ['id'=>$grado->id])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>   
            </tr>
        @empty
            <tr>
                <td colspan="4"> No hay grado </td>
            </tr>    
        @endforelse

        </tbody>
    </table>
    
@endsection