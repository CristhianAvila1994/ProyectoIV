<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //FUNCION PARA LEER
    public function index(){
        $alumno = Alumno::paginate(10);
        return view ('Raizesalumno')->with('alumnos', $alumno);
    }

    //FUNCION PARA BUSCAR
    public function show($id){
        $alumno = Alumno::findorfail($id);
        return view ('alumnoIndividual')->with('alumno', $alumno);
    }

    //FUNCION PARA INSERTAR DATOS
    public function crear(){
        return view ('formularioAlumno');
    }

    //PARA GUARDAR LOS DATOS CREADOS
    public function store(Request $request){

        //VALIDAR LOS CAMPOS
        $request->validate([
            'nombre'=>'required | alpha',
            'apellido'=>'required | alpha',
            'fecha_nacimiento'=>'required ',
            'identidad'=>'required | numeric',
            'grado'=>'required | numeric',
            'seccion'=>'required ',
            'jornada'=>'required ',
        ]);

        //SE CREA EL OBJETO
        $nuevoAlumno = new Alumno();

        //FORMULARIO
        $nuevoAlumno->nombre=$request->input('nombre');
        $nuevoAlumno->apellido=$request->input('apellido');
        $nuevoAlumno->identidad=$request->input('identidad');
        $nuevoAlumno->fecha_nacimiento=$request->input('fecha_nacimiento');
        $nuevoAlumno->grado=$request->input('grado');
        $nuevoAlumno->seccion=$request->input('seccion');
        $nuevoAlumno->jornada=$request->input('jornada');

    
        //PARA VERIFICAR SI SE CREO CORRECTAMENTE
        $creado = $nuevoAlumno->save();

        if ($creado){
            return redirect()->route('alumno.index')
            ->with('mensaje', 'El alumno fue creado exitosamente');
        } else {
            //Retornar con un mensaje de error
        }
    }

    //FUNCION PARA EDITAR LOS DATOS
    public function edit($id){
        $alumno = Alumno::findorfail($id);
        return view ('formularioEditarAlumno')->with('alumno', $alumno);
    }

    //FUNCION PARA ACTUALIZAR LOS DATOS
    public function update(Request $request, $id){

         //VALIDAR LOS CAMPOS
        $request->validate([
            'nombre'=>'required | alpha',
            'apellido'=>'required | alpha',
            'fecha_nacimiento'=>'required ',
            'identidad'=>'required | numeric',
            'grado'=>'required',
            'Seccion'=>'required | alpha',
            'jornada'=>'required | alpha',
            
        ]);

        $alumno = Alumno::findorfail($id);

         //FORMULARIO
        $alumno->nombre=$request->input('nombre');
        $alumno->apellido=$request->input('apellido');
        $alumno->identidad=$request->input('identidad');
        $alumno->fecha_nacimiento=$request->input('fecha_nacimiento');
        $alumno->grado=$request->input('grado');
        $alumno->seccion=$request->input('Seccion');
        $alumno->jornada=$request->input('jornada');
 
 
         //PARA VERIFICAR SI SE CREO CORRECTAMENTE
         $creado = $alumno->save();

        if ($creado){
            return redirect()->route('alumno.index')
            ->with('mensaje', 'El alumno fue modificado exitosamente');
        } else {
            //Retornar con un mensaje de error
        }
    }

    //FUNCION PARA BORRAR LOS DATOS
    public function destroy($id){
        Alumno::destroy($id);

        //REDIRIGIR A LA RUTA Alumno
        return redirect('/Alumnos')->with('mensaje', 'Alumno borrado completamente');
    }
}
