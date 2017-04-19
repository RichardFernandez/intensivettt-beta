<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = "insumos";

    protected $fillable = ['medida', 'id_medida'];

    public function medida(){
    	return $this->belongsTo(Medida::class);
    }
}
