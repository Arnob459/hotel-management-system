<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;


class OfferController extends Controller
{
    public function Offer()
    {
        $data['page_title'] = 'Offer';
        $data['offer_list'] = Offer::all();
        return view('admin.pages.offer.index',$data);
    }

      public function offerCreate(){
          $data['page_title'] = ' offer Create';
          return view('admin.pages.offer.create',$data);
      }

      public function offerStore(Request $request){

          $this->validate($request, [
              'title' => 'required|string|max:255',
              'subtitle' => 'required|string|max:255',
              'section' => 'required|string|max:255',
              'date' => 'required|string|max:255',
              'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
          ]);

          if ($request->hasFile('image')) {
            try {
                $path = config('constants.offer.path');
                $size = config('constants.offer.size');
                $filename = upload_image($request->image, $path, $size);
            } catch (\Exception $exp) {

                return back()->withErrors('Image could not be uploaded');
            }
        }

          $offer = new Offer();
          $offer->title =  $request->title;
          $offer->short_text =  $request->subtitle;
          $offer->section =  $request->section;
          $offer->date =  $request->date;
          $offer->image =  $filename;

          $offer->save();
          return back()->with('success','offer Create Successfully');

      }

      public function offerEdit($id) {
          $data['page_title'] = 'offer Edit';

          $data['offer'] = Offer::findOrfail($id);
          return view('admin.pages.offer.edit',$data);
      }
      public function offerUpdate(Request $request, $id){
          $this->validate($request, [
              'title' => 'required|string|max:255',
              'subtitle' => 'required|string|max:255',
              'section' => 'required|string|max:255',
              'date' => 'required|string|max:255',
              'image' => 'image|mimes:jpeg,png,jpg|max:2048',
          ]);

          $data = Offer::findOrfail($id);

          if ($request->hasFile('image')) {
              $filename = $data->icon;
              try {
                  $path = config('constants.offer.path');
                  $size = config('constants.offer.size');
                  remove_file(config('constants.offer.path') . '/' .$data->image);
                  $filename = upload_image($request->image, $path, $size, $filename);
              } catch (\Exception $exp) {

                  return back()->withWarning('Image could not be uploaded');
              }
              $data->image = $filename;
          }

          $data->title = $request->title;
          $data->short_text = $request->subtitle;
          $data->section =  $request->section;
          $data->date =  $request->date;
          $data->save();
          return back()->with('success','Offer Updated Successfully');
      }
      public function destroy($id)
      {
          $data = Offer::find($id);
          if (!$data) {
              return redirect()->back()->with('success', ' Deleted successfully');
          }
          $data->delete();
          return redirect()->back()->with('success', ' Deleted successfully');
      }
}
