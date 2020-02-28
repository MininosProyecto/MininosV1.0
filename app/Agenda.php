<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'idAgenda';

    protected $fillable =
        [
            'idAgenda',
            'fecha_agenda',
            'estado',
            'descripcion',
            'TextColor',
            'Mascota_id_mascota',
            'Empleados_id_veterinario'
        ];

    public $timestamps = false;
}
