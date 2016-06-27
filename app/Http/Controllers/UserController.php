<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function deleteAdmin($id)
    {
    	$User=User::find($id);
        $User->delete();
        return redirect()->back();
    }

}
