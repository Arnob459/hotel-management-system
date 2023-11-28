<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
   {
       $data['page_title'] = "Connectors";
       $data['contacts'] = Contact::orderBy('id', 'desc')->paginate(15);
       return view('admin.contact.index', $data);
   }

   public function details($id)
   {
       $data['page_title'] = "Connectors Details";
       $data['contacts'] = Contact::findOrfail($id);
       return view('admin.contact.details', $data);
   }
    public function sendMail(Request $request,$id)
    {
        $request->validate([
        'subject' => 'required|string|max:191',
        'message' => 'required|string',
        ]);

        if (!Contact::first()) return back()->withErrors(['No Connectors to send email.']);
        $connector = Contact::findOrfail($id);
            $receiver_name = explode('@', $connector->email)[0];
            send_general_email($connector->email, $request->subject, $request->message, $receiver_name);

        return back()->with('success','Email will be sent to '.$connector->email);

    }

}
