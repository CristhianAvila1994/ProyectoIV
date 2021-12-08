<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class GradoProfesorController extends Controller
{
    public function index()
    {
        $gradoprofesors=DB::table('gradoprofesors')
        ->join('users', 'users.id_user' , '=' , 'gradoprofesors.id_user')
        ->select('gradoprofesors.grado','gradoprofesors.grado_id','users.name as autorGradoRrofesor')
        ->get();

        dd($gradoprofesors);
    }
    
}
