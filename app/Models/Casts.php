<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casts extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'image'
    ];
    
    public function cast_id() {
        return $this->belongsTo(Movies_Casts::class,'cast_id');
    }
}
