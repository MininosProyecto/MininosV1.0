<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'idAgenda';

    protected $fillable =
        [
            'fecha_agenda',
            'estado',
            'Empleados_id_veterinario'
        ];

    public $timestamps = false;
}
