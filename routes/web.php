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

Route::get('variables' , function(){
    $mensaje = 20;
    /*Funcion nativa de php: analixar el contenido de una
    variable: tipo de dato, datos contenidos*/
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Hola 2242753";
    var_dump($mensaje);
} );

Route::get('arreglos' , function(){
    //Definir un arreglo en PHP
     // Tamaño del arreglo estudiantes es 3
    $estuadiantes = [ "AN" => "Ana" ,
                      2 => "Valeria" ,
                      "Jo" => "Jorge" ];
    echo "<pre>";
    print_r($estuadiantes);
    echo "<pre>";
});