<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Butaca extends Model
{
    protected $fillable = [
        'asiento',
        'cliente',
        'codigo_pago',
        'estado',
    ];
}
