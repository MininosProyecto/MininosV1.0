<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = "genero";
    protected $fillable =
        [
            "descripcion"
        ];

    protected $primaryKey = "id_sexo";

    public $timestamps = false;
}
