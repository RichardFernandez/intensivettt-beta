<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Frase;

class FrasesController extends Controller
{
    public function index(Request $request)
    {
    	$frases = Frase::Search($request->frase)->orderBy('id', 'DESC')->paginate(8);
    	return view('admin.frases.index')->with('frases', $frases);

    }

    public function create()
    {
       return view('admin.frases.create');
    }

    public function store(Request $request)
    {

    	$frase = new Frase($request->all());
    	$frase->save();

    	flash("Felicidades capturaste con éxito la frase ")->success();
    	return redirect()->route('frases.index');

    }

    public function edit($id)
    {
    	$frase = Frase::find($id);
    	return view('admin.frases.edit')->with('frase', $frase);

    }

    Public function update(Request $request, $id)
    {

    	$frase = Frase::find($id);
    	$frase->fill($request->all());
    	$frase->save();

    	flash("Editaste con éxito la frase")->warning();
    	return redirect()->route('frases.index');

    }

    public function destroy($id)
    {
    	$frase = Frase::find($id);
    	$frase->delete();

    	flash("La frase se elimino con éxito")->warning();

    	return redirect()->route('frases.index');
    }
}
