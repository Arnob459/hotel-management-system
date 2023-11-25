<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Offer;
use App\Models\Blog;
use App\Models\Room;
use App\Models\RoomImage;
use App\Models\Gallery;





class FrontendController extends Controller
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
        $data['gallery'] = Gallery::all();

        return view('galary',$data);
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
        $data['rooms'] = Room::where('status',1)->get();

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
