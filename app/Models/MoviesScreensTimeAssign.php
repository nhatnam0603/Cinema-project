<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesScreensTimeAssign extends Model
{
    use HasFactory;
    protected $table = 'movies_screens_time_assign';
    public function screen()
    {
        return $this->hasOne(Screens::class,'id','screen_id');
    }
    public function time()
    {
        return $this->hasOne(Times::class,'id','time_id');
    }
    public function movie()
    {
        return $this->hasOne(Movie::class,'id','movie_id');
    }
}
