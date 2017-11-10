<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Suplemento;

use Intensivettt\Suplementocategoria;

class SuplementosController extends Controller
{
    public function index(Request $request)
    {
    	$suplementos = Suplemento::Search($request->nombre_suplemento)->orderBy('id', 'DESC')->paginate(8);
    	$suplementos->each(function($suplementos){
    		$suplementos->marca;
    	});

    	return view('admin.suplementos.index')->with('suplementos', $suplementos);
    }

    public function create()
    {
    	$marcas = Suplementocategoria::orderBy('nombre_marca', 'ASC')->pluck('nombre_marca', 'id');
    	return view('admin.suplementos.create')->with('marcas', $marcas); 
    }

    public function store(Request $request)
    {
    	//manipulacion de imagenes
    	if($request->file('imagen')){

    		$file = $request->file('imagen');
    		$nombre_imagen = 'suple_' . time() .'.'.$file->getClientOriginalExtension();
    		$path = public_path().'/images/suplementos/';
    		$file->move($path, $nombre_imagen);
    	}

    	$suplemento = new Suplemento($request->all());
    	$suplemento->imagen = $nombre_imagen;
    	$suplemento->save();

    	flash("Felicidades has registrado con éxito el suplemento: " . $suplemento->nombre_suplemento)->success();

    	return redirect()->route('suplementos.index');


    }

    public function edit($id)
    {
    	$suplemento = Suplemento::find($id);
    	$suplemento->marca;
    	$marcas = Suplementocategoria::orderBy('nombre_marca', 'ASC')->pluck('nombre_marca', 'id');
    	return view('admin.suplementos.edit')->with('marcas', $marcas)->with('suplemento', $suplemento);
    }

    public function update(Request $request, $id)
    {
    	$suplemento = Suplemento::find($id);
    	$suplemento->fill($request->all());
    	$suplemento->save();

    	flash("actualizaste con éxito el suplemento ".$suplemento->nombre_suplemento)->warning();
   	    return redirect()->route("suplementos.index");
    }

    public function destroy($id)
    {
    	$suplemento = Suplemento::find($id);
    	$suplemento->delete();
    	flash("Eliminaste con éxito el suplemento: ".$suplemento->nombre_suplemento)->warning();
    	return redirect()->route("suplementos.index");
    }



}

