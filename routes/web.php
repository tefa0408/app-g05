<?php

use Illuminate\Support\Facades\Route;

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

/*funcion anonima por que no contiene argumentos*/
Route::get('prueba', function(){
    $suma=1+2;
    return "Hola mundo " . $suma;
});

//para definir un parametro entonces tenemos que agregar el '/'{id}´y dentro de la funcion tambien
Route::get('prueba2/{id}', function($id){
    return "El parametro pasado es : " . $id;
});
