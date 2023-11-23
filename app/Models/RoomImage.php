<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    protected $guarded = [];
    protected $table = 'room_images';
    public $timestamps = false;


    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
