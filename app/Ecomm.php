<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecomm extends Model
{
    //
    protected $casts = [
        'color' => 'array',
    ];
}
