<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\LostandFound;

class AdminLostandFoundController extends Controller
{
    public function showform()
    {
    	return view('admin/admin-lostandfound');
    }

    public function viewall()
    {
        $LostandFound= LostandFound::all();
        return view('admin/admin-lostandfoundlist')->with('lostandfounds',$LostandFound);
    }

    public function addnewanimal(Request $request)
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
    
    public function deleteAnimal($id)
    {
    	$LostandFound=LostandFound::find($id);
        $LostandFound->delete();
        return redirect()->back();
    }
}
