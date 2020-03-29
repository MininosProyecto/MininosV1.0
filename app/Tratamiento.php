<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamiento';
    protected $primaryKey = 'idTratamiento';
    protected $fillable =
        [
            'fecha',
            'descripcion'
        ];

    public $timestamps = false;
}
