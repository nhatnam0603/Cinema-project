<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesTypes extends Model
{
    use HasFactory;
    protected $table = 'movies_types';
    protected $fillable = [
        'type_id',
        'movie_id',
    ];
}
