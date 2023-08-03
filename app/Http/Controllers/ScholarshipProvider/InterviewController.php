<?php

namespace App\Http\Controllers\ScholarshipProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ScholarshipInterview;
class InterviewController extends Controller
{
    //
    public function index(Request $request)
    {
        $studentDetail = ScholarshipInterview::create($request->all());
        return view('scholarshipprovider.home');
    }
}
