@extends('Plantillas.plantilla')

@section('titulo', 'Formulario Del Alumno')

@section('contenido')

<h1> Alumno </h1>

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
        <label for="nombre"> Nombre </label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Alumno"
        value="{{$alumno->nombre}}">
    </div>

    <div class="form-group">
        <label for="apellido"> Apellido </label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido del Alumno"
        value="{{$alumno->apellido}}">
    </div>

    <div class="form-group">
        <label for="fecha_nacimiento"> Fecha de Nacimiento </label>
        <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de Nacimiento del Alumno"
        value="{{$alumno->fecha_nacimiento}}">
    </div>

    <div class="form-group">
        <label for="identidad"> Identidad </label>
        <input type="text" class="form-control" name="identidad" id="identidad" placeholder="Identidad del Alumno"
        value="{{$alumno->identidad}}">
    </div>

    <div class="form-group">
        <label for="grado"> Grado </label>
        <input type="text" class="form-control" name="grado" id="grado" placeholder="Grado del Alumno"
        value="{{$alumno->grado}}">
    </div>

    <div class="form-group">
        <label for="Seccion"> Seccion </label>
        <input type="text" class="form-control" name="Seccion" id="Seccion" placeholder="Seccion del Alumno"
        value="{{$alumno->Seccion}}">
    </div>

    <div class="form-group">
        <label for="jornada"> Jornada </label>
        <input type="text" class="form-control" name="jornada" id="jornada" placeholder="jornada del Alumno"
        value="{{$alumno->jornada}}">
    </div>


    <br>
    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>
<a class="btn btn-primary" href="{{route('alumno.index')}}"> Volver </a>
@endsection