<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Frase extends Model
{
    protected $table = 'frases';

    protected $fillable = ['frase', 'autor'];

    public function scopeSearch($query, $name)
    {
    	return $query->where('frase', 'LIKE', '%'.$name.'%');
    }
}
