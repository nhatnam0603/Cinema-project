<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'Moives';

    protected $fillable = [
        'name',
        'image',
        'description',
        'type',
        'began_at',
        'end_at',
    ];

}
