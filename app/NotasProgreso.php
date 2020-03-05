<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotasProgreso extends Model
{
    protected $table = 'notas progreso';
    protected $primaryKey = 'idNotas_Progreso';
    protected $fillable =
        [
            'fecha',
            'descripcion',
            'historiaClinica_id_historiaClinica'
        ];

    public $timestamps = false;
}
