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
        return view('profesor', ['profesores' => $data]);
    }

}
