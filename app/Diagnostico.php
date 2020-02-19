<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosico';
    protected $primaryKey = 'idDiagnostico';
    protected $fillable =
        [
            'fecha',
            'descripcion',
            'historiaClinica_id_historiaClinica'
        ];

    public $timestamps = false;
}
