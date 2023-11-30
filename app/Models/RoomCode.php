<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCode extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'room_codes';
    public $timestamps = false;

    function Roomtype(){
        return $this->belongsTo(Room::class,'room_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_id');
    }

}
