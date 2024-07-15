<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'length',
        'width',
        'description',
        'capacity',
        'floor_location',
        'user_room',
    ];
}
