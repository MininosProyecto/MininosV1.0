<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoAdicional extends Model
{
    protected $table= ' info_adicional_historiaclinica';
    protected $primaryKey = 'idInfoAdd';
    protected $fillable =
        [
            'detallesExamen',
            'listaProblemas',
            'DiagDefinitivo',
            'ayudasDiagnostico',
            'condCorporal',
            'conv_OtrosAnimales',
            'enfermedades',
            'temperamento',
            'fecha_ultimaDesp',
            'frecuenciaBaño',
            'fecha_ultimaVacuna',
            'historiaClinica_id_historiaClinica'
        ];

    public $timestamps = false;
}
