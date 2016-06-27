<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Contact;

class ContactMessageController extends Controller
{
    public function show()
    {
    	return view('frontend/contact');
    }

    public function submitcontactform(Request $request)
    {
        $Contact= new Contact;
        $Contact->name = $request->get('name');
        $Contact->number = $request->get('number');
        $Contact->email = $request->get('email');
        $Contact->messagebody = $request->get('messagebody');
        
        $Contact->save();

        \Session::flash('flash_message','Form Submitted!');
        
        return redirect()->back();
    }
}
