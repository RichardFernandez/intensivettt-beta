<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Suplemento extends Model
{
     protected $table = "suplementos";

     protected $fillable = ['nombre_suplemento', 'tipo_suplemento', 'presentacion', 'id_marca', 'imagen'];

     public function marca(){
     	return $this->belongsTo(Suplementocategoria::class, 'id_marca');
     }

     Public function scopeSearch($query, $name)
     {
     	return $query->where('nombre_suplemento', 'LIKE',  '%'.$name.'%');
     }
}
