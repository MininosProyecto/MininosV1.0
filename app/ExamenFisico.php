<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table= 'examen_fisico';
    protected $primaryKey = 'idExamenFisico';
    protected $fillable =
        [
            'fc',
            'fr',
            'temperatura',
            'mem_mucosa',
            'pulso',
            'peso',
            'S_cardioVascular',
            'S_respiratorio',
            'S_nervioso',
            'S_Genitaurino',
            'S_musculoEsqueletico',
            'S_digestivo',
            'ojo',
            'oido',
            'S_tegumentario',
            'S_linfatico',
            'actitud',
            'hidratacion',
            'id_historiaClinica'
        ];

    public $timestamps = false;
}
