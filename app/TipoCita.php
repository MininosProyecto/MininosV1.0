<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCita extends Model
{
    protected $table = 'tipocita';
    protected $primaryKey = 'id_tipoCita';
    protected $fillable =
        [
            'tipoCita'
        ];

    public $timestamps = false;
}
