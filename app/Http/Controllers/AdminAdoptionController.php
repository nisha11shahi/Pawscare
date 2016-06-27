<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Adoption;
use App\Requestadopt;


class AdminAdoptionController extends Controller
{
    public function showform()
    {
    	return view('admin/admin-adoption');
    }

    public function viewall()
    {
        $Adoptions= Adoption::all();
        return view('admin/admin-adoptionlist')->with('adoptions',$Adoptions);
    }

    public function viewallmessage()
    {
        $Adoptions= Requestadopt::all();
        return view('admin/admin-adoptionmessage')->with('requestadopts',$Adoptions);
    }
    
    public function addnewanimal(Request $request)
    {
    	
        $destinationPath = 'assets/uploads';
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName);

        $Adopt= new Adoption;
        $Adopt->image = $fileName;
        $Adopt->description = $request->get('postdesc');
        $Adopt->name = $request->get('name');
        $Adopt->author_id = $request->get('author_id');
        
        $Adopt->save();

        \Session::flash('flash_message','Animal added!');
        
        return redirect()->back();
    }
   

    public function deleteAdoption($id)
    {
    	$Adopt=Adoption::find($id);
        $Adopt->delete();
        return redirect()->back();
    }

}
