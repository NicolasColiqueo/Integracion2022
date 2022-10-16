<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function cambiarUCT()
    {
        return view('uct');
    }
    public function cambiarContacto()
    {
        return view('contacto');
    }
}
