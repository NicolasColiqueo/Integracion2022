<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function searchalumno(Request $request)
    {
        $search = $request->get('searchalumno');
        $data = DB::table('Alumno')
        ->where('Rut_Alumno', 'like', '%'.$search.'%')
        ->orWhere('Nombres', 'like', '%'.$search.'%')
        ->orWhere('Apellidos', 'like', '%'.$search.'%')
        ->orWhere('Correo', 'like', '%'.$search.'%')
        ->paginate(10);
        return view('alumno', ['alumnos' => $data]);
    }

    public function searchprofesor(Request $request)
    {
        $search = $request->get('searchprofesor');
        $data = DB::table('Profesor')
        ->where('Rut_Profesor', 'like', '%'.$search.'%')
        ->orWhere('Nombres', 'like', '%'.$search.'%')
        ->orWhere('Apellidos', 'like', '%'.$search.'%')
        ->orWhere('Correo', 'like', '%'.$search.'%')
        ->paginate(10);
        return view('profesor', ['profesores' => $data]);
    }

    public function mostrarprofesores()
    {
        $data = DB::table('Profesor')->paginate(10);
        return view('profesor', ['profesores' => $data]);
    }

    public function mostraralumnos()
    {
        $data = DB::table('Alumno')->paginate(10);
        return view('alumno', ['alumnos' => $data]);
    }
}
