<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $table = "especie";
    protected $fillable = ["id_especie","descripcion"];
    protected $primaryKey = "id_especie";
    public $timestamps = false;
}
