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

    public function show($id){
        
        
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
}
