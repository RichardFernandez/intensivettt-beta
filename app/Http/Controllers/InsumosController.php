<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;
use Intensivettt\Insumo;

class InsumosController extends Controller
{
    public function index(){
    	
    }

    public function show($id){
        
        $insumo = Insumo::find($id);

        return view('insumos', ['insumo' = $insumo]);	
    }
}
