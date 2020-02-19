<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table= 'mascota';
    protected $primaryKey = 'id_mascota';
    protected $fillable =
        [
            'nombre_mascota',
            'fecha_nacimiento',
            'Clientes_id_cliente',
            'Raza_id_raza',
            'Sexo_id_sexo',
            'Especie_id_especie'
        ];

    public $timestamps = false;
}
