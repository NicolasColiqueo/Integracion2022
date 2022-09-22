<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }

    public function check(Request $request){
        $user = $request->username;
        $pass  = $request->password;
 
        if (auth()->attempt(array('name' => $user, 'password' => $pass))){
         return view('index');
        }
        else{  
             session()->flash('error', 'Invalid Credentials');
             return redirect()->route('user.login');
         }  
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('user.login');
    }
}
