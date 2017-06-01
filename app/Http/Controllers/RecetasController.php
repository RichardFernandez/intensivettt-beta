<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Insumo;

class RecetasController extends Controller
{
    public function index(Request $request){
     
        $recetas = Receta::search($request->nombre_receta)->orderBy('id', 'DESC')->paginate(8);
        $recetas->each(function($recetas){
        	$recetas->insumos;
        });

    }

    public function create()
    {
    	$insumos = Insumo::orderBy('nombre_insumo', 'ASC')->lists('nombre_insumo', 'id');
    	return view('admin.recetas.create')->with('insumos', $insumos);
     }

    public function store()
    {
    	
     
    }
}
