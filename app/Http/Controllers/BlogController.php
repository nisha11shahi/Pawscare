<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
     public function show()
     {
    	return view('frontend/blog');
    }

public function showsinglepost(){
    	return view('frontend/blog-post');
    }
    }
