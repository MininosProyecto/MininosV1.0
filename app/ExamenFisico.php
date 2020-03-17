<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table= 'examen_fisico';
    protected $primaryKey = 'idExamen_Fisico';
    protected $fillable =
        [
            'fc',
            'fr',
            'Temperatura',
            'TLLC',
            'mem_mucosa',
            'pulso',
            'peso',
            'S_cardioVascular',
            'S_respiratorio',
            'S_nervioso',
            'S_genitaurino',
            'S_musculoEsqueletico',
            'S_digestivo',
            'ojo',
            'oido',
            'S_tegumentario',
            'S_linfatico',
            'actitud',
            'hidratacion',
            'historiaClinica_id_historiaClinica'
        ];
}
