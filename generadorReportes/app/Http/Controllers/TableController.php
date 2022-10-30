<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function mostrarprofesores()
    {
        $data = DB::table('Profesor')->get();
        if (Auth::check()) {
            return view('profesor', ['profesores' => $data]);
        } else {
            return redirect()->route('user.login');
        }
    }

    public function mostrarcarreras()
    {
        $data = DB::table('Carrera')->get();
        if (Auth::check()) {
            return view('carrera', ['carreras' => $data]);
        } else {
            return redirect()->route('user.login');
        }
    }

    public function mostrardepartamentos()
    {
        $data = DB::table('Departamento')->get();
        if (Auth::check()) {
            return view('departamento', ['departamentos' => $data]);
        } else {
            return redirect()->route('user.login');
        }
    }

    public function mostrargastos()
    {
        $data = DB::table('Gasto')->get();
        if (Auth::check()) {
            return view('gasto', ['gastos' => $data]);
        } else {
            return redirect()->route('user.login');
        }
    }

    public function mostrarramos()
    {
        $data = DB::table('Ramo')->get();
        if (Auth::check()) {
            return view('ramo', ['ramos' => $data]);
        } else {
            return redirect()->route('user.login');
        }
    }

    public function mostrartipocarreras()
    {
        $data = DB::table('Tipo_Carrera')->get();
        if (Auth::check()) {
            return view('tipocarrera', ['tipocarreras' => $data]);
        } else {
            return redirect()->route('user.login');
        }
    }

}
