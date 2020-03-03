<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class HorarioEmpleado extends Model
    {
        protected $table = 'horarios_empleados';
        protected $primaryKey = 'idHorarios_Empleados';
        protected $fillable =
            [
            'idEmpleados',
            'horario_ingreso',
            'horario_salida',
            'dias'
            ];

        public $timestamps = false;
    }
