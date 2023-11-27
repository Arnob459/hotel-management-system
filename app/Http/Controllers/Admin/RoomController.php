<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomImage;
use App\Models\RoomCode;


class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with('images')->get();
        $page_title = 'Room Type';
        return view('admin.rooms.index', compact('rooms','page_title'));
    }

    public function create()
    {
        $page_title = 'Room Type Create';
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
                    $old_image = null;
                    $filename = upload_image($image, $path, $size,$old_image);
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
            'status' => 'required|integer|string|min:0|max:2',
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
        $room->status =  $request->status;

        $room->save();

        return back()->with('success','Room Updated Successfully');
    }


    public function photos($id)
    {
        $data['page_title'] = 'Room Photos';

        $data['photos'] = RoomImage::where('room_id',$id)->get();
        $data['room_id'] = $id;
        return view('admin.rooms.photos',$data);
    }

    public function photosUpdate(Request $request,$id){



        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
          try {
              $path = config('constants.room.path');
              $size = config('constants.room.size');
              $filename = upload_image($request->image, $path, $size);
          } catch (\Exception $exp) {

              return back()->withErrors('Image could not be uploaded');
          }
        $data = new RoomImage();
        $data->room_id =  $id;
        $data->picture =  $filename;
        $data->save();
      }


        return back()->with('success','Picture Added Successfully');

    }

    public function photosDestroy($id)
    {
        $data = RoomImage::find($id);
        if (!$data) {
            return redirect()->back()->with('success', ' Deleted successfully');
        }
        remove_file(config('constants.room.path') . '/' . $data->picture);
        $data->delete();
        return redirect()->back()->with('success', ' Deleted successfully');
    }

    public function roomIndex()
    {
        $rooms = RoomCode::all();
        $page_title = 'Rooms';
        return view('admin.room.index', compact('rooms','page_title'));
    }

    public function roomCreate()
    {
        $page_title = 'Room Create';
        $roomtypes = Room::where('status',1)->get();

        return view('admin.room.create', compact('page_title','roomtypes'));
    }

    public function roomStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'room_type' => 'required|integer|max:255',
        ]);


        $room = new RoomCode();
        $room->title =  $request->title;
        $room->room_id =  $request->room_type;

        $room->save();

        return redirect()->route('admin.room.create')->with('success', 'Room created successfully.');
    }

    public function roomEdit($id) {
        $data['page_title'] = 'Room Edit';
        $data['roomtypes'] = Room::where('status',1)->get();
        $data['room'] = RoomCode::findOrfail($id);

        return view('admin.room.edit',$data);
    }
    public function roomUpdate(Request $request, $id){

        $request->validate([
            'title' => 'required|string|max:255',
            'room_type' => 'required|integer|max:255',
        ]);

        $room = RoomCode::findOrfail($id);
        $room->title =  $request->title;
        $room->room_id =  $request->room_type;
        $room->save();

        return back()->with('success','Room Updated Successfully');
    }

    public function roomDestroy($id)
    {
        $data = RoomCode::find($id);
        if (!$data) {
            return redirect()->back()->with('success', ' Deleted successfully');
        }
        $data->delete();
        return redirect()->back()->with('success', ' Deleted successfully');
    }


}
