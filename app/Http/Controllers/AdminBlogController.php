<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminBlogController extends Controller
{
    public function showform()
    {
    	return view('admin/admin-blog');
    }
    public function submitpost(Request $request)
    {
    	$destinationPath = 'assets/uploads';
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName);

        $LostandFound= new LostandFound;
        $LostandFound->image = $fileName;
        $LostandFound->description = $request->get('postdesc');
        
        $LostandFound->save();

        \Session::flash('flash_message','Animal added!');
        
        return redirect()->back();
    }
}
