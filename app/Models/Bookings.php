<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    public function movie_id(){
        return $this->belongsTo(Movies::class,'id');
    }
    public function seat_id(){
        return $this->hasMany(Seats::class,'id');
    }
    public function time_id(){
        return $this->belongsTo(Times::class,'id');

    }
    public function ticket_id(){
        return $this->belongsTo(Tickets::class,'id');
    }
}
