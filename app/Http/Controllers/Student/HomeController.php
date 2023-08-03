<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Scholarship;
use Auth;
use App\StudentProfile;
use App\StudStatus;
use DB;
use App\StudentCourses;
use App\Coursetype;
use App\Mail\StudentRegistered;
use Illuminate\Support\Facades\Mail;
use App\Mail\ScholarshipApplicationSubmitted;
use App\User;
class HomeController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['auth','verified']);

    }


    
    public function studentsview(Request $request){

        $user_id=Auth::user()->id;
        
        //$profile=StudentProfile::where()
        $name=Auth::user()->name;
        $status=$request['STATUS'];
        $respcode=$request['RESPCODE'];
        $respmsg=$request['RESPMSG'];
        $txn_date=$request['TXNDATE'];
        $txn_paymentmode=$request['PAYMENTMODE'];

        DB::table('sfcpayments')->insertGetId([
                'user_id' => $user_id,
                'user_name'=>$name,
                'txn_status'=>$status,
                'txn_respmsg'=>$respmsg,
                'txn_date'=>$txn_date,
                'txn_paymentmode'=>$txn_paymentmode,
            ]);
         
        if ($respcode==01) {
            // code...
            return view('students.paymentsuccess',compact('status','respcode','respmsg'));
        }
        else{

         
            //return view('students.paymentfail',compact('status','respcode','respmsg','name'));
             return view('students.paymentfail',compact('status','respcode','respmsg','name','user_id','txn_date','txn_paymentmode'));
        }
    }

    public function index()
    {

        if(StudentProfile::where('user_id',auth()->user()->id)->exists())
        {
             $profile=StudentProfile::where('user_id',Auth::user()->id)->first();
             $studentcourse=StudentCourses::all();
             $course_types = Coursetype::all();
             return view('students.home',compact('profile','studentcourse','course_types'));
        }
        else
        {
            $studentcourse=StudentCourses::all();
            $course_types = Coursetype::all();
            return view('students.home' ,compact('studentcourse','course_types'));
        }
        
    }
    public function myscholarship()
    {
        $profile=StudentProfile::where('user_id',Auth::user()->id)->first();
    	$scholarships=Scholarship::where('status','Active')->get();
    	return view('students.viewscholarships',compact('scholarships','profile'));
    }
    public function allscholarships()
    {
        $profile=StudentProfile::where('user_id',Auth::user()->id)->first();
        $scholarships=Scholarship::paginate(5);
        return view('students.allscholarships',compact('scholarships','profile'));
    }
    public function showdetails($id)
    {
    	$scholarships=Scholarship::find($id);
        $studentcourse=DB::table('course_scholarship')->where('scholarship_id',$id)->get();
    	return view('students.scholarshipdetails',compact('scholarships','studentcourse'));
    }
    public function checkDocuments(Request $request, $id)
    {
        //$scholarshipId = $id;
        //$userId = Auth::user()->id;
        //$scholarship=Scholarship::findOrFail($id);
        //$user = User::findOrFail($userId);
        $requiredDocuments = DB::table('document_scholarship')->where('scholarship_id',$id)->get();
        $studentprofile=StudentProfile::where('user_id',Auth::user()->id)->first();

        return $studentprofile;


    }
    public function apply(Request $request,$id)
    {
       $status='Application Status Submitted Successfully';
        $schemeid=Scholarship::find($id);
        $schemeid->users()->attach(Auth::user()->id,['user_name'=>Auth::user()->name,'status' => 'Application Submitted']);
        
        //return redirect()->back()->with('message','Successfully Applied to Scholarship');
        $scholarships=Scholarship::all();
        $StudStatus=StudStatus::where('user_id',auth()->user()->id)->get();

        $profile=StudentProfile::select('email','fullname')->where('user_id',auth()->user()->id)->first();
        
       
        $details=[
        'schemename'=>$schemeid->scheme_name,
        'fullname'=>$profile->fullname,
        
        
    ];
        Mail::to($profile->email)->send(new ScholarshipApplicationSubmitted($details));
       
        return view('students.appliedscholarship',compact('scholarships','StudStatus'))->with('message','Successfully Applied to Scholarship');
    }

    public function appliedscholarship()
    {
       // $scholarships=\DB::table('scholarship_user')->where('user_id',auth::user()->id)->get();
        //$scholarships=Scholarship::->users->where('id',auth()->user()->id)->get();
        //$scholarships=$scholarships->users->where('id',auth()->user()->id)->get();
        
        //$scholarships=Scholarship::has('users')->where('user_id',auth()->user()->id)->get();
        //$scholarships=Scholarship::where('user_id',auth()->user()->id)->get();
        //$scholarships=Scholarship::all();
        $scholarships=Scholarship::all();
        $StudStatus=StudStatus::where('user_id',auth()->user()->id)->get();
        $profile=StudentProfile::where('user_id',auth()->user()->id)->where('paid','YES')->first();
       // $scholarships=$scholarships->users()->where('id',auth()->user()->id)->get();
        //$scholarships=$scholarships->users->where('id',auth()->user()->id)->get();
        //$scholarships->users()->get();
        //$scholarships=$scholarships->users()->wherePivot('user_id',auth()->user()->id)->get();   
        
        return view('students.appliedscholarship',compact('scholarships','StudStatus','profile'));
    }
    

    
}
