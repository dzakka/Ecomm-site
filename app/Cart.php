<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $casts = [
        'belongs_to_user' => 'array',
    ];
}
