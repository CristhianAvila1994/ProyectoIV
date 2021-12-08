@extends('Plantillas.plantilla')

@section('titulo', 'Formulario Del Profesor')

@section('contenido')

<h1> Profesor </h1>

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
        <label for="nombre"> Nombre </label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Profesor">
    </div>

    <div class="form-group">
        <label for="apellido"> Apellido </label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido del Profesor">
    </div>

    <div class="form-group">
        <label for="nota"> Email </label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email del Profesor">
    </div>

    <div class="form-group">
        <label for="direccion"> Direccion </label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion del Profesor">
    </div>

    <div class="form-group">
        <label for="telefono"> Telefono </label>
        <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Numero de telefono del profesor">
    </div>

    <br>
    <button type="submit" class="btn btn-primary"> Guardar </button>
    <input type="reset" class="btn btn-danger"> 
</form>  

@endsection