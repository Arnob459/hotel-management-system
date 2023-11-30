<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use App\Models\RoomCode;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


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
        $price = RoomCode::findOrfail($request->room_id);
        $price_per_night =$price->Roomtype->price;

        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date');
        $checkin_date = Carbon::createFromFormat('Y-m-d', $checkin_date);
        $checkout_date = Carbon::createFromFormat('Y-m-d', $checkout_date);

        // Calculate the number of nights
        $num_nights = $checkout_date->diffInDays($checkin_date);

        // Calculate the total price
        $total_price = $num_nights * $price_per_night;


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
            'total_price' => $total_price,

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
            'status' => 'required|integer|string|min:0|max:2',

        ]);

        $price = RoomCode::findOrfail($request->room_id);
        $price_per_night =$price->Roomtype->price;

        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date');
        $checkin_date = Carbon::createFromFormat('Y-m-d', $checkin_date);
        $checkout_date = Carbon::createFromFormat('Y-m-d', $checkout_date);

        // Calculate the number of nights
        $num_nights = $checkout_date->diffInDays($checkin_date);

        // Calculate the total price
        $total_price = $num_nights * $price_per_night;

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
        $booking->status =  $request->status;
        $booking->user_id =  $request->user_id;
        $booking->total_price =  $total_price;

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



    public function roomAvailable(Request $request)
    {
        $page_title = 'Todays Available Rooms';
        $room_types = Room::orderBy('id','DESC')->get();


        $checkin_date = Carbon::now()->toDateString();
        $checkout_date = Carbon::now()->toDateString();

        // Find rooms available today
        $availableRooms = RoomCode::whereDoesntHave('bookings', function ($query) use ($checkin_date, $checkout_date) {
            $query->where(function ($query) use ($checkin_date, $checkout_date) {
                $query->where('checkout_date', '>=', $checkin_date)
                      ->where('checkin_date', '<=', $checkout_date);
            });
        })->get();

        return view('admin.booking.available_rooms',compact('page_title','room_types','availableRooms'));

    }


    public function findAvailableRooms(Request $request)
    {
        $page_title = 'Available Rooms';
        $room_types = Room::orderBy('id','DESC')->get();


        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date');


        // Find rooms that do not have bookings within the specified date range
        // $availableRooms = RoomCode::whereDoesntHave('bookings', function ($query) use ($checkin_date, $checkout_date) {
        //     $query->where('checkout_date', '<=', $checkin_date)
        //         ->orWhere('checkin_date', '>=', $checkout_date);
        // })->get();

        $availableRooms = RoomCode::whereDoesntHave('bookings', function ($query) use ($checkin_date, $checkout_date) {
            $query->where(function ($query) use ($checkin_date, $checkout_date) {
                $query->where('checkout_date', '>=', $checkin_date)
                      ->where('checkin_date', '<=', $checkout_date);
            });
        })->get();



        return view('admin.booking.available_rooms',compact('page_title','room_types','availableRooms'));

    }
}
