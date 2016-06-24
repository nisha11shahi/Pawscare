<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdoptController extends Controller
{
    public function show(){
    	return view('frontend/adopt');
    }

    public function showform(){
    	return view('frontend/adoptform');
    }
}
