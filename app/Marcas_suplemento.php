<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Marcas_suplemento extends Model
{
    protected $table = "marcas_suplementos";

    protected $fillable = ['nombre_marca', 'imagen'];

    public function suplementos(){
    	return $this-> hasMany(Suplemento::class);
    }
}
