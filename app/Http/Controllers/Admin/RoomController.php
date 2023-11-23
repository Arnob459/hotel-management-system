<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomImage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('images')->get();
        $page_title = 'Room Create';
        return view('admin.rooms.index', compact('rooms','page_title'));
    }

    public function create()
    {
        $page_title = 'Room Create';
        return view('admin.rooms.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|max:255',
            'area' => 'required|string|max:255',
            'guest' => 'required|string|max:255',
            'price' => 'required|numeric|gt:0',
            'short_text' => 'required|string',
            'facility' => 'required|string',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $room = new Room();
        $room->name =  $request->name;
        $room->quantity =  $request->quantity;
        $room->area =  $request->area;
        $room->guest =  $request->guest;
        $room->price =  $request->price;
        $room->short_text =  $request->short_text;
        $room->facility =  $request->facility;
        $room->description =  $request->description;

        $room->save();

            foreach ($request->file('images', []) as $image) {
                try {
                    $path = config('constants.room.path');
                    $size = config('constants.room.size');
                    $thumb = config('constants.room.thumb');
                    $old_image = null;
                    $filename = upload_image($image, $path, $size,$old_image, $thumb);
                } catch (\Exception $exp) {
                    return back()->withErrors('Image could not be uploaded');
                }
                $room->images()->create(['picture' => $filename]);
            }

        return redirect()->route('admin.rooms.create')->with('success', 'Room created successfully.');
    }

    public function edit($id) {
        $data['page_title'] = 'Room Edit';

        $data['room'] = Room::findOrfail($id);
        return view('admin.rooms.edit',$data);
    }
    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|max:255',
            'area' => 'required|string|max:255',
            'guest' => 'required|string|max:255',
            'price' => 'required|numeric|gt:0',
            'short_text' => 'required|string',
            'facility' => 'required|string',
            'description' => 'required|string',
        ]);

        $room = Room::findOrfail($id);
        $room->name =  $request->name;
        $room->quantity =  $request->quantity;
        $room->area =  $request->area;
        $room->guest =  $request->guest;
        $room->price =  $request->price;
        $room->short_text =  $request->short_text;
        $room->facility =  $request->facility;
        $room->description =  $request->description;
        $room->save();

        return back()->with('success','Room Updated Successfully');
    }
    public function destroy($id)
    {
        $data = Room::find($id);
        if (!$data) {
            return redirect()->back()->with('success', ' Deleted successfully');
        }
        $data->delete();
        return redirect()->back()->with('success', ' Deleted successfully');
    }
}
