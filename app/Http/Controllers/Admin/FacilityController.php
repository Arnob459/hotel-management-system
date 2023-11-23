<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;


class FacilityController extends Controller
{
    public function Facility()
    {
        $data['page_title'] = 'Facility';
        $data['facility_list'] = Facility::all();
        return view('admin.pages.facility.index',$data);
    }

      public function facilityCreate(){
          $data['page_title'] = ' Facility Create';
          return view('admin.pages.facility.create',$data);
      }

      public function facilityStore(Request $request){

          $this->validate($request, [
              'title' => 'required|string|max:255',
              'subtitle' => 'required|string|max:255',
              'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
          ]);

          if ($request->hasFile('image')) {
            try {
                $path = config('constants.facility.path');
                $size = config('constants.facility.size');
                $filename = upload_image($request->image, $path, $size);
            } catch (\Exception $exp) {

                return back()->withErrors('Image could not be uploaded');
            }
        }

          $facility = new Facility();
          $facility->title =  $request->title;
          $facility->short_text =  $request->subtitle;
          $facility->image =  $filename;
          $facility->save();
          return back()->with('success','Facility Create Successfully');

      }

      public function facilityEdit($id) {
          $data['page_title'] = 'Facility Edit';

          $data['facility'] = Facility::findOrfail($id);
          return view('admin.pages.facility.edit',$data);
      }
      public function facilityUpdate(Request $request, $id){
          $this->validate($request, [
              'title' => 'required|string|max:255',
              'subtitle' => 'required|string|max:255',
              'image' => 'image|mimes:jpeg,png,jpg|max:2048',
          ]);

          $data = Facility::findOrfail($id);

          if ($request->hasFile('image')) {
              $filename = $data->icon;
              try {
                  $path = config('constants.facility.path');
                  $size = config('constants.facility.size');
                  remove_file(config('constants.facility.path') . '/' .$data->image);
                  $filename = upload_image($request->image, $path, $size, $filename);
              } catch (\Exception $exp) {

                  return back()->withWarning('Image could not be uploaded');
              }
              $data->image = $filename;
          }

          $data->title = $request->title;
          $data->short_text = $request->subtitle;
          $data->save();
          return back()->with('success','Facility Updated Successfully');
      }
      public function destroy($id)
      {
          $data = Facility::find($id);
          if (!$data) {
              return redirect()->back()->with('success', ' Deleted successfully');
          }
          $data->delete();
          return redirect()->back()->with('success', ' Deleted successfully');
      }
}
