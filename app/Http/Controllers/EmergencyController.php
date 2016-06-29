<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Emergency;

class EmergencyController extends Controller
{
    public function submitemergencyform(Request $request)
    {

        $destinationPath = 'assets/uploads';
         $extension = $request->file('image1')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image1')->move($destinationPath, $fileName);

    	$Emergency= new Emergency;

        $Emergency->name = $request->get('name');
        $Emergency->contact = $request->get('contact');
        $Emergency->description = $request->get('description');
        $Emergency->image = $fileName;
        $Emergency->email = $request->get('email');
        
        $Emergency->save();

        /*sending sms*/
        $args = http_build_query(array(
            'token' => 'DVIPK32Pk5rIrj6SBPk9',
            'from'  => 'Demo', //$request->get('contact'),
            'to'    => urldecode('9849418457'),
            'text'  => 'Emergency, Please Check the website'
            ));

        $url = "http://api.sparrowsms.com/v2/sms/";

    # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if($status_code == 200){
            $msg = "SMS is send.";
        }else{
            $msg = "SMS not sent.";
        }
        /* sending sms via api*/

        \Session::flash('flash_message','Form Submitted! '. $msg);
        
        return redirect()->back();
    }
}
