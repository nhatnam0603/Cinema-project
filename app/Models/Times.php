<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    use HasFactory;

    public function time_types(){
        return $this->belongsTo(Bookings::class,'time_id');
    }
    public function time_assign_movie_screen(){
        return $this->hasMany(MoviesScreensTimeAssign::class,'time_id','id');
    }
}
