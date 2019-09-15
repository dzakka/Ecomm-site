<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EcommSizes extends Model
{
    //
    protected $casts = [
        'color' => 'array',
    ];
}
