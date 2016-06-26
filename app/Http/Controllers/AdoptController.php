<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Adoption;
use App\Requestadopt;

class AdoptController extends Controller
{
    public function show(){
    	return view('frontend/adopt');
    }

    public function showform()
    {
    	return view('frontend/adoptform');
    }

    public function submitadoptform(Request $request)
    {
    	$Adoption= new Requestadopt;
        $Adoption->name = $request->get('name');
        $Adoption->phone = $request->get('phone');
        $Adoption->email = $request->get('email');
        $Adoption->address = $request->get('address');
        $Adoption->whyadopt = $request->get('whyadopt');
        
        $Adoption->save();

        \Session::flash('flash_message','Form Submitted!');
        
        return redirect()->back();
    }
}
