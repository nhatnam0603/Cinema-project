<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = [
        'name',
        'image',
        'description',
        'began_at',
        'end_at',
    ];
    protected $attributes = [
        'image' => 'assets/img/movie/movie-default.jpg',
        'image_list' => '["assets\/img\/movie\/movie-list-default.jpg"]',
        'duration' => '01:30:00',
    ];
    public function types()
    {
        return $this->belongsToMany(TypeScreens::class,'movies_types','movie_id','type_id','id','id');
    }
    public function genres()
    {
        return $this->belongsToMany(Genres::class,'movies_genres','movie_id','genre_id','id','id');
    }
    public function casts()
    {
        return $this->belongsToMany(Casts::class,'movies_casts','movie_id','cast_id','id','id');
    }
    public function movieDateAssign(){
        return $this->hasMany(MoviesScreensTimeAssign::class);
    }
}
