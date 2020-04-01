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
            'Mascota_id_mascota',
            'Empleados_id_veterinario',
            'Correo'
        ];

    public $timestamps = false;
}
