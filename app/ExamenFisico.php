<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table= 'examen_fisico';
    protected $primaryKey = 'idExamen_Fisico';
    protected $fillable =
        [
            'FC',
            'FR',
            'Temp',
            'TLLC',
            'Mem_Mucosa',
            'Pulso',
            'Pulso',
            'S_Cardiovascular',
            'S_Respiratorio',
            'S_Nervioso',
            'S_Genitourinario',
            'S_Musculo_Esqueletico',
            'S_Digestivo',
            'Ojo',
            'Oido',
            'S_Tegumentario',
            'S_Linfatico',
            'Actitud',
            'Hidratacion',
            'Historia_Clinica_id_historia_clinica'
        ];
}
