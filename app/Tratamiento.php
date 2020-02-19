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
            'descripcion',
            'historiaClinica_id_historiaClinica'
        ];

    public $timestamps = false;
}
