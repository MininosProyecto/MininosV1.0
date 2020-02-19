<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable =
        [
          'nombre',
          'apellido',
          'tipo_documento',
          'nro_documento',
          'telefono',
          'celular',
          'correo',
          'direccion',
          'cargo',
          'fecha_nacimiento'
        ];

    public $timestamps = false;
}
