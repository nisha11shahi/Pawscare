<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
    public function showdashboard()
    {
    	return view('admin/dashboard');
    }
    
    public function showlist()
    {

    	$users=User::all();
    	return view('admin/admin-user')->with('users',$users );
    }
}
