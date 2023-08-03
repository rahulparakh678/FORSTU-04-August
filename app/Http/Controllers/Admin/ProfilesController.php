<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProfileRequest;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateStudentProfileRequest;
use App\Profile;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\StudentProfile;
use App\Caste;
use App\Course;
use App\Coursetype;
use App\StudStatus;
use App\Sfcpayments;
use Redirect;
use Storage;
use App\User;
use App\StudentCourses;
use DB;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmitted;
use App\Mail\SubscriptionPaid;
use App\Mail\KYCCompleted;
use App\Mail\ProfileRemarks;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Imports\StudentProfileImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportStudentProfiles;
use App\Exports\ExportUsers;
use Carbon\Carbon;
class ProfilesController extends Controller
{
  public function paidplanstudents()
    {
        abort_if(Gate::denies('profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$query = "SELECT id, fullname, email, mobile, ref_code FROM student_profiles WHERE paid = 'YES'";
        //$profiles = DB::query($query);
        $profiles = StudentProfile::select('id','fullname','email','mobile','ref_code')->where('paid','YES')->get();
        return view('admin.profiles.paidplanstudents',compact('profiles'));

    }












    public function hide($id)
    {
        $studentProfiles=StudentProfile::find($id);
        if (!$studentProfiles) {
            // code...
            return response()->json(['success'=>false],404);

        }
        $studentProfiles->is_hidden = true; // Assuming you have an "is_hidden" column to mark the row as hidden
        $studentProfiles->save();
        return response()->json(['success' => true]);
    }
    public function notifications()
    {
        //$profiles=StudentProfile::where('modi')
        $sevenDaysAgo = Carbon::now()->subDays(7);
        $studentProfiles = StudentProfile::whereDate('updated_at', '>=', $sevenDaysAgo)
    ->get();
        return view('admin.notifications.index',compact('studentProfiles'));
    }

    public function profilesexport(Request $request)
    {
        return Excel::download(new ExportStudentProfiles,'StudentProfiles.xlsx');
    }
    public function studentprofileimport(Request $request)
    {
        //return Excel::download(new ExportStudentProfiles,'StudentProfiles.xlsx');
        $request->validate([
        'file' => 'max:10000|mimes:xlsx,xls',
        ]);

        $data=Excel::import(new StudentProfileImport,$request->excel_file);
        //$data=Excel::import(new StudentProfileImport,$request->excel_file);


        return redirect()->back()->with('success', 'Profiles Imported Successfully');
    }
    
    public function usersexport(Request $request)
    {
        return Excel::download(new ExportUsers,'Users.xlsx');
    }
    public function uploadUsers(Request $request)
    {
        $request->validate([
        'file' => 'max:10000|mimes:xlsx,xls',
        ]);

        $data=Excel::import(new UsersImport,$request->excel_file);
        //$data=Excel::import(new StudentProfileImport,$request->excel_file);


        return redirect()->route('admin.profiles.index')->with('success', 'User Imported Successfully');
    }
    public function profileimport(Request $request)
    {
        return view('admin.profiles.profileimport');
    }
    public function sfcpayments(){

        $sfcpayments=Sfcpayments::all();

        

        return view('admin.sfcpayments.index',compact('sfcpayments'));

    }


    public function profileremarks(){

        $profiles = StudentProfile::all()->chunk(50);
        return view('admin.profiles.profileremarks',compact('profiles'));
    }

    public function deletesfcentry(Request $request,$id){
        $sfcpayments=Sfcpayments::where('id',$id)->first();
        $sfcpayments->delete();
        return redirect()->back()->with('message',' Entry Deleted Successfully');
    }
    
    public function index(Request $request)
    {
        abort_if(Gate::denies('profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        
            //$profiles = DB::table('student_profiles')->select('id','fullname','email','mobile','permanent_state','course_type_id','course_name_id','student_course_name_id','ref_code','paid')->orderBy('id','desc')->get()->chunk(12);

            $profiles = StudentProfile::select('id','fullname','email','mobile','ref_code')->get()->chunk(50);
            //return Excel::download(new UsersExport, 'users.xlsx');
            return view('admin.profiles.index', compact('profiles'));
        
        
    }

    public function filterview(Request $request)
    {
        abort_if(Gate::denies('profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         
        
            //$profiles = StudentProfile::all()->chunk(12);
            $profiles = StudentProfile::select('id','fullname','email','mobile','permanent_state','course_type_id','course_name_id','student_course_name_id','ref_code','paid','gender','religion','handicapped','single_parent','orphan','handicapped','annual_income','permanent_city','current_inst_name','current_year','father_occupation','permanent_add','caste_id','school_percentage','class_12_percentage','diploma_percentage','profile_completed','kyc_completed','profile_upto_date','active','vidyasaarthi_profile_status','created_at')->get()->chunk(50);
            //'fullname',
            return view('admin.profiles.filterview', compact('profiles'));
        


    }

    public function paid(Request $request,$id)
    {
        //$profile=StudentProfile::select('email','fullname','paid')->where('id',$id)->first();
        $profile=StudentProfile::where('id',$id)->first();
        $profile->paid='YES';
        $profile->save();

        //$profile=StudentProfile::select('email','fullname')->where('user_id',$request->user_id)->first();
        //
       //$profiles=StudentProfile::select('email','fullname')->where('id',$id)->first();
        $details=[
            'fullname'=>$profile->fullname,
        ];

        Mail::to($profile->email)->send(new SubscriptionPaid($details));

         return redirect()->back()->with('message',' Details Saved Successfully');


    }
    public function sfcpaid(Request $request,$id)
    {
        $profile=StudentProfile::where('user_id',$id)->first();
        $profile->paid='YES';
        $profile->save();
         return redirect()->back()->with('message',' Details Saved Successfully');


    }
    public function sfcshowprofile(Request $request,$id)
    {
        $profile=StudentProfile::where('user_id',$id)->first();
        //$profile->paid='YES';
        //$profile->save();
        $profile=StudentProfile::where('user_id',$id)->first();
        return view('admin.profiles.show', compact('profile'));
         
    }

    public function profile_completed(Request $request,$id)
    {
        $profile=StudentProfile::where('id',$id)->first();
        $profile->vidyasaarthi_profile_status='Updated';
        $profile->save();
        return redirect()->back()->with('message',' Details Saved Successfully');
    }

    public function kyc_completed(Request $request,$id)
    {
        $profile=StudentProfile::where('id',$id)->first();
        $profile->kyc_completed='YES';
        $profile->save();
        $details=[
            'fullname'=>$profile->fullname,
        ];

        Mail::to($profile->email)->send(new KYCCompleted($details));
        return redirect()->back()->with('message',' KYC Details Saved Successfully');
    }
    public function freeplan(Request $request)
    {
        if(StudentProfile::where('user_id',Auth::user()->id)->exists())
        {
            $profile=StudentProfile::where('user_id',Auth::user()->id)->first();
            $profile->paid='NO';
            $profile->freeplanactivation_date=New date();
            $profile->save();
              
        $details=[
            'fullname'=>$profile->fullname,
        ];

            Mail::to($profile->email)->send(new FreePlanActivation($details));
            return redirect()->back()->with('message',' Your Free Plan is now Activated. You are ready to avail benefits of Free Plans');
        }
        else{
            return redirect()->back()->with('message','Kindly Create Your Student Profile First to Activate the Free Plan');
        }
        
    }

     public function sfcstu(Request $request,$id)
    {
        $profile=StudentProfile::where('id',$id)->first();
        $profile->paid='SFC';
        $profile->save();
         return redirect()->back()->with('message',' Details Saved Successfully');


    }
    public function uptodate(Request $request,$id)
    {
        $profile=StudentProfile::where('id',$id)->first();
        $profile->profile_upto_date='Yes';
        $profile->save();
         return redirect()->back()->with('message',' Details Saved Successfully');


    }
    public function activeprofile(Request $request,$id)
    {
        $profile=StudentProfile::where('id',$id)->first();
        $profile->active='Yes';
        $profile->save();
         return redirect()->back()->with('message',' Details Saved Successfully');


    }
    public function inactiveprofile(Request $request,$id)
    {
        $profile=StudentProfile::where('id',$id)->first();
        $profile->active='No';
        $profile->save();
         return redirect()->back()->with('message',' Details Saved Successfully');


    }

    public function create()
    {
        abort_if(Gate::denies('profile_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //return view('admin.profiles.create');
        $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course_types = Coursetype::all()->pluck('course_type', 'id')->prepend(trans('Please select course type'), '');

        $course_names = Course::all()->pluck('course_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $course=StudentCourses::all()->pluck('course_name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('students.profile.create',compact('castes','course_types','course_names','course'));
    }

    public function store(StoreProfileRequest $request)
    {
       $studentDetail = StudentProfile::create($request->all());
        

        return view('admin.profiles.index')->with('message','Profile is completed successfully Now Upload documents in documents Section');
    }

    public function edit(StudentProfile $profile,$id)
    {
         //return view('admin.profiles.create');
       $profile=StudentProfile::where('user_id',$id)->first();
        $castes = Caste::all()->pluck('caste_name', 'id')->prepend(trans('global.pleaseSelect'), '');

       $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('Please select course type'), '');

        $course = Course::all()->pluck('course_name', 'id')->prepend(trans('global.pleaseSelect'), '');

         
        return view('admin.profiles.edit', compact('profile','castes','course_types','course'));
       
        
    }

    public function updatedetails(Request $request,$id)
    {
        
            //$personaldetails=StudentProfile::create($request->all());
            $personaldetails=StudentProfile::where('user_id',$id)->first();
            $personaldetails->update($request->all());
            return redirect()->back()->with('message',' Details Saved Successfully');
        
       
        
    }
    public function show(StudentProfile $profile)
    {
        abort_if(Gate::denies('profile_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $referral=User::where('id',$profile->user_id)->first();
        return view('admin.profiles.show', compact('profile','referral'));
    }

    public function destroy(StudentProfile $profile)
    {
        abort_if(Gate::denies('profile_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $profile->delete();

        return back();
    }

    public function massDestroy(MassDestroyProfileRequest $request)
    {
        Profile::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function scholarshipstatus()
    {
        return view('admin.profiles.studstatus');
    }

    public function smsstatus()
    {
        return view('admin.profiles.smsstatus');
    }

    public function storestatus(Request $request)
    {
        //$status=StudStatus::create($request->all());
        
        //return Redirect::to('admin.profiles.index')->with('message','Student Scholarship  Status Updated Successfully');
        $studstatus=new StudStatus;
        $studstatus->user_id=$request->user_id;
        $studstatus->scheme_name=$request->scheme_name;
        $studstatus->status=$request->status;
         if($request->hasFile('applicationpdf'))
        {
            $status=$request->file('applicationpdf')->store('status','s3');
            Storage::disk('s3')->setVisibility($status,'public');
            $url=Storage::disk('s3')->url($status);
            $studstatus->applicationpdf=$url;


        }
        $studstatus->save();
        
        
        //return redirect()->route('admin.profiles.index')->with('message','Student Scholarship  Status Added Successfully');
        

        $profile=StudentProfile::select('email','fullname')->where('user_id',$request->user_id)->first();
        $schemename=$studstatus->scheme_name;
       
        $details=[
        'schemename'=>$schemename,
        'fullname'=>$profile->fullname,
        
        
    ];
        Mail::to($profile->email)->send(new ApplicationSubmitted($details));
        return redirect()->back()->with('message','Student Scholarship  Status Added Successfully');
    }
    public function storeremarks(Request $request,$id)
    {
        //$status=StudStatus::create($request->all());
        
        //return Redirect::to('admin.profiles.index')->with('message','Student Scholarship  
        $profile=StudentProfile::where('id',$id)->first();
        $profile->profile_remarks=$request->profile_remarks;
        $profile->save();

        $details=[
        'profile_remarks'=>$profile->profile_remarks,
        'fullname'=>$profile->fullname,
        
        
    ];  
        Mail::to($profile->email)->send(new ProfileRemarks($details));
        return redirect()->back()->with('message',' Details Saved Successfully');
        
    }
    public function storesmsstatus(Request $request)
    {
        //$status=StudStatus::create($request->all());
        
        //return Redirect::to('admin.profiles.index')->with('message','Student Scholarship  Status Updated Successfully');
        //$studstatus=new StudStatus;
        //$studstatus->user_id=$request->user_id;
        //$studstatus->scheme_name=$request->scheme_name;
        //$studstatus->status=$request->status;
         

        //$studstatus->save();
        $id=DB::table('scholarship_user')->insertGetId([
            'scholarship_id'=> $request->scholarship_id,
            'user_id'=> $request->user_id,
            'user_name'=> $request->user_name,
            'status'=> $request->status,
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
        
        return redirect()->route('admin.profiles.index')->with('message','Student Scholarship  Status Added Successfully');
    }


    public function updatestatus(Request $request,$id)
    {
        $scholarships=StudStatus::where('id',$id)->first();
        
        //$scholarships->update($request->all());

        $scholarships->user_id=$request->user_id;
        $scholarships->scheme_name=$request->scheme_name;
        $scholarships->status=$request->status;
         if($request->hasFile('applicationpdf'))
        {
            $status=$request->file('applicationpdf')->store('status','s3');
            Storage::disk('s3')->setVisibility($status,'public');
            $url=Storage::disk('s3')->url($status);
            $scholarships->applicationpdf=$url;


        }
        $scholarships->save();
        
        //return Redirect::to('admin.profiles.index')->with('message','Student Scholarship  Status Updated Successfully');
        //return redirect()->route('admin.profiles.index')->with('message','Student Scholarship  Status Updated Successfully');
        return redirect()->back()->with('message','Student Scholarship  Status Updated Successfully');
    }
    public function editscholarshipstatus()
    {
       
       $profiles=StudentProfile::all();
        
        return view('admin.profiles.editstudstaus',compact('profiles'));
    }

    public function updatescholarshipstatus(Request $request, $id)
    {

        $scholarships=StudStatus::where('id',$id)->first();
        return view('admin.profiles.updatestatus',compact('scholarships'));
    }
    public function deletescholarshipstatus(Request $request, $id)
    {

        $scholarships=StudStatus::where('id',$id)->first();
        $scholarships->delete();
        //return view('admin.profiles.updatestatus',compact('scholarships'));
        return redirect()->back()->with('message','Scholarship Status Deleted Successfully');
       
    }

    public function searchstatus(Request $request)
    {
        $user_id=$request->input('user_id');
        if (StudStatus::where('user_id',$user_id)->exists()) {

            $studstatus=StudStatus::where('user_id',$user_id)->get();
           
            //return redirect()->back()->with('message','User Found Successfully',compact('studstatus'));
            return view('admin.profiles.editstatus',compact('studstatus'));

        }
        else
        {
            
            return redirect()->back()->with('message','User Not  Found ',compact('user_id'));
        }
        
    }

    public function allstatus()
    {   
        $statuses=StudStatus::all();
        return view('admin.profiles.allstatus',compact('statuses'));
    }
    public function export(Request $request)
    {
       $fileName = 'student_profiles.csv';
       $tasks = StudentProfile::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('id', 'user_id','email','fullname','paid','kyc_completed','profile_completed','dob','gender','religion','mobile','handicapped','single_parent','orphan','aadharnumber','father_name','father_edu','father_occupation','mother_name','mother_edu','mothers_occupation','parents_mobile','annual_income','current_add','current_state','current_city','pincode','permanent_add','permanent_city','permanent_pincode','permanent_state','account_number','bank_ifsc','current_inst_name','current_year','tution_fees','non_tution_fees','previous_marks_obtained','previous_marks_total','previous_percentage','class_10_school_name','class_10_state','school_passing','school_marks_obtained','school_marks_total','school_percentage','class_12_clg_name','class_12_state','class_12_passing_yeat','class_12_marks_obtained','class_12_out_of_total_marks','class_12_percentage','diploma_clg_name','diploma_state','diploma_passing_year','diploma_total_marks_obtained','diploma_out_of_total_marks','diploma_percentage','grad_clg_name','grad_state','grad_passing_year','grad_total_marks','grad_out_of_total_marks','grad_percentage','caste_id','course_type_id','course_name_id','student_course_name_id','ref_code','created_at','updated_at','profile_remarks','profile_upto_date','active','vidyasaarthi_profile_status');

        $callback = function() use($tasks, $columns) {
            $file = fopen('php://output', 'w+');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['id'] = $task->id;
                $row['user_id']= $task->user_id;
                $row['email']= $task->email;
                $row['fullname']= $task->fullname;
                $row['paid']= $task->paid;
                $row['kyc_completed']= $task->kyc_completed;
                $row['profile_completed']= $task->profile_completed;
                $row['dob']= $task->dob;
                $row['gender']= $task->gender;
                $row['religion']= $task->religion;
                $row['mobile']= $task->mobile;
                $row['handicapped']= $task->handicapped;
                $row['single_parent']= $task->single_parent;
                $row['orphan']= $task->orphan;
                $row['aadharnumber']= $task->aadharnumber;
                $row['father_name']= $task->father_name;
                $row['father_edu']= $task->father_edu;
                $row['father_occupation']= $task->father_occupation;
                $row['mother_name']= $task->mother_name;
                $row['mother_edu']= $task->mother_edu;
                $row['mothers_occupation']= $task->mothers_occupation;
                $row['parents_mobile']= $task->parents_mobile;
                $row['annual_income']= $task->annual_income;
                $row['current_add']= $task->current_add;
                $row['current_state']= $task->current_state;
                $row['current_city']= $task->current_city;
                $row['pincode']= $task->pincode;
                $row['permanent_add']= $task->permanent_add;
                $row['permanent_city']= $task->permanent_city;
                $row['permanent_pincode']= $task->permanent_pincode;
                $row['permanent_state']= $task->permanent_state;
                $row['account_number']= $task->account_number;
                $row['bank_ifsc']= $task->bank_ifsc;
                $row['current_inst_name']= $task->current_inst_name;
                $row['current_year']= $task->current_year;
                $row['tution_fees']= $task->tution_fees;
                $row['non_tution_fees']= $task->non_tution_fees;
                $row['previous_marks_obtained']= $task->previous_marks_obtained;
                $row['previous_marks_total']= $task->previous_marks_total;
                $row['previous_percentage']= $task->previous_percentage;
                $row['class_10_school_name']= $task->class_10_school_name;
                $row['class_10_state']= $task->class_10_state;
                $row['school_passing']= $task->school_passing;
                $row['school_marks_obtained']= $task->school_marks_obtained;
                $row['school_marks_total']= $task->school_marks_total;
                $row['school_percentage']= $task->school_percentage;
                $row['class_12_clg_name']= $task->class_12_clg_name;
                $row['class_12_state']= $task->class_12_state;
                $row['class_12_passing_yeat']= $task->class_12_passing_yeat;
                $row['class_12_marks_obtained']= $task->class_12_marks_obtained;
                $row['class_12_out_of_total_marks']= $task->class_12_out_of_total_marks;
                $row['class_12_percentage']= $task->class_12_percentage;
                $row['diploma_clg_name']= $task->diploma_clg_name;
                $row['diploma_state']= $task->diploma_state;
                $row['diploma_passing_year']= $task->diploma_passing_year;
                $row['diploma_total_marks_obtained']= $task->diploma_total_marks_obtained;
                $row['diploma_out_of_total_marks']= $task->diploma_out_of_total_marks;
                $row['diploma_percentage']= $task->diploma_percentage;
                $row['grad_clg_name']= $task->grad_clg_name;
                $row['grad_state']= $task->grad_state;
                $row['grad_passing_year']= $task->grad_passing_year;
                $row['grad_total_marks']= $task->grad_total_marks;
                $row['grad_out_of_total_marks']= $task->grad_out_of_total_marks;
                $row['grad_percentage']= $task->grad_percentage;
                $row['caste_id']= $task->caste_id;
                $row['course_type_id']= $task->course_type_id;
                $row['course_name_id']= $task->course_name_id;
                $row['student_course_name_id']= $task->student_course_name_id;
                $row['ref_code']= $task->ref_code;
                $row['profile_remarks']= $task->profile_remarks;
                $row['active']= $task->active;
                $row['vidyasaarthi_profile_status']= $task->vidyasaarthi_profile_status;
                
                fputcsv($file, array($row['id'], $row['user_id'],$row['email'],$row['fullname'],$row['paid'],$row['kyc_completed'],$row['profile_completed'],$row['dob'],$row['gender'],$row['religion'], $row['mobile'],$row['handicapped'],
                $row['single_parent'],
                $row['orphan'],
                $row['aadharnumber'],
                $row['father_name'],
                $row['father_edu'],
                $row['father_occupation'],
                $row['mother_name'],
                $row['mother_edu'],
                $row['mothers_occupation'],
                $row['parents_mobile'],
                $row['annual_income'],
                $row['current_add'],
                $row['current_state'],
                $row['current_city'],
                $row['pincode'],
                $row['permanent_add'],
                $row['permanent_city'],
                $row['permanent_pincode'],
                $row['permanent_state'],
                $row['account_number'],
                $row['bank_ifsc'],
                $row['current_inst_name'],
                $row['current_year'],
                $row['tution_fees'],
                $row['non_tution_fees'],
                $row['previous_marks_obtained'],
                $row['previous_marks_total'],
                $row['previous_percentage'],
                $row['class_10_school_name'],
                $row['class_10_state'],
                $row['school_passing'],
                $row['school_marks_obtained'],
                $row['school_marks_total'],
                $row['school_percentage'],
                $row['class_12_clg_name'],
                $row['class_12_state'],
                $row['class_12_passing_yeat'],
                $row['class_12_marks_obtained'],
                $row['class_12_out_of_total_marks'],
                $row['class_12_percentage'],
                $row['diploma_clg_name'],
                $row['diploma_state'],
                $row['diploma_passing_year'],
                $row['diploma_total_marks_obtained'],
                $row['diploma_out_of_total_marks'],
                $row['diploma_percentage'],
                $row['grad_clg_name'],
                $row['grad_state'],
                $row['grad_passing_year'],
                $row['grad_total_marks'],
                $row['grad_out_of_total_marks'],
                $row['grad_percentage'],
                $row['caste_id'],
                $row['course_type_id'],
                $row['course_name_id'],
                $row['student_course_name_id'],
                $row['ref_code'],
                $row['created_at'],
                $row['updated_at'],
                $row['profile_remarks'],
                $row['vidyasaarthi_profile_status'],
                $row['active']));
                
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }



    
}
