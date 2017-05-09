<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = "estados";

    protected $fillable = ["nombre_estado"];

    public function scopeSearch($query, $name)
    {
    	return $query->where('nombre_estado', 'LIKE', '%'.$name.'%');
    }
    
}
