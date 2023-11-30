<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomCode;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BookingController extends Controller
{
    //

    public function booking()
    {
        return view('booking');
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
            'ref' => 'front',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'total_price' => $total_price,

            'user_id' => Auth::check() ? Auth::id() : null,
        ];

        Booking::create($bookingData);
        return redirect()->route('index')->with('success','Your reservation has been sent successfully.');

    }


    function available_rooms(Request $request, $checkin_date) {
        $availableRooms = RoomCode::whereNotIn('id', function($query) use ($checkin_date) {
            $query->select('room_id')
                ->from('bookings')
                ->whereRaw("'$checkin_date' BETWEEN checkin_date AND checkout_date");
        })->get();

        $data = [];
        foreach ($availableRooms as $room) {
            $roomTypes = Room::find($room->room_id);
            $data[] = ['room' => $room, 'roomtype' => $roomTypes];
        }

        return response()->json(['data' => $data]);
    }
}
