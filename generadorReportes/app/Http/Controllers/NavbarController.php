<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function cambiarUCT()
    {
        if (Auth::check()) {
            return view('uct');
        } else {
            return redirect()->route('user.login');
        }
    }
    public function cambiarContacto()
    {
        if (Auth::check()) {
            return view('contacto');
        } else {
            return redirect()->route('user.login');
        }
    }
}
