<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Sintoma extends Model
    {
        protected $table = 'sintomas';
        protected $primaryKey = 'idSintomas';
        protected $fillable =
            [
                'fecha',
                'descripcion',
                'historiaClinica_id_historiaClinica'
            ];

        public $timestamps = false;
}
