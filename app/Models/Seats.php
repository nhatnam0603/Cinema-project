<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    use HasFactory;
    public function bookings()
    {
        return $this->hasMany(Bookings::class,'seat_id');
    }
}
