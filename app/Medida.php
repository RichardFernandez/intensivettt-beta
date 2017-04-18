<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $table = "medidas";

    protected $fillable = ['nombre_medida'];

    public function insumos(){
    	return $this->hasMany('Intensivettt\Insumo');
    }
}
