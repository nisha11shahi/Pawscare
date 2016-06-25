<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function showlist(){
    	$users=User::all();
    	return view('admin-user')->with('users',$users );
    }

}
