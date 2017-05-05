<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";

    protected $fillable = ['nombre_video', 'url_video', 'id_categoria'];

    public function categoria(){
    	return $this->belongsTo(Videoscategoria::class, 'id_categoria');
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where('nombre_video', 'LIKE', "%".$name."%");
    }
}
