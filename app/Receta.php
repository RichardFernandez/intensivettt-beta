<?php

namespace Intensivettt;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = "recetas";

    protected $fillable = ['nombre_receta', 'video', 'imagen', 'preparacion'];
}
