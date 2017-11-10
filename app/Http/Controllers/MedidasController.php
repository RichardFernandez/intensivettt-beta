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
        $this->validate($request,[
            'nombre_medida' => ['required', 'max:30']
          ]);
        $medida = new Medida($request->all());
        $medida->save();

        flash("Felicidades has registrado con éxito la medida: ". $medida->nombre_medida)->success();

        return redirect()->route('medidas.index');

    }

    public function edit($id)
    {
       $medida = Medida::find($id);
       return view('admin.medidas.edit')->with('medida', $medida);
    }

    public function update(Request $request, $id)
    {
         

         $medida = Medida::find($id);
         $medida->nombre_medida = $request->nombre_medida;
         $medida->save();

         flash("La medida se editó con éxito")->warning();

         return redirect()->route('medidas.index');

    }

    public function destroy($id)
    {
      $medida = Medida::find($id);
      $medida->delete();

      flash('La medida ' . $medida->nombre_medida . ' se elimino exitosamente')->warning();
      return redirect()->route('medidas.index');
    }
}
