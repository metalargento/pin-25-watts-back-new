<?php

use Illuminate\Support\Facades\Route;
use App\Illuminate\Http\Request;
use App\Http\Controllers\postController;
use App\Http\Controllers\usuariosController;

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

Route::get('/usuarios-form', "App\Http\Controllers\usuariosController@Form");

Route::post('/usuarios', "App\Http\Controllers\usuariosController@saveUsuarios" )->name("guardarUsuario");

//{{url('/usuarios')}}
//https://proyecto-25watts-back.herokuapp.com/usuarios