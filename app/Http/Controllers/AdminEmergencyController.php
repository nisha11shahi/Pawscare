<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Emergency;

class AdminEmergencyController extends Controller
{
    public function viewemergencymessage()
    {
        $emergencies= Emergency::all();
        return view('admin/admin-emergency')->with('emergencies',$emergencies);
    }
}
