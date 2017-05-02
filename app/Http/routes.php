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
Route::get('/', function () {
    return view('home');
}); 

Route::group(['prefix' => 'admin'], function(){

	Route::resource('medidas','MedidasController');

	Route::get('medidas/{id}/destroy',[
          'uses' => 'MedidasController@destroy',
          'as' => 'admin.medidas.destroy'
		]);

	
    Route::resource('insumos','InsumosController');

    Route::get('insumos/{id}/destroy',[
          'uses' => 'InsumosController@destroy',
          'as' => 'admin.insumos.destroy'
		]);
    
    //Route::resource('recetas','RecetasController');

    Route::resource('catvideos','CategoriavideosController');

    Route::get('catvideos/{id}/destroy',[
          'uses' => 'Categoriavideoscontroller@destroy',
          'as' => 'admin.catvideos.destroy'
		]);
     
});


//rutas del front end



