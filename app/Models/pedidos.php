<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $fillable = [
        'id',
        'ticket',
        'nombre',
        'total'
    ];
}
