<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// PARA LEER
Route::get('/Alumnos',[AlumnoController::class, 'index'])
->name('alumno.index');

// PARA BUSCAR
Route::get('/Alumnos/{id}',[AlumnoController::class, 'show'])
->name('alumno.mostrar')->where('id', '[0-9]+');

// PARA INSERTAR DATOS
Route::get('/Alumnos/crear',[AlumnoController::class, 'crear'])
->name('alumno.crear');


//Para postear los datos creados
Route::post('/Alumnos/crear',[AlumnoController::class, 'store'])
->name('alumno.guardar');   

//MOSTRAR FORMULARIO DE EDICION
Route::get('/Alumnos/{id}/editar',[AlumnoController::class, 'edit'])
->name('alumno.edit')->where('id', '[0-9]+');

    //Para enviar los datos actualizados al servidor (PUT ELEMENTOS YA EXISTENTES)
Route::put('/Alumnos/{id}/editar',[AlumnoController::class, 'update'])
->name('alumno.update')->where('id', '[0-9]+');

//PARA BORRAR LOS DATOS
Route::delete('/Alumnos/{id}/borrar',[AlumnoController::class, 'destroy'])
->name('alumno.borrar')->where('id', '[0-9]+');




// PARA LEER
Route::get('/Profesors',[ProfesorController::class, 'index'])
->name('profesor.index');

// PARA BUSCAR
Route::get('/Profesors/{id}',[ProfesorController::class, 'show'])
->name('profesor.mostrar')->where('id', '[0-9]+');

// PARA INSERTAR DATOS
Route::get('/Profesors/crear',[ProfesorController::class, 'crear'])
->name('profesor.crear');


//Para postear los datos creados
Route::post('/Profesors/crear',[ProfesorController::class, 'store'])
->name('profesor.guardar');   

//MOSTRAR FORMULARIO DE EDICION
Route::get('/Profesors/{id}/editar',[ProfesorController::class, 'edit'])
->name('profesor.edit')->where('id', '[0-9]+');

    //Para enviar los datos actualizados al servidor (PUT ELEMENTOS YA EXISTENTES)
Route::put('/Profesors/{id}/editar',[ProfesorController::class, 'update'])
->name('profesor.update')->where('id', '[0-9]+');

//PARA BORRAR LOS DATOS
Route::delete('/Profesors/{id}/borrar',[ProfesorController::class, 'destroy'])
->name('profesor.borrar')->where('id', '[0-9]+');



// PARA LEER
Route::get('/Grados',[GradoController::class, 'index'])
->name('grado.index');

// PARA BUSCAR
Route::get('/Grados/{id}',[GradoController::class, 'show'])
->name('grado.mostrar')->where('id', '[0-9]+');

// PARA INSERTAR DATOS
Route::get('/Grados/crear',[GradoController::class, 'crear'])
->name('grado.crear');


//Para postear los datos creados
Route::post('/Grados/crear',[GradoController::class, 'store'])
->name('grado.guardar');   

//MOSTRAR FORMULARIO DE EDICION
Route::get('/Grados/{id}/editar',[GradoController::class, 'edit'])
->name('grado.edit')->where('id', '[0-9]+');

    //Para enviar los datos actualizados al servidor (PUT ELEMENTOS YA EXISTENTES)
Route::put('/Grados/{id}/editar',[GradoController::class, 'update'])
->name('grado.update')->where('id', '[0-9]+');

//PARA BORRAR LOS DATOS
Route::delete('/Grados/{id}/borrar',[GradoController::class, 'destroy'])
->name('grado.borrar')->where('id', '[0-9]+');



