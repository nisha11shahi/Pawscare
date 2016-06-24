<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function showdashboard()
    {
    	return view('admin/dashboard');
    }
}
