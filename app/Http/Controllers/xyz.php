<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Offer;
use App\Models\Blog;
use App\Models\Room;
use App\Models\RoomImage;




class xyz extends Controller
{
    public function about()
    {
        $data['facilities'] = Facility::all();
        return view('about',$data);
    }

    public function blog()
    {
        $data['blogs'] = Blog::all();
        return view('blog',$data);
    }
    public function blogSingle()
    {
        return view('blog_single');
    }


    public function galary()
    {
        return view('galary');
    }

    public function contact()
    {
        return view('contact');
    }
    public function offer()
    {
        $data['offers'] = Offer::all();
        return view('offer',$data);
    }
    public function rooms()
    {
        $data['rooms'] = Room::all();

        return view('rooms',$data);
    }
    public function roomSingle()
    {
        return view('room_single');
    }
    public function booking()
    {
        return view('booking');
    }
    public function demo()
    {
        return view('demo');
    }
}
