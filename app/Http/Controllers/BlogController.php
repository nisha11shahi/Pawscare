<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
	
    public function showsinglepost()
    {
    	return view('frontend/blog-post');
    }

    public function showallpost()
  {
    $blogs=\App\Blog::orderBy('id', 'desc')->get();
    return view('frontend/blog')->with('blogs',$blogs) ;
   
}
}
