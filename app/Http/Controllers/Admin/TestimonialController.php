<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    //Testimonial
        public function Testimonial()
        {
            $data['page_title'] = 'Testimonial';
            $data['testimonials'] = Testimonial::all();
            return view('admin.pages.testimonial.index',$data);
        }

        public function testimonialCreate(){
            $data['page_title'] = ' Testimonial Create';
            return view('admin.pages.testimonial.create',$data);
        }

        public function testimonialStore(Request $request){

            $this->validate($request, [
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'quote' => 'required|string|max:3000',
            ]);


            $testimonial = new Testimonial();
            $testimonial->author =  $request->name;
            $testimonial->designation =  $request->designation;
            $testimonial->quote =  $request->quote;
            $testimonial->save();
            return redirect()->route('admin.testimonial')->with('success','Testimonial Create Successfully');

        }

        public function testimonialEdit($id) {
            $data['page_title'] = 'Testimonial Edit';

            $data['testimonial'] = Testimonial::find($id);
            return view('admin.pages.testimonial.edit',$data);
        }
        public function testimonialUpdate(Request $request, $id){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'quote' => 'required|string|max:3000',
            ]);

            $testimonial = Testimonial::findOrfail($id);

            $testimonial->author =  $request->name;
            $testimonial->designation =  $request->designation;
            $testimonial->quote =  $request->quote;
            $testimonial->save();
            return back()->with('success','Testimonial Updated Successfully');
        }
        public function destroy($id)
        {
            $data = Testimonial::find($id);
            if (!$data) {
                return redirect()->back()->with('success', ' Deleted successfully');
            }
            $data->delete();
            return redirect()->back()->with('success', ' Deleted successfully');
        }
}
