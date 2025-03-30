<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationLink extends Model
{
    //

    protected $fillable = [
        'label',
        'route_name',
        'url',
        'order',
    ];
}
