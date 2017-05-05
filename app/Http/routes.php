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

  /*Tutas para el crud del catalogo de medidas*/

	Route::resource('medidas','MedidasController');

	Route::get('medidas/{id}/destroy',[
          'uses' => 'MedidasController@destroy',
          'as' => 'admin.medidas.destroy'
		]);

	/*Rutas para el crud del catalogo de insumos*/
    Route::resource('insumos','InsumosController');

    Route::get('insumos/{id}/destroy',[
          'uses' => 'InsumosController@destroy',
          'as' => 'admin.insumos.destroy'
		]);
    
    /*Rutas para el catalogo de categorias de videos*/

    Route::resource('catvideos','CategoriavideosController');

    Route::get('catvideos/{id}/destroy',[
          'uses' => 'Categoriavideoscontroller@destroy',
          'as' => 'admin.catvideos.destroy'
		]);

    /*Routas para el catalogo de videos*/
    
    Route::resource('videos', 'VideosController');
    
    Route::get('videos/{id}/destroy',[
          'uses' => 'VideosController@destroy',
          'as' => 'admin.videos.destroy'
      ]);
});


//rutas del front end



