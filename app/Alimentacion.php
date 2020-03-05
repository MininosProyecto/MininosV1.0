<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimentacion extends Model
{
    protected $table= 'alimentacion';
    protected $primaryKey = 'idAlimentacion';
    protected $fillable =
        [
            'producto',
            'historiaClinica_id_historiaClinica'
        ];

    public $timestamps = false;
}
