<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    function user(){
        return $this->belongsTo(User::class);
    }

    function room(){
        return $this->belongsTo(RoomCode::class);
    }
}
