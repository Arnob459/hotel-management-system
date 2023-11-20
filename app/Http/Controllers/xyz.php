<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xyz extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
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
        return view('offer');
    }
    public function rooms()
    {
        return view('rooms');
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
