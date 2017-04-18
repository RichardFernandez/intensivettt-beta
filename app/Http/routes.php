<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'InicioController@inicio');


// Route::get('/', function () {
//     return view('welcome');
// });


/*Ejemplo de rutas*/

Route::get('/contacto',function(){
	return 'pagina de contacto';
});

Route::get('/contacto/{usuario}',function($usuario){
    return 'segunda de contacto con usuario '.$usuario;
});

/*Con llamada al controlador*/

Route::get('/contacto2', 'InicioController@inicio' );