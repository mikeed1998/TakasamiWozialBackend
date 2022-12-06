<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria_detalle extends Model
{
    public $timestamps = false;
    protected $fillable = ['id_categoria','nombre','descripcion','subtitulo','sub_descripcion'];
}
