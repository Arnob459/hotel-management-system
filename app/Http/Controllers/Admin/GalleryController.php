<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;



class GalleryController extends Controller
{
        //gallery
        public function index()
        {
            $data['page_title'] = 'Gallery';
            $data['galleries'] = Gallery::all();
            return view('admin.pages.gallery.index',$data);
        }

        public function store(Request $request){


            $this->validate($request, [
                'title' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2024',
            ]);

            if ($request->hasFile('image')) {
                try {
                    $path = config('constants.gallery.path');
                    $old_image = null;
                    $filename = upload_image($request->image, $path, $old_image);
                } catch (\Exception $exp) {
                    return back()->withErrors('Image could not be uploaded');
                }
            }

            $gallery = new Gallery();
            $gallery->title =  $request->title;
            $gallery->image =  $filename;
            $gallery->save();
            return redirect()->back()->with('success','gallery Create Successfully');

        }

        public function edit($id) {
            $data['page_title'] = 'gallery Edit';

            $data['gallery'] = Gallery::findOrfail($id);
            return view('admin.pages.gallery.edit',$data);
        }
        public function update(Request $request, $id){

            $this->validate($request, [
                'title' => 'required|string|max:255',
                'image' => 'image|mimes:jpeg,png,jpg|max:2024',
            ]);

            $gallery = Gallery::findOrfail($id);
            if ($request->hasFile('image')) {
                $filename = $gallery->image;
                try {
                    $path = config('constants.gallery.path');
                    $size = config('constants.gallery.size');

                    remove_file(config('constants.gallery.path') . '/' . $gallery->image);
                    $filename = upload_image($request->image, $path, $size, $filename);
                } catch (\Exception $exp) {
                    return back()->withErrors('Image could not be uploaded');
                }
                $gallery->image = $filename;
            }
            $gallery->title =  $request->title;
            $gallery->save();
            return back()->with('success','gallery Updated Successfully');
        }
        public function destroy($id)
        {
            $data = Gallery::find($id);
            if (!$data) {
                return redirect()->back()->with('success', ' Deleted successfully');
            }
            remove_file(config('constants.galary.path') . '/' . $data->picture);
            $data->delete();
            return redirect()->back()->with('success', ' Deleted successfully');
        }
}
