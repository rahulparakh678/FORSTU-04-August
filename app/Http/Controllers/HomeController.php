<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use Illuminate\Support\Facades\Mail;
Use App\Mail\StudentRegistered;
Use App\Mail\ApplicationSubmitted;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    

    public function sendemail(Request $request){
       /* $details=[
        'title'=>'Mail from FORSTU EDUTECH',
        'body'=>'This is new mail testing email',
    ];
    Mail::to('rahul@forstu.co')->send(new App\Mail\StudentRegistered($details));*/

    echo "Email has been sent";
    }

    public function stumail(){
        //return view('')
        //return view('demo');
       /* $details=[
        'title'=>'Mail from FORSTU EDUTECH',
        'body'=>'This is new mail testing email',
    ];
    \Mail::to('rahul@forstu.co')->send(new App\Mail\StudentRegistered($details));
        echo "Hi";*/
        //$name='Bob';
        Mail::to('rahul.parakh@aif.org')->send(new ApplicationSubmitted($name));
        echo "Email is Sent";

    }

    
}
