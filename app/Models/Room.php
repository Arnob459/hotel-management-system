<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    protected $guarded = [];
    protected $table = 'rooms';
    public $timestamps = false;


    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }
}
