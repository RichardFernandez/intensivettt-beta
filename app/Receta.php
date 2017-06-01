<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = "recetas";

    protected $fillable = ['nombre_receta', 'video', 'imagen', 'preparacion'];

    public function insumos(){
    	return $this->belongsToMany(Insumo::class, 'id_medida');
    }

    public function scopeSearch($query, $name){
    	return $query->where('nombre_receta', 'LIKE', '%'.$name.'%');
    }
}
