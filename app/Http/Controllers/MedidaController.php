<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Medida;

class MedidaController extends Controller
{
    public function show($id){

    	$medida = Medida::findOrFail($id);

    	return view('medida', ['medida' => $medida]);
    }
}
