<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //FUNCION PARA LEER
    public function index(){
        $profesor = Profesor::paginate(10);
        return view ('Raizesprofesor')->with('profesors', $profesor);
    }

    //FUNCION PARA BUSCAR
    public function show($id){
        $profesor = Profesor::findorfail($id);
        return view ('profesorIndividual')->with('profesor', $profesor);
    }

    //FUNCION PARA INSERTAR DATOS
    public function crear(){
        return view ('formularioProfesor');
    }

    //PARA GUARDAR LOS DATOS CREADOS
    public function store(Request $request){

        //VALIDAR LOS CAMPOS
        $request->validate([
            'nombre'=>'required | alpha',
            'apellido'=>'required | alpha',
            'email'=>'required | email',
            'direccion'=>'required',
            'telefono'=>'required',
        ]);

        //SE CREA EL OBJETO
        $nuevoProfesor = new Profesor();

        //FORMULARIO
        $nuevoProfesor->nombre=$request->input('nombre');
        $nuevoProfesor->apellido=$request->input('apellido');
        $nuevoProfesor->email=$request->input('email');
        $nuevoProfesor->direccion=$request->input('direccion');
        $nuevoProfesor->telefono=$request->input('telefono');

    
        //PARA VERIFICAR SI SE CREO CORRECTAMENTE
        $creado = $nuevoProfesor->save();

        if ($creado){
            return redirect()->route('profesor.index')
            ->with('mensaje', 'El profesor fue creado exitosamente');
        } else {
            //Retornar con un mensaje de error
        }
    }

    //FUNCION PARA EDITAR LOS DATOS
    public function edit($id){
        $profesor = Profesor::findorfail($id);
        return view ('formularioEditarProfesor')->with('profesor', $profesor);
    }

    //FUNCION PARA ACTUALIZAR LOS DATOS
    public function update(Request $request, $id){

         //VALIDAR LOS CAMPOS
        $request->validate([
            'nombre'=>'required | alpha',
            'apellido'=>'required | alpha',
            'email'=>'required | email',
            'direccion'=>'required',
            'telefono'=>'required',
            
        ]);

        $profesor = Profesor::findorfail($id);

         //FORMULARIO
         $profesor->nombre=$request->input('nombre');
         $profesor->apellido=$request->input('apellido');
         $profesor->email=$request->input('email');
         $profesor->direccion=$request->input('direccion');
         $profesor->telefono=$request->input('telefono');
 
 
         //PARA VERIFICAR SI SE CREO CORRECTAMENTE
        $creado = $profesor->save();

        if ($creado){
            return redirect()->route('profesor.index')
            ->with('mensaje', 'El profesor fue modificado exitosamente');
        } else {
            //Retornar con un mensaje de error
        }
    }

    //FUNCION PARA BORRAR LOS DATOS
    public function destroy($id){
        Profesor::destroy($id);

        //REDIRIGIR A LA RUTA Profesor
        return redirect('/Profesors')->with('mensaje', 'Profesor borrado completamente');
    }
}
