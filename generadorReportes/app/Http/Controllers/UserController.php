<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function check(Request $request)
    {
        $correo = $request->email;
        $pass  = $request->password;
        $data = DB::table('Alumno')->paginate(10);

        if (auth()->attempt(array('email' => $correo, 'password' => $pass))) {
            return view('alumno', ['alumnos' => $data]);
        } else {
            session()->flash('error', 'Credenciales Inválidas');
            return redirect()->route('user.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('user.login');
    }

    public function refresh()
    {
        $data = DB::table('Alumno')->paginate(10);
        if (Auth::check()) {
            return view('alumno', ['alumnos' => $data]);
        } else {
            return redirect()->route('user.login');
        }
    }
}
