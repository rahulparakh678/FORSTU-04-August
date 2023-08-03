<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Studentpartnercontroller extends Controller
{
    //
    public function index()
    {
        return view('admin.studentpartners.index');
    }
}
