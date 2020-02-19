<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaClinica extends Model
{
    protected $table= 'historia_clinica';
    protected $primaryKey = 'idHistoria_clinica';

    protected $fillable =
        [
            'Mascotas_idMascotas'
        ];

    public $timestamps = false;
}
