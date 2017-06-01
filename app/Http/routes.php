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

/*Ajutentificacion a la administracion */

// Route::get('admin', [
//    'uses' => 'AdminController@index',
//    'as' => 'login_display'
//   ]);

Route::group(['prefix' => 'admin'], function(){

  /*Rutas para el catalogo de administradores*/

  Route::resource('admins', 'AdminsController');

  /*Rutas para el catalogo de estados*/

  Route::resource('estados','EstadosController');

  Route::get('estados/{id}/destroy', [
         'uses' => 'EstadosController@destroy',
         'as' => 'admin.estados.destroy'
    ]);

  /*Rutas para el crud del catalogo de medidas*/

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

    /*Rutas para el catalogo de recetas*/

    Route::resource('recetas', 'RecetasController');

    Route::get('recetas/{id}/destroy', [
         'uses' => 'RecetasController@destroy', 
         'as' => 'admin.recetas.destroy'
      ]);
    
    /*Rutas para el catalogo de categorias de videos*/

    Route::resource('catvideos','CategoriavideosController');

    Route::get('catvideos/{id}/destroy',[
          'uses' => 'Categoriavideoscontroller@destroy',
          'as' => 'admin.catvideos.destroy'
		]);

    /*Rutas para el catalogo de videos*/
    
    Route::resource('videos', 'VideosController');
    
    Route::get('videos/{id}/destroy',[
          'uses' => 'VideosController@destroy',
          'as' => 'admin.videos.destroy'
      ]);

    /*Rutas para las categorias de los suplementos*/

    Route::resource('catsuplementos', 'CatsuplementosController');

    Route::get('catsuplementos/{id}/destroy', [
         'uses' => 'CatsuplementosController@destroy',
         'as' => 'admin.catsuplementos.destroy'
      ]);

    /*Rutas para los suplementos*/
    Route::resource('suplementos', 'SuplementosController');

    Route::get('suplementos/{id}/destroy', [
      'uses' => 'SuplementosController@destroy',
      'as' => 'admin.suplementos.destroy'
      ]);
});


//rutas del front end



