<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = "estados";

    protected $fillable = ["nombre_estado"];

    /*Metodo para la relacion con la tabala de los empleados de intensivettt*/
    public function empleados()
    {
    	return $this->hasMany(Empleado::class);
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where('nombre_estado', 'LIKE', '%'.$name.'%');
    }
    
}
