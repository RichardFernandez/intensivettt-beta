<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Estado;

class EstadosController extends Controller
{
    public function index(Request $request)
    {
    	$estados = Estado::Search($request->nombre_estado)->orderBy('id', 'DESC')->paginate(8);

    	return view('admin.estados.index')->with('estados', $estados);

    }

    /*Metodo para enviar a la vista de registros de nuevos estados*/

    public function create()
    {
    	return view('admin.estados.create');
    }

    /*Metodo para introducir nuevos registros a la base de dados*/

    public function store(Request $request)
    {
    	$estado = new Estado($request->all());
    	$estado->save();

    	flash("Felicidades has registrado con éxito el estado: " .$estado->nombre_estado)->success();

    	return redirect()->route('admin.estados.index');
    }

    /*Metodo para enviar la vista de edicion*/

    public function edit($id)
    {
    	$estado = Estado::find($id);
    	return view('admin.estados.edit')->with('estado', $estado);
    }

    /*Funcion para editar el estado seleccionado*/

    public function update(Request $request, $id)
    { 
    	$estado = Estado::find($id);
    	$estado->nombre_estado = $request->nombre_estado;
    	$estado->save();

    	flash("Editaste con éxito el estado")->warning();
        return redirect()->route('admin.estados.index');
    }

    public function destroy($id)
    {
    	$estado = Estado::find($id);
    	$estado->delete();

    	flash("El Estado fue eliminado")->warning();

    	return redirect()->route('admin.estados.index');
    }
}
