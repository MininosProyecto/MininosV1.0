<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
        protected $table= 'clientes';
        protected $primaryKey = 'id_cliente';
        protected $fillable =
            ['id_cliente',
                'nombre_cliente',
                'apellido_cliente',
                'tipo_documento',
                'nro_documento',
                'telefono',
                'celular',
                'correo',
                'direccion',
                'fecha_nacimiento'
            ];

        public $timestamps = false;
}
