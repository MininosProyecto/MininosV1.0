<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacunas extends Model
{

    protected $table= 'vacunas';
    protected $primaryKey = 'idVacunas';
    protected $fillable =
        [
            'idVacunas',
            'nombre_vacuna',
            'fecha',
            'descripcion',
            'HistoriaClinica_id_historiaClinica'
        ];
    public $timestamps = false;
}
