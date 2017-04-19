<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Videoscategoria extends Model
{
    protected $table = "videoscategorias";

    protected $fillable = ['nombre_categoria'];

    public function videos(){
    	return $this->hasMany(Video::class);
    }
}
