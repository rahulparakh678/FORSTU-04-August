<?php

namespace App\Http\Controllers\SFCNGO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StudentProfile;
use App\StudStatus;
use DB;
use Gate;
use Symfony\Component\HttpFoundation\Response;
class HomeController extends Controller
{
    //
    public function index()
    {
        $profiles=StudentProfile::where('ref_code',auth()->user()->ref_code)->get();
        $profile__activate_count=StudentProfile::where('ref_code',auth()->user()->ref_code)->where('profile_completed','YES')->count();
        $kyc_count=StudentProfile::where('ref_code',auth()->user()->ref_code)->where('kyc_completed','YES')->count();
        $application_processed=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id','stud_statuses.scheme_name','users.name','stud_statuses.status','stud_statuses.created_at','stud_statuses.applicationpdf')->where('ref_code',auth()->user()->ref_code)->get();

        $awarded=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id')->where('stud_statuses.status','Awarded')->where('ref_code',auth()->user()->ref_code)->count();

        $funddisbursed=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id')->where('stud_statuses.status','Fund Disbursed')->where('ref_code',auth()->user()->ref_code)->count();

        $male=StudentProfile::where('ref_code',auth()->user()->ref_code)->where('gender','male')->get();
        $female=StudentProfile::where('ref_code',auth()->user()->ref_code)->where('gender','female')->get();
        //$students=StudStatus::where()
        return view('sfcngo.home',compact('profiles','profile__activate_count','kyc_count','application_processed','awarded','male','female','funddisbursed'));

    }
    public function sfc_student_list()
    {
    	abort_if(Gate::denies('sfc_profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $profiles=StudentProfile::where('ref_code',auth()->user()->ref_code)->get();
    	return view('sfcngo.studentlist',compact('profiles'));
    }

    public function sfcfilteredview()
    {
        
        abort_if(Gate::denies('sfc_profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       //$profiles = StudentProfile::all()->chunk(12);
        $profiles=StudentProfile::where('ref_code',auth()->user()->ref_code)->get()->chunk(12);
        return view('sfcngo.filteredview',compact('profiles'));
    }
    public function scholarship_applications()
    {
    	
        $results=StudentProfile::where('ref_code',auth()->user()->ref_code)->get();
    	return view('sfcngo.studentlist',compact('results'));
    }

    public function sfcapplications( )
    {
    	 	
    	 

            //$results=StudStatus::where('user_id',$user_id)->get();
    		//$results=DB::table('stud_statuses')->where('user_id',$Request->user_id)->get();
           
            //return redirect()->back()->with('message','User Found Successfully',compact('studstatus'));
    	    //$profiles=StudentProfile::where('ref_code',auth()->user()->ref_code)->get();
             $application_processed=DB::table('users')->join('stud_statuses','users.id','=','stud_statuses.user_id')->select('users.id','stud_statuses.user_id','stud_statuses.scheme_name','users.name','stud_statuses.status','stud_statuses.created_at','stud_statuses.applicationpdf')->where('ref_code',auth()->user()->ref_code)->get();
            return view('sfcngo.applications',compact('application_processed'));

       
    }

     public function searchstatus(Request $request)
    {
        $user_id=$request->input('user_id');
        if (StudStatus::where('user_id',$user_id)->exists()) {

            $studstatus=StudStatus::where('user_id',$user_id)->get();
           
            //return redirect()->back()->with('message','User Found Successfully',compact('studstatus'));
            //return view('admin.profiles.editstatus',compact('studstatus'));
            return view('sfcngo.scholarshiplist',compact('studstatus'));

        }
        else
        {
            
            return redirect()->back()->with('message','User Not  Found ',compact('user_id'));
        }
        
    }

     public function profileshow1(StudentProfile $profile,$id)
    {
       abort_if(Gate::denies('sfc_profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $profile=StudentProfile::where('user_id',$id)->first();
        return view('sfcngo.viewprofile', compact('profile'));
    }
}
