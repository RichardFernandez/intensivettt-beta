<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Suplementocategoria extends Model
{
    protected $table = "marcas_suplementos";

    protected $fillable = ['nombre_marca', 'imagen'];

    public function suplementos(){
    	return $this-> hasMany(Suplemento::class);
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where('nombre_marca', 'LIKE', '%'.$name.'%');
    }
}
