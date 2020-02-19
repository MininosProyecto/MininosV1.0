<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimentacion extends Model
{
    protected $table= 'alimentacion';
    protected $primaryKey = 'id_alimentacion';
    protected $fillable =
        ['id_alimentacion',
            'producto',
            'Historia_Clinica_id_historia_clinica'];
}
