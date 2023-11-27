<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomCode;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //

    public function booking()
    {
        return view('booking');
    }

    public function bookingStore(Request $request)
    {
        dd($request);

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

        $bookingData = [
            'room_id' => $request->room_id,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'total_adults' => $request->adults,
            'total_children' => $request->children,
            'ref' => 'front',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

            'user_id' => Auth::check() ? Auth::id() : null,
        ];

        Booking::create($bookingData);
        return redirect()->route('index')->with('success','Your reservation has been sent successfully.');

    }
      // Check Avaiable rooms
    //   function available_rooms(Request $request,$checkin_date){
    //     $arooms=DB::SELECT("SELECT * FROM room_codes WHERE id NOT IN (SELECT room_id FROM bookings WHERE '$checkin_date' BETWEEN checkin_date AND checkout_date)");


    //     $data=[];
    //     foreach($arooms as $room){
    //         $roomTypes=Room::find($room->room_id);
    //         $data[]=['room'=>$room,'roomtype'=>$roomTypes];
    //     }

    //     return response()->json(['data'=>$data]);
    // }

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
