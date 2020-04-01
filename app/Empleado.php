<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $primaryKey = 'idEmpleado';
    protected $fillable =
        [
          'nombre_empleado',
          'apellido_empleado',
          'tipo_documento',
          'nro_documento',
            'cargo',
          'telefono',
          'celular',
          'correo',
          'direccion',
          'Horarios_Empleados_id_Horarios_Empleados'
        ];

    public $timestamps = false;
}
