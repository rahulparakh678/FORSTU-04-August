<?php

namespace App\Http\Controllers\CollegeSociety;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CollegeSociety;
use App\College;
use App\User;
use Auth;
use App\StudentProfile;
use DB;
class Home extends Controller
{
    //
    public function index()
    {
        $college_details=College::where('collegetrust_name',Auth::user()->name)->get();
        //$ref_code=$college_detail->ref_code;
        $college=College::where('collegetrust_name',Auth::user()->name)->count();
        global $i,$x,$application_processed,$awarded,$funddisbursed;
        $i=0;
        $x=0;

        foreach($college_details as $college_detail)
        {
            $ref_code=$college_detail->ref_code;
            $x=StudentProfile::where('ref_code',$ref_code)->count();
            $i=$i+$x;
            $application_processed=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id','stud_statuses.scheme_name','users.name','stud_statuses.status','stud_statuses.created_at','stud_statuses.applicationpdf')->where('ref_code',$ref_code)->count();
            $awarded=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id')->where('stud_statuses.status','Awarded')->where('ref_code',$ref_code)->count();

            $funddisbursed=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id')->where('stud_statuses.status','Fund Disbursed')->where('ref_code',$ref_code)->count();



        }


        //$student_count=StudentProfile::where('ref_code',$ref_code)->count();
        return view('collegesociety.home',compact('college','college_details','i','application_processed','awarded','funddisbursed'));
    }

    public function home()
    {
        $college_society=CollegeSociety::all();

        
        return view('admin.society.index',compact('college_society'));
    }
    public function storecollegesociety(Request $request)
    {
        $college_society_create = CollegeSociety::create($request->all());
        User::create([
            'name'=>request('collegetrust_name'),
            'email'=>request('collegetrust_email'),
            'user_type'=>'college_society',
            'password'=>bcrypt('password'),
        ]);
        $college_society=CollegeSociety::all();
        return view('admin.society.index',compact('college_society'));
    }

    public function college()
    {
        $colleges=College::all();
        $college_society=CollegeSociety::all();
        return view('admin.society.colleges',compact('college_society','colleges'));
    }
    public function storecollege(Request $request)
    {
        $college_create = College::create($request->all());
        User::create([
            'name'=>request('college_name'),
            'email'=>request('college_email'),
            'user_type'=>'sfcngo',
            'ref_code'=>request('ref_code'),
            'password'=>bcrypt('password'),
        ]);
        
        $colleges=College::all();
        $college_society=CollegeSociety::all();
        return view('admin.society.colleges',compact('college_society','colleges'));


        
    }

    public function listcollege(Request $request)
    {
        $listcolleges=College::where('collegetrust_name',Auth::user()->name)->get();
        return view('collegesociety.collegelist',compact('listcolleges'));
    }

    public function college_detail(Request $request,$ref_code)
    {
        //$ref_code1=$request->ref_code;
        //$profiles=StudentProfile::where('ref_code',$ref_code)->get();
       $profiles=StudentProfile::where('ref_code',$ref_code)->get();
       $college=College::select('college_name')->where('ref_code',$ref_code)->first();
       //$paid_plan=StudentProfile::where('paid','YES' && 'ref_code',$ref_code )->get();
       //$freeplan_activated=StudentProfile::where('paid','NO' && 'ref_code',$ref_code)->get();

       $application_processed=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id','stud_statuses.scheme_name','users.name','stud_statuses.status','stud_statuses.created_at','stud_statuses.applicationpdf')->where('ref_code',$ref_code)->get();
        $awarded=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id')->where('stud_statuses.status','Awarded')->where('ref_code',$ref_code)->count();
        $funddisbursed=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id')->where('stud_statuses.status','Fund Disbursed')->where('ref_code',$ref_code)->count();

        return view('collegesociety.college_detail',compact('profiles','application_processed','awarded','funddisbursed','college'));
        //return $profiles;
        
    }

}
