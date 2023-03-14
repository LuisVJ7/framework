<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;

use App\Http\Controllers\SesionController;

use App\Http\Controllers\SecureUrlController;

use App\Http\Controllers\CerrarSesionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layoutprincipal');
});
////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/registro',[RegistroController::class,'index'])->name('registro');
Route::post('/registro',[RegistroController::class,'store']);
/////////////////////////////////////////////////////////////////////

Route::get('/vistausuario',[SecureUrlController::class,'index'])->name('accesoseguro');

Route::get('/login',[SesionController::class,'index'])->name('login');
Route::post('/login',[SesionController::class,'store']);


Route::post('/logout',[CerrarSesionController::class,'store'])->name('logout');


Route::get('/iniciarsesion',[SesionController::class,'index'])->name('inicio');




