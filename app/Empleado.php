<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleados";

    protected $fillable = ['nombre_empleado', 'apellidos', 'password', 'email', 'rol', 'telefono', 'direccion', 'estado_id', 'ciudad', 'facebook', 'instagram', 'twitter', 'foto_empleado'];

    public function estado(){
    	return $this->belongsTo(Estado::class, 'estado_id');
    } 

    public function scopeSearch($query, $name)
    {
    	return $query->where('nombre_empleado', 'LIKE', '%'.$name.'%');
    }
}
