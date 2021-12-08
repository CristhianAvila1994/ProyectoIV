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
    @csrf <!-- PARA PODER ENVIAR EL FORMULARIO -->
    <div class="form-group">
        <label for="grado"> Grado </label>
        <input type="text" class="form-control" name="grado" id="grado" placeholder="Grado del Alumno">
    </div>

    <div class="form-group">
        <label for="alumno_id"> Alumno_id </label>
        <input type="text" class="form-control" name="alumno_id" id="alumno_id" placeholder="Id del Alumno">
    </div>

    <br>
    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>  

@endsection