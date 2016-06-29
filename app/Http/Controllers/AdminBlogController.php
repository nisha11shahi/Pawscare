<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Blog;

class AdminBlogController extends Controller
{
    public function showform()
    {
    	return view('admin/admin-blog');
    }

    public function viewallblogs()
    {
        $Blog= Blog::all();
        return view('admin/admin-viewblogs')->with('blogs',$Blog);
    }

    public function deleteblog($id)
    {
        $Blog=Blog::find($id);
        $Blog->delete();
        return redirect()->back();
    }
    
    public function submitpost(Request $request)
    {
    	$destinationPath = 'assets/uploads/';
        $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        $request->file('image')->move($destinationPath, $fileName);

        $Blog= new Blog;
        $Blog->title = $request->get('title');
        $Blog->body = $request->get('body');
        $Blog->image = $fileName;
                
        $Blog->save();

        \Session::flash('flash_message','New post added!');
        
        return redirect()->back();
    }
}
