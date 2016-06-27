<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class AdminMessageController extends Controller
{
	public function showmessagelist()
	{

		$Contact= Contact::all();
		return view('admin/admin-message')->with('contacts',$Contact);
	}
}
