<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function types()
    {
        return $this->belongsToMany(TypeScreens::class,'movies_types','id','type_id');
    }
    public function genres()
    {
        return $this->belongsToMany(Genres::class,'movies_genres','movie_id','genre_id','id','id');
    }
    public function casts()
    {
        return $this->belongsToMany(Casts::class,'movies_casts','movie_id','cast_id','id','id');
    }
}
