<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminBlogController extends Controller
{
    public function showform()
    {
    	return view('admin/admin-blog');
    }
}
