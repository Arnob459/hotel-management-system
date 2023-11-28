<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;

use App\Models\RoomCode;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //


    public function booking()
    {
        $data['page_title'] = 'Booking';
        $data['bookings'] = Booking::latest()->paginate(15);
        return view('admin.booking.index',$data);
    }

    public function bookingCreate(){
        $data['page_title'] = ' Booking Create';
        $data['users'] = User::where('status',1)->latest()->get();

        return view('admin.booking.create',$data);
    }


    public function bookingStore(Request $request)
    {

        $this->validate($request, [
            'room_id' => 'required|integer|max:10',
            'checkin_date' => 'required|string|max:255',
            'checkout_date' => 'required|string|max:255',
            'adults' => 'required|integer|max:255',
            'children' => 'required|integer|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'user_id' => 'nullable|integer|max:20',


        ]);

        $bookingData = [
            'room_id' => $request->room_id,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'total_adults' => $request->adults,
            'total_children' => $request->children,
            'booking_code' => getTrx(),
            'ref' => 'admin',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'user_id' => $request->user_id,
        ];

        Booking::create($bookingData);
        return redirect()->route('admin.booking.index')->with('success','Booking created successfully.');

    }
    public function bookingEdit($id) {
        $data['page_title'] = 'Booking Edit';
        $data['users'] = User::where('status',1)->latest()->get();
        $data['booking'] = Booking::findOrfail($id);
        return view('admin.booking.edit',$data);
    }
    public function bookingUpdate(Request $request, $id){

        $this->validate($request, [
            'room_id' => 'required|integer|max:10',
            'checkin_date' => 'required|string|max:255',
            'checkout_date' => 'required|string|max:255',
            'adults' => 'required|integer|max:255',
            'children' => 'required|integer|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'user_id' => 'nullable|integer|max:20',
            'payment_status' => 'required|integer|string|min:0|max:2',
        ]);

        $booking = Booking::findOrfail($id);
        $booking->room_id =  $request->room_id;
        $booking->checkin_date =  $request->checkin_date;
        $booking->checkout_date =  $request->checkout_date;
        $booking->total_adults =  $request->adults;
        $booking->total_children =  $request->children;
        $booking->name =  $request->name;
        $booking->email =  $request->email;
        $booking->phone =  $request->phone;
        $booking->payment_status =  $request->payment_status;

        $booking->save();
        return back()->with('success','Booking Updated Successfully');
    }

    public function bookingDestroy($id)
    {
        $data = Booking::find($id);
        if (!$data) {
            return redirect()->back()->with('success', ' Deleted successfully');
        }
        $data->delete();
        return redirect()->back()->with('success', ' Deleted successfully');
    }
}
