<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
     //FUNCION PARA LEER
     public function index(){
        $grado = Grado::paginate(10);
        return view ('Raizesgrado')->with('grado', $grado);
    }

    //FUNCION PARA BUSCAR
    public function show($id){
        $grado = Grado::findorfail($id);
        return view ('gradoIndividual')->with('grado', $grado);
    }

    //FUNCION PARA INSERTAR DATOS
    public function crear(){
        return view ('formularioGrado');
    }

    //PARA GUARDAR LOS DATOS CREADOS
    public function store(Request $request){

        //VALIDAR LOS CAMPOS
        $request->validate([
            'grado'=>'required',
            'alumno_id'=>'required',
            
        ]);

        //SE CREA EL OBJETO
        $nuevoGrado = new Grado();

        //FORMULARIO
        $nuevoGrado->grado=$request->input('grado');
        $nuevoGrado->alumno_id=$request->input('alumno_id');
        
        

    
        //PARA VERIFICAR SI SE CREO CORRECTAMENTE
        $creado = $nuevoGrado->save();

        if ($creado){
            return redirect()->route('grado.index')
            ->with('mensaje', 'El grado fue creado exitosamente');
        } else {
            //Retornar con un mensaje de error
        }
    }

    //FUNCION PARA EDITAR LOS DATOS
    public function edit($id){
        $grado = Grado::findorfail($id);
        return view ('formularioEditarGrado')->with('grado', $grado);
    }

    //FUNCION PARA ACTUALIZAR LOS DATOS
    public function update(Request $request, $id){

         //VALIDAR LOS CAMPOS
        $request->validate([
            'grado'=>'required',
            'alumno_id'=>'required',
            
        ]);

        $grado = Grado::findorfail($id);

         //FORMULARIO
        $grado->grado=$request->input('grado');
        $grado->alumno_id=$request->input('alumno_id');
 
 
         //PARA VERIFICAR SI SE CREO CORRECTAMENTE
         $creado = $grado->save();

        if ($creado){
            return redirect()->route('grado.index')
            ->with('mensaje', 'El grado fue modificado exitosamente');
        } else {
            //Retornar con un mensaje de error
        }
    }

    //FUNCION PARA BORRAR LOS DATOS
    public function destroy($id){
        Grado::destroy($id);

        //REDIRIGIR A LA RUTA Grado
        return redirect('/Grados')->with('mensaje', 'Grado borrado completamente');
    }
}
