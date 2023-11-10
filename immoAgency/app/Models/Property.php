<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [

        'surface' ,
        'rooms',
        'Bedrooms',
        'floor',
        'city',
        'postal_code',
        'sold',
    ];
}
