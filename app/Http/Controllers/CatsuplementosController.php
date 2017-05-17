<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Suplementocategoria;


class CatsuplementosController extends Controller
{
    /*Metodo para ver el index de las categorias de suplementos*/
    public function index(Request $request)
    {
    	$categorias = Suplementocategoria::Search($request->nombre_marca)->orderBy('id', 'DESC')->paginate(8);

    	return view('admin.catsuplementos.index')->with('categorias', $categorias);
    }

    public function create()
    {
    	return view('admin.catsuplementos.create');
    }

    public function store(Request $request)
    {
       //manipulacion de imagenes
      if($request->file('imagen')){

        $file = $request->file('imagen');
        $nombre_imagen = 'catsuple_' . time( ) .'.'.$file->getClientOriginalExtension();
        $path = public_path().'/images/catsuplementos/';
        $file->move($path, $nombre_imagen);

      }

    	$categoria = new Suplementocategoria($request->all());
        $categoria->imagen = $nombre_imagen;
    	$categoria->save();

    	flash("Felicidades has registrado con éxito la categoría: " . $categoria->nombre_marca)->success();

    	return redirect()->route('admin.catsuplementos.index');
    }

    public function edit($id)
    {
    	$categoria = Suplementocategoria::find($id);
    	return view('admin.catsuplementos.edit')->with('categoria', $categoria);
    }

    public function update(Request $request, $id)
    {
    	$categoria = Suplementocategoria::find($id);
    	$categoria->fill($request->all());
    	$categoria->save();
       
        flash("Editaste con éxito la categoria")->warning();
        return redirect()->route('admin.catsuplementos.index');
    }

    public function destroy($id)
    {
    	$categoria = Suplementocategoria::find($id);
    	$categoria->delete();

    	flash("La categoria se elimino exitosamente")->warning();
    	return redirect()->route('admin.catsuplementos.index');
    }
}
