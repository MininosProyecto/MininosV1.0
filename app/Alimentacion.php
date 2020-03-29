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
            'tipoProducto',
            'frecuencia'
        ];

    public $timestamps = false;
}
