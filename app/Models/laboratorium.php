<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laboratorium extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'length',
        'width',
        'description',
        'capacity',
        'floor_location',
    ];
}
