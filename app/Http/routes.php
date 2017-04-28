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

/*RUTAS PARA EL BACKEND DE ADMINITRADORES*/

/*
Grupo de rutas con el prefijo admin
*/
Route::group(['prefix' => 'admin'], function(){

	Route::resource('medidas','MedidasController');
    // Route::resource('insumos','InsumosController');
    // Route::resource('recetas','RecetasController');

    // Route::resource('categorias-videos', 'CategoriavideosController');
     
});


//rutas del front end



