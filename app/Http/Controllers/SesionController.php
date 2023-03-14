<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SesionController extends Controller
{


   /* public function store(){

        dd('Iniciando sesion');

    }*/


    public function index()
    {
        return view('auth.sesion');

    }




    public function store(Request $request)
    {


        $validated = $request->validate([

            'email'=>'required|email',
            'password'=>'required'

        ]);

        if (!auth()->attempt($request->only('email','password'))){

            return back()->with('mensaje','Usuario o contraseña no encontrada');
        }
        return redirect()->route('accesoseguro');

        

    }
}
