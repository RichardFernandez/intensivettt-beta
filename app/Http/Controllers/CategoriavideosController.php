<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Videoscategoria;

class CategoriavideosController extends Controller
{
    public function index(Request $request){
    	$categorias = Videoscategoria::Search($request->nombre_categoria)->orderBy('id', 'DESC')->paginate(8);

    	return view('admin.catvideos.index')->with('categorias', $categorias);
    }

    /*Metodo para enviar a la vista de creaciion de nuevos registros s la base de datos*/

    public function create(){
    	return view('admin.catvideos.create');
    }

    /*Metodo para insertar en la tabla categorias de videos*/

    public function store(Request $request)
    {
    	$categoria = new Videoscategoria($request->all());
    	$categoria->save();

    	flash("Felicidades has registrado con éxito la categoría: " . $categoria->nombre_categoria)->success();

    	return redirect()->route('admin.catvideos.index');
    }

    /* */

    public function show($id)
    {

    }

    /*Metodo para enviar a la vista de edicion de un registro en especifico*/

    public function edit($id)
    {
    	$categoria = Videoscategoria::find($id);
    	return view('admin.catvideos.edit')->with('categoria', $categoria);
    }
    
    /* Funcion para editar el registro seleccionado*/

    public function update(Request $request, $id)
    {
         $categoria = Videoscategoria::find($id);
         $categoria->nombre_categoria = $request->nombre_categoria;
         $categoria->save();

         flash("Editaste con éxito la categoria de video")->warning();
         return redirect()->route('admin.catvideos.index');
    }

    /*Metodo para eliminar una categoria de videos*/

    public function destroy($id)
    {
    	$categoria = Videoscategoria::find($id);
    	$categoria->delete();

    	flash("La categoria se elimino exitosamente")->warning();
    	return redirect()->route('admin.catvideos.index');
    }
}
