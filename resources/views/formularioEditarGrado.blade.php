@extends('Plantillas.plantilla')

@section('titulo', 'Formulario Del Grado')

@section('contenido')

<h1> Grado </h1>

<!-- PARA LOS ERRORES -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="">
    @method('put') <!-- PARA ACTUALIZAR EL FORMULARIO -->
    @csrf <!-- PARA PODER ENVIAR EL FORMULARIO -->
    <div class="form-group">
        <label for="grado"> Grado </label>
        <input type="text" class="form-control" name="grado" id="grado" placeholder="Grado del Alumno"
        value="{{$grado->Grado}}">
    </div>

    <div class="form-group">
        <label for="alumno_id"> Alumno_id </label>
        <input type="text" class="form-control" name="alumno_id" id="alumno_id" placeholder="Id del Alumno"
        value="{{$grado->alumno_id}}">
    </div>

    <br>
    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger">
        <a class="btn btn-primary" href="{{route('grado.index')}}"> Volver </a>
</form>  

@endsection