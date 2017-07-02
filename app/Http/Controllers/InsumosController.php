<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;
use Intensivettt\Insumo;
use Intensivettt\Medida;

class InsumosController extends Controller
{
    public function index(Request $request){

    	$insumos = Insumo::search($request->nombre_insumo)->orderBy('id', 'DESC')->paginate(8);
        $insumos->each(function($insumos){
            $insumos->medida;
        });

        //dd($insumos);
    	return view('admin.insumos.index')->with('insumos', $insumos);
    }

    public function create()
    {
    	$medidas = Medida::orderBy('nombre_medida', 'ASC')->lists('nombre_medida', 'id');
    	return view('admin.insumos.create')->with('medidas', $medidas);
    }

    public function store(Request $request)
    {
    	$insumo = new Insumo($request->all());
    	$insumo->save();

    	flash("Felicidades has registrado con éxito el insumo: ". $insumo->nombre_insumo)->success();

         return redirect()->route('admin.insumos.index');
    }

    public function edit($id)
    {
      $insumo = Insumo::find($id);
      $insumo->medida;
      $medidas = Medida::orderBy('nombre_medida', 'ASC')->lists('nombre_medida', 'id');
      return view('admin.insumos.edit')->with('medidas', $medidas)->with('insumo', $insumo); 

    }

    public function update(Request $request, $id)
    {
       $insumo = Insumo::find($id);
       $insumo->fill($request->all());
       $insumo->save();
       flash("Actualizaste con éxito el insumo")->warning();
       return redirect()->route('admin.insumos.index');
    }

    public function destroy($id)
    {

         $insumo = Insumo::find($id);
         $insumo->delete();
         flash("Eliminaste con éxito el insumo ". $insumo->nombre_insumo)->warning();
         return redirect()->route('admin.insumos.index');

    }
}
