<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Suplemento extends Model
{
     protected $table = "suplementos";

     protected $fillable = ['nombre_suplemento', 'tipo_suplemento', 'presentacion', 'imagen', 'id_marca'];

     public function marca(){
     	return $this->belongsTo(Marcas_suplemeto::class);
     }
}
