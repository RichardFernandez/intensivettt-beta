<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = "insumos";

    protected $fillable = ['nombre_insumo', 'id_medida'];

    public function medida(){
    	return $this->belongsTo(Medida::class, 'id_medida');
    }


    public function scopeSearch($query, $name)
    {
      return $query->where('nombre_insumo', 'LIKE', '%'.$name.'%');
    }
}
