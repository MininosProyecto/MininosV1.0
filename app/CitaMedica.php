<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CitaMedica extends Model
{
    protected $table= 'cita_medica';
    protected $primaryKey = 'id_cita';
    protected $fillable =
        [   'fecha',
            'Mascota_id_mascota',
            'Agenda_idAgenda'];

    public $timestamps = false;
}
