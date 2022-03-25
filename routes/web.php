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

// Si se repiten las rutas, se pueden hacer grupos de ruta

route::group(['prefix'=>'profile', 'as'=>'profile'], function(){

    Route::get('/', function (){
        return "Obtiene profile";
    });
    Route::get('/editar', function (){
        return "Puto el que lo lea";
    });

});

Route::get('/ver/{id}', function ($id){
    return "Puto el que lo lea ".$id;
});
