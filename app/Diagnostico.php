<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnostico';
    protected $primaryKey = 'idDiagnostico';
    protected $fillable =
        [
            'fecha',
            'descripcion',
            'id_historiaClinca'
        ];

    public $timestamps = false;
}
