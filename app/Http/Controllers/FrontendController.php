<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Offer;
use App\Models\Blog;
use App\Models\Room;
use App\Models\RoomImage;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Contact;








class FrontendController extends Controller
{
    public function index()
    {
        $data['testimonials'] = Testimonial::all();
        $data['rooms'] = Room::where('status',1)->inRandomOrder()->take(3)->get();


        return view('welcome',$data);
    }

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
    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string|max:2055',

        ]);


        $data = new Contact();
        $data->name =  $request->name;
        $data->email =  $request->email;
        $data->phone =  $request->phone;
        $data->message =  $request->message;
        $data->save();

        return redirect()->route('contact')->with('success', 'Form Submitted successfully.');
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
    public function roomSingle($id)
    {
        $data['room']= Room::with('images')->where('status',1)->findOrfail($id);
        $data['photos'] = RoomImage::where('room_id',$id)->get();

        return view('room_single',$data);
    }

}
