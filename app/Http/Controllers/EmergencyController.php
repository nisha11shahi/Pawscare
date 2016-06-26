<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Emergency;

class EmergencyController extends Controller
{
    public function submitemergencyform(Request $request)
    {
		$destinationPath = 'assets/uploads';
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName);

    	$Emergency= new Emergency;
        $Emergency->name = $request->get('name');
        $Emergency->contact = $request->get('contact');
        $Emergency->description = $request->get('description');
        $Emergency->image = $request->get('image');
        $Emergency->email = $request->get('email');
        
        $Emergency->save();

        \Session::flash('flash_message','Form Submitted!');
        
        return redirect()->back();
    }
}
