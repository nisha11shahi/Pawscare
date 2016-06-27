<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LostandFoundController extends Controller
{
    public function show()
    {
    	return view('frontend/lostandfound');
    }
}
