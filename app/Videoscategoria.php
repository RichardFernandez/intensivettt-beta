<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Videoscategoria extends Model
{
    protected $table = "videosCategorias";

    protected $fillable = ['nombre_categoria'];

    public function videos(){
    	return $this->hasMany(Video::class);
    }
}
