<?php

namespace Intensivettt\Http\Controllers;

use Illuminate\Http\Request;

use Intensivettt\Http\Requests;

use Intensivettt\Empleado;

use Intensivettt\Estado;

class EmpleadosController extends Controller
{
    public function index(Request $request)
    {
    	$empleados = Empleado::Search($request->nombre_empleado)->orderBy('id', 'DESC')->paginate(8);

    	$empleados->each(function($empleados)
    		{
    			$empleados->estado;
    		});

    	return view('admin.empleados.index')->with('empleados', $empleados);
    	
    }

    public function create()
    {
    	$estados = Estado::orderBy('nombre_estado', 'ASC')->lists('nombre_estado', 'id');
    	return view('admin.empleados.create')->with('estados', $estados);
    }

    public function store(Request $request)
    {

        if($request->file('foto_empleado')){

        	$file = $request->file('foto_empleado');
        	$nombre_imagen = 'empleado_' . time() .'.'.$file->getClientOriginalExtension();
        	$path = public_path().'/images/empleados/';
        	$file->move($path, $nombre_imagen);
        }


        $empleado = new Empleado($request->all());
        $empleado->password = bcrypt($request->password);
        $empleado->foto_empleado = $nombre_imagen;
        $empleado->save();

        flash("Felicidades registratse con éxito a ".$empleado->nombre_empleado. " un nuevo colaborador de Intensivettt");
        return redirect()->route('admin.empleados.index');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    Public function destroy($id)
    {
    	$empleado = Empleado::find($id);
    	$empleado->delete();
    	flash("Eliminaste con éxito al colaborador: " .$empleado->nombre_empleado)->warning();
    	return redirect()->route("admin.empleados.index");
    }
}
