<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    public function index()
    {

        return view('auth.registro');
    }


    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);
        $validated = $request->validate([


            'name'=>'required|min:4',
            'username'=>'required|unique:users|min:3|max:15',
            'email' => 'required|unique:users|email|max:50',
            'password' => 'required|min:6|max:50'

        ]);







       User::create([

            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> $request->password,
       ]);


       auth()->attempt([
        'email' => $request->email,
        'password'=> $request->pass,

       ]);



       return redirect()->route('accesoseguro');


    }





};


