<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SettingExtra;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    //
        //Banner
        public function Banner()
        {
            $data['page_title'] = 'Banner Update';
            $data['banner'] = SettingExtra::first();
            return view('admin.pages.banner',$data);
        }

        public function bannerUpdate(Request $request)
        {
            $this->validate($request, [
                'banner_title' => 'required|string|max:255',
                'banner_subtitle' => 'required|string|max:255',
                'banner_bg_video' => 'nullable|mimes:mp4|max:10240',
                'banner_img' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $data = SettingExtra::first();

            if ($request->hasFile('banner_bg_video')) {
            remove_file(config('constants.banner_video.path') . '/' . $data->bg_video);

                $videoPath = $request->file('banner_bg_video')->store( );
                $request->file('banner_bg_video')->move(public_path('assets/videos'), $videoPath);
                $data->bg_video = $videoPath;
            }
            if ($request->hasFile('banner_img')) {
                $filename = $data->image;
                try {
                    $path = config('constants.banner_image.path');
                    $size = config('constants.banner_image.size');
                    remove_file(config('constants.banner_image.path') . '/' .$data->image);
                    $filename = upload_image($request->banner_img, $path, $size, $filename);
                } catch (\Exception $exp) {

                    return back()->withErrors('Image could not be uploaded');
                }
                $data->image = $filename;
            }

            $data->banner_title = $request->banner_title;
            $data->banner_sub_title = $request->banner_subtitle;
            $data->save();
            return back()->with('success','Updated Successfully');
        }

}
