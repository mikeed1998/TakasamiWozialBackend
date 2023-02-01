<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasProyectosDetalles extends Model
{
    protected $fillable = [
        'id', 'categoria_n', 'titulo', 'descripcion', 'imagen', 'logo', 'categoria_p'
    ];
}
