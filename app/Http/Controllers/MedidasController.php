<?php

namespace Intensivettt\Http\Controllers;


use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Medida;


class MedidasController extends Controller
{
    public function index(){

        $medidas= Medida::orderBy('id', 'DESC')->paginate(8);

        return view('admin.medidas.index')->with('medidas', $medidas);
    	
    }

    /*Metodo para enviar la vista*/

    public function create()
    {
    	return view('admin.medidas.medida');
    }

    /*Metodo para insertar a la tabla de medidas*/
    public function store(Request $request)
    {
        //dd($request);
        $medida = new Medida($request->all());
        $medida->save();

        flash("Felicidades has registrado con éxito la medida: ". $medida->nombre_medida)->success();

        return redirect()->route('admin.medidas.index');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}