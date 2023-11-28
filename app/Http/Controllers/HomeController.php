<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $booking = Booking::where('user_id',auth()->user()->id)->get();

        return view('home',compact('booking'));
    }

    public function profile()
    {
        return view('profile');
    }
    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required|max:160',
            'email' => 'required',
            'phone' => 'required|max:20',
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return back()->with('success', 'Your profile has been updated');
    }
}
