<?php

namespace App\Http\Controllers\ScholarshipProvider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ScholarshipShortlisted;
use App\Scholarship;
use App\StudentProfile;
use App\Mail\ScholarshipSelection;
use App\Mail\Funddisbursed;
class HomeController extends Controller
{
    //
    public function index()
    {
        return view('scholarshipprovider.home');
    }

    

    public function Shortlised(Request $request, $id)
    {
    	
    	//$scholarships=DB::table('scholarship_user')->where('id','23')->update(['status'=>'Shortlised']);
    	$scholarships=DB::table('scholarship_user')->where('id',$id)->update(['status'=>'Shortlised']);
        $scholarship=DB::table('scholarship_user')->where('id',$id)->first();
        $scholar=Scholarship::findOrFail($scholarship->scholarship_id);
        $profile=StudentProfile::select('email','fullname')->where('user_id',$scholarship->user_id)->first();
        
       
        $details=[
        'schemename'=>$scholar->scheme_name,
        'fullname'=>$profile->fullname,
        
        
    ];
        Mail::to($profile->email)->send(new ScholarshipShortlisted($details));

    	return redirect()->back()->with('message','Scholarship Status Successfully Updated');
    }

     public function Rejected(Request $request, $id)
    {
    	
    	//$scholarships=DB::table('scholarship_user')->where('id','23')->update(['status'=>'Shortlised']);
    	$scholarships=DB::table('scholarship_user')->where('id',$id)->update(['status'=>'Rejected']);

    	return redirect()->back()->with('message','Scholarship Status Successfully Updated');
    }

     public function Awarded(Request $request, $id)
    {
    	
    	//$scholarships=DB::table('scholarship_user')->where('id','23')->update(['status'=>'Shortlised']);
    	$scholarships=DB::table('scholarship_user')->where('id',$id)->update(['status'=>'Awarded']);
        $scholarship=DB::table('scholarship_user')->where('id',$id)->first();
        $scholar=Scholarship::findOrFail($scholarship->scholarship_id);
        $profile=StudentProfile::select('email','fullname')->where('user_id',$scholarship->user_id)->first();
        
       
        $details=[
        'schemename'=>$scholar->scheme_name,
        'fullname'=>$profile->fullname,
        
        
        ];
        Mail::to($profile->email)->send(new ScholarshipSelection($details));
    	return redirect()->back()->with('message','Scholarship Status Successfully Updated');
    }

    public function funddisbursed(Request $request, $id)
    {
        $scholarships=DB::table('scholarship_user')->where('id',$id)->update(['status'=>'Fund Disbursed']);
        $scholarship=DB::table('scholarship_user')->where('id',$id)->first();
        $scholar=Scholarship::findOrFail($scholarship->scholarship_id);
        $profile=StudentProfile::select('email','fullname')->where('user_id',$scholarship->user_id)->first();
        
       
        $details=[
        'schemename'=>$scholar->scheme_name,
        'fullname'=>$profile->fullname,
        
        
        ];
        Mail::to($profile->email)->send(new Funddisbursed($details));
        return redirect()->back()->with('message','Scholarship Status Successfully Updated');
    }
    
    
}
