<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LostandFound;

class LostandFoundController extends Controller
{
    public function show()
    {
    	$lostandfounds=\App\lostandFound::orderBy('id', 'desc')->get();
    return view('frontend/lostandfound')->with('lostandfounds',$lostandfounds) ;
    }
}
