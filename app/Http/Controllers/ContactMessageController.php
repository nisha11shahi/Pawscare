<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactMessageController extends Controller
{
    public function show(){
    	return view('frontend/contact');
    }}
