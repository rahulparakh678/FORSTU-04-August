<?php

namespace App\Http\Controllers\ScholarshipProvider;

use App\Category;
use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySetupscholarshipRequest;
use App\Http\Requests\StoreSetupscholarshipRequest;
use App\Http\Requests\UpdateSetupscholarshipRequest;
use App\ScholarshipProvider;
use App\Setupscholarship;
use App\Scholarship;
use App\StudentProfile;
use DB;
use App\StudentCourses;
use App\Documents;
class SetupscholarshipController extends Controller
{
    //

    public function index()
    {
    	$setupscholarships = Scholarship::where('user_id',auth()->user()->id)->get();

        return view('scholarshipprovider.setupscholarships.index', compact('setupscholarships'));
    }

    public function listscheme()
    {
        $listschemes = Scholarship::where('user_id',auth()->user()->id)->get();
        return view('scholarshipprovider.applications.listschemes',compact('listschemes'));
    }

    public function create()
    {
    	$company_names = ScholarshipProvider::all()->pluck('organization_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('category_name', 'id')->prepend(trans('global.pleaseSelect'), '');

       
         $courses = StudentCourses::all()->pluck('course_name', 'id');
         $documents = Documents::all()->pluck('document_name', 'id');

        return view('scholarshipprovider.setupscholarships.create', compact('company_names', 'categories', 'courses','documents'));
    }
    public function store(StoreSetupscholarshipRequest $request)
    {
        $setupscholarship = Scholarship::create($request->all());
        $setupscholarship->courses()->sync($request->input('courses', []));
        $setupscholarship->documents()->sync($request->input('documents', []));
        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $setupscholarship->id]);
        }

        return redirect()->route('setup');
    }

    public function edit(Setupscholarship $setupscholarship,$id)
    {
        
    	$setupscholarship=Scholarship::find($id);
        $company_names = ScholarshipProvider::all()->pluck('organization_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('category_name', 'id')->prepend(trans('global.pleaseSelect'), '');

       
         $courses = StudentCourses::all()->pluck('course_name', 'id');

        $setupscholarship->load('company_name', 'category', 'courses');

        return view('scholarshipprovider.setupscholarships.edit', compact('company_names', 'categories', 'courses', 'setupscholarship'));
    }

    public function update(UpdateSetupscholarshipRequest $request, Setupscholarship $setupscholarship,$id)

    {
    	$setupscholarship=Scholarship::find($id);
        $setupscholarship->update($request->all());
        $setupscholarship->courses()->sync($request->input('courses', []));

        return redirect()->route('setup');
    }

    public function show(Setupscholarship $scholarships,$id)
    {
        
    	$scholarships=Scholarship::find($id);
        $studentcourse=DB::table('course_scholarship')->where('scholarship_id',$id)->get();
        $scholarships->load('company_name', 'category', 'courses');

        return view('scholarshipprovider.setupscholarships.show', compact('scholarships','studentcourse'));
    }

    public function destroy(Setupscholarship $setupscholarship,$id)
    {
        
    	$setupscholarship=Scholarship::find($id);
        $setupscholarship->delete();

        return back();
    }

    public function massDestroy(MassDestroySetupscholarshipRequest $request)
    {
        Setupscholarship::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        

        $model         = new Setupscholarship();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function showprofile(StudentProfile $profile,$id,$scholarship_id)
    {
        $profile=StudentProfile::where('user_id',$id)->first();
        $s_id=$scholarship_id;
        //$scheme_id=$ss_id;
        //$results=DB::table('scholarship_user')->where('id',$scholarship_id)->first();
        $results=DB::table('scholarship_user')->where('id',$s_id)->first();
        $doc_results=DB::table('document_scholarship')->where('scholarship_id',$results->scholarship_id)->join('documents', 'document_scholarship.documents_id', '=', 'documents.id')->get();
        //$profile= \DB::table('student_profiles')->where('user_id',$id)->first();
        return view('scholarshipprovider.applications.showprofile',compact('profile','s_id','results','doc_results'));
        //$profile=StudentProfile::where('user_id',$id)->first();
        //$profile= \DB::table('student_profiles')->where('user_id',$id)->first();
        //return view('scholarshipprovider.applications.showprofile',compact('profile'));
    }

       public function showapplications(Setupscholarship $scholarships,$id)
    {
       global $male,$female,$handicapped,$single_parent ;
        $male=0;$female=0;
        $handicapped=0;
        $single_parent=0;

       $scholarship=Scholarship::find($id);
       $results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
       $awarded=DB::table('scholarship_user')->where('scholarship_id',$id)->where('status','Awarded')
       ->get();
       $shortlist=DB::table('scholarship_user')->where('scholarship_id',$id)->where('status','Shortlised')
       ->get();

       foreach ($results as $result) {
            # code...
            
            if(StudentProfile::where('user_id',$result->user_id)->where('gender','male')->exists())
            {
                  $profiles=StudentProfile::where('user_id',$result->user_id)->where('gender','male')->first();
             
                   $male=$male+1;
            }
            elseif (StudentProfile::where('user_id',$result->user_id)->where('gender','female')->exists()) {
                # code...
                 $female=$female+1;
            }

            if(StudentProfile::where('user_id',$result->user_id)->where('handicapped','yes')->exists())
            {
                $profiles=StudentProfile::where('user_id',$result->user_id)->where('handicapped','yes')->first();
                $handicapped=$handicapped+1;
            }

            if (StudentProfile::where('user_id',$result->user_id)->where('single_parent','Yes')->exists()) {
                # code...
                $single_parent=$single_parent+1;
            }
          
        }


       return view('scholarshipprovider.applications.applicants',compact('results','scholarship','awarded','shortlist','male','female','handicapped','single_parent')); 
    }

    public function filteredview(Setupscholarship $scholarships,$id)
    {
       
        //$scholarship=Scholarship::select('id')->where('id',$id)->first();
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get()->chunk(50);
        $abc=DB::table('scholarship_user')->where('scholarship_id',$id)->pluck('user_id');
        $profiles=StudentProfile::whereIn('user_id',$abc)->select('id','fullname','gender','religion','handicapped','single_parent','current_state','permanent_state','course_type_id','course_name_id','current_year','user_id')->get();
        
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
       
        return view('scholarshipprovider.applications.filteredview',compact('s_id','profiles')); 
    }
    public function analyticsview(Setupscholarship $scholarships,$id)
    {
        global $fprofiles,$mprofiles,$other,$handicapped,$sp,$orphan,$bw50,$bw501,$bw5,$bw15,$bw3,$ab90,$ab80,$ab70,$ab60,$ab50,$ssc90,$ssc80,$scc70,$ssc60,$ssc50,$maharashtra,$aani,$andhp,$arup,$assam,$Bihar,$Chandigarh,$Chhattisgarh,$daman,$Delhi,$Goa,$Gujarat,$Haryana,$HimachalPradesh,$JK,$Jharkhand,$Karnataka,$Kerala,$Ladakh,$Lakshadweep,$MadhyaPradesh,$Manipur,$Meghalaya,$Mizoram,$Nagaland,$Odisha,$Puducherry,$Punjab,$Sikkim,$TamilNadu,$Telangana,$Tripura,$UttarPradesh,$Uttarakhand,$WestBengal,$Rajasthan,$course_scholarships,$coursedetails,$ab;
        $ab="";
        $coursedetails='';
        $course_scholarships="";
        $WestBengal=0;
        $Uttarakhand=0;
        $UttarPradesh=0;
        $Tripura=0;
        $Telangana=0;
        $TamilNadu=0;
        $Sikkim=0;
        $Rajasthan=0;
        $Puducherry=0;
        $Odisha=0;
        $Nagaland=0;
        $Mizoram=0;
        $Meghalaya=0;
        $Manipur=0;
        $MadhyaPradesh=0;
        $Lakshadweep=0;
        $Ladakh=0;
        $Kerala=0;
        $Karnataka=0;
        $Jharkhand=0;
        $JK=0;
        $HimachalPradesh=0;
        $Haryana=0;
        $Gujarat=0;
        $Goa=0;
        $Delhi=0;
        $daman=0;
        $Chhattisgarh=0;
        $Chandigarh=0;
        $Bihar=0;
        $assam=0;
        $arup=0;
        $andhp=0;
        $maharashtra=0;
        $aani=0;
        $fprofiles=0;
        $mprofiles=0;
        $other=0;
        $sp=0;
        $orphan=0;
        $handicapped=0;
        $bw50=0;
        $bw501=0;
        $bw5=0;
        $bw15=0;
        $bw3=0;
        $ab60=0;
        $ab90=0;
        $ab80=0;
        $ab70=0;
        $ab50=0;
        $ssc90=0;
        $ssc80=0;
        $ssc70=0;
        $ssc60=0;
        $ssc50=0;

        //$scholarship=Scholarship::find($id);
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $results=DB::table('scholarship_user')->where('scholarship_id',$id)->get()->chunk(50);
        $course=DB::table('course_scholarship')->where('scholarship_id',$id)->get();
        $course_scholarships=$course->unique();

        $count;
       
        foreach($results as $chunk)
        {
        foreach ($chunk as $key=>$result)
        {
            if(DB::table('student_profiles')->where('user_id',$result->user_id)->where('gender','male')->exists())
            {
                $mprofiles=$mprofiles+1;
            }

            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('gender','female')->exists()) {
                # code...
                $fprofiles=$fprofiles+1;
            }
            else
            {
                $other=$other+1;
            }
            
            if(DB::table('student_profiles')->where('user_id',$result->user_id)->where('handicapped','yes')->exists())
            {
                $handicapped=$handicapped+1;
            }
            elseif(DB::table('student_profiles')->where('user_id',$result->user_id)->where('single_parent','yes')->exists())
            {
                $sp=$sp+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('orphan','yes')->exists()) {
                # code...
                 $orphan=$orphan+1;
            }
            else
            {
            
            }

            if(DB::table('student_profiles')->where('user_id',$result->user_id)->where('annual_income','<=','50000')->exists())
            {
                $bw50=$bw50+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('annual_income',[50000,100000])->exists()) {
                # code...
                $bw501=$bw501+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('annual_income',[100000,300000])->exists()) {
                # code...
                $bw15=$bw15+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('annual_income',[300000,500000])->exists()) {
                # code...
                $bw3=$bw3+1;
            }
            else
            {
                $bw5=$bw5+1;
            }

            if (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('previous_percentage',[91,100])->exists()) {
                # code...
                $ab90=$ab90+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('previous_percentage',[81,90])->exists()) {
                # code...
                $ab80=$ab80+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('previous_percentage',[71,80])->exists()) {
                # code...
                $ab70=$ab70+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('previous_percentage',[61,70])->exists()) {
                # code...
                $ab60=$ab60+1;
            }
            else if (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('previous_percentage',[0,60])->exists()) {
                # code...
                $ab50=$ab50+1;
            }
            else{
                
            }

            if (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('school_percentage',[91,100])->exists()) {
                # code...
                $ssc90=$ssc90+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('school_percentage',[81,90])->exists()) {
                # code...
                $ssc80=$ssc80+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('school_percentage',[71,80])->exists()) {
                # code...
                $ssc70=$ssc70+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('school_percentage',[61,70])->exists()) {
                # code...
                $ssc60=$ssc60+1;
            }
            else if (DB::table('student_profiles')->where('user_id',$result->user_id)->whereBetween('school_percentage',[0,60])->exists()) {
                # code...
                $ssc50=$ssc50+1;
            }
            else{
                
            }

           // if(DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Maharashtra')->exists());
            //{
                //$maharashtra=$maharashtra+1;
            //}
            if (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Maharashtra')->exists()) {

                # code...
                $maharashtra=$maharashtra+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Andaman and Nicobar Islands')->exists()) {
                # code...

                $aani=$aani+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Andhra Pradesh')->exists()) {
                # code...

                $andhp=$andhp+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Arunachal Pradesh')->exists()) {
                # code...

                $arup=$arup+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Assam')->exists()) {
                # code...

                $assam=$assam+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Bihar')->exists()) {
                # code...

                $Bihar=$Bihar+1;
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Chandigarh')->exists()) {
                # code...

                $Chandigarh=$Chandigarh+1;

            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Chhattisgarh')->exists()) {
                # code...

                $Chhattisgarh=$Chhattisgarh+1;

            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Dadra and Nagar Haveli and Daman and Diu')->exists()) {
                # code...

                $daman=$daman+1;

            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Delhi')->exists()) {
                # code...

                $Delhi=$Delhi+1;

            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Goa')->exists()) {
                # code...

                $Goa=$Goa+1;

            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Gujarat')->exists()) {
                # code...

                $Gujarat=$Gujarat+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Haryana')->exists()) {
                # code...

                $Haryana=$Haryana+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Himachal Pradesh')->exists()) {
                # code...

                $HimachalPradesh=$HimachalPradesh+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Jammu and Kashmir')->exists()) {
                # code...

                $JK=$JK+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Jharkhand')->exists()) {
                # code...

                $Jharkhand=$Jharkhand+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Karnataka')->exists()) {
                # code...

                $Karnataka=$Karnataka+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Kerala')->exists()) {
                # code...

                $Kerala=$Kerala+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Ladakh')->exists()) {
                # code...

                $Ladakh=$Ladakh+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Lakshadweep')->exists()) {
                # code...

                $Lakshadweep=$Lakshadweep+1;
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Madhya Pradesh')->exists()) {
                # code...

                $MadhyaPradesh=$MadhyaPradesh+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Manipur')->exists()) {
                # code...

                $Manipur=$Manipur+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Meghalaya')->exists()) {
                # code...

                $Meghalaya=$Meghalaya+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Mizoram')->exists()) {
                # code...

                $Mizoram=$Mizoram+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Nagaland')->exists()) {
                # code...

                $Nagaland=$Nagaland+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Odisha')->exists()) {
                # code...

                $Odisha=$Odisha+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Puducherry')->exists()) {
                # code...

                $Puducherry=$Puducherry+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Punjab')->exists()) {
                # code...

                $Punjab=$Punjab+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Rajasthan')->exists()) {
                # code...

                $Rajasthan=$Rajasthan+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Sikkim')->exists()) {
                # code...

                $Sikkim=$Sikkim+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Tamil Nadu')->exists()) {
                # code...

                $TamilNadu=$TamilNadu+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Telangana')->exists()) {
                # code...

                $Telangana=$Telangana+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Tripura')->exists()) {
                # code...

                $Tripura=$Tripura+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Uttar Pradesh')->exists()) {
                # code...

                $UttarPradesh=$UttarPradesh+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','Uttarakhand')->exists()) {
                # code...

                $Uttarakhand=$Uttarakhand+1;
                
                
            }
            elseif (DB::table('student_profiles')->where('user_id',$result->user_id)->where('permanent_state','West Bengal')->exists()) {
                # code...

                $WestBengal=$WestBengal+1;
                
                
            }
            else
            {

            }
            
            
            
            
            
            

            
            
            
            
            
            

            
        
            
            
            

           }
            
        }
        
        
       
        return view('scholarshipprovider.applications.analyticsview',compact('results','s_id','mprofiles','fprofiles','other','handicapped','sp','orphan','bw50','bw501','bw5','bw15','bw3','ab90','ab80','ab70','ab60','ab50','ssc90','ssc80','ssc70','ssc60','ssc50','maharashtra','aani','andhp','arup','assam','Bihar','Chandigarh','Chhattisgarh','daman','Delhi','Goa','Gujarat','Haryana','HimachalPradesh','JK','Jharkhand','Karnataka','Kerala','Ladakh','Lakshadweep','MadhyaPradesh','Manipur','Meghalaya','Mizoram','Nagaland','Odisha','Puducherry','Punjab','Sikkim','TamilNadu','Telangana','Tripura','UttarPradesh','Uttarakhand','WestBengal','Rajasthan','course_scholarships')); 
    }

    public function f1view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        

        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //$abc=DB::table('student_profiles')->where('user_id',$result->user_id)->where('gender','male')->pluck('id');
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('gender','male')->select('id','fullname','gender','user_id')->get();
        return view('scholarshipprovider.applications.f1view',compact('s_id','profiles','abc'));
    }

     public function f2view(Setupscholarship $scholarships,$id)
    {
        //$scholarships=Scholarship::find($id);

        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('gender','female')->select('id','fullname','gender','user_id')->get();
        return view('scholarshipprovider.applications.f2view',compact('s_id','profiles','abc'));
        
    }
    public function f3view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f3view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('gender','other')->select('id','fullname','gender','user_id')->get();
        return view('scholarshipprovider.applications.f3view',compact('s_id','profiles','abc'));
    }
    public function f4view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f4view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('single_parent','yes')->select('id','fullname','single_parent','user_id')->get();
        return view('scholarshipprovider.applications.f4view',compact('s_id','profiles','abc'));
    }
    public function f5view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f5view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('handicapped','yes')->select('id','fullname','handicapped','user_id')->get();
        return view('scholarshipprovider.applications.f5view',compact('s_id','profiles','abc'));
    }
    public function f6view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f6view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('orphan','yes')->select('id','fullname','orphan','user_id')->get();
        return view('scholarshipprovider.applications.f6view',compact('s_id','profiles','abc'));
    }

    public function f7view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f7view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('annual_income','<=','50000')->select('id','fullname','annual_income','user_id')->get();
        return view('scholarshipprovider.applications.f7view',compact('s_id','profiles','abc'));
    }
    public function f8view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f8view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('annual_income',[50000,100000])->select('id','fullname','annual_income','user_id')->get();
        return view('scholarshipprovider.applications.f8view',compact('s_id','profiles','abc'));
    }
    public function f9view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f9view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('annual_income',[100000,300000])->select('id','fullname','annual_income','user_id')->get();
        return view('scholarshipprovider.applications.f9view',compact('s_id','profiles','abc'));
    }
    public function f10view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f10view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('annual_income',[300000,500000])->select('id','fullname','annual_income','user_id')->get();
        return view('scholarshipprovider.applications.f10view',compact('s_id','profiles','abc'));
    }
    public function f11view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f11view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('annual_income',[500000,800000])->select('id','fullname','annual_income','user_id')->get();
        return view('scholarshipprovider.applications.f11view',compact('s_id','profiles','abc'));
    }
    public function f12view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f12view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('previous_percentage',[91,100])->select('id','fullname','previous_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f12view',compact('s_id','profiles','abc'));
    }
     public function f13view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f13view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('previous_percentage',[81,90])->select('id','fullname','previous_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f13view',compact('s_id','profiles','abc'));
    }
     public function f14view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f14view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('previous_percentage',[71,80])->select('id','fullname','previous_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f14view',compact('s_id','profiles','abc'));

    }
     public function f15view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f15view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('previous_percentage',[61,70])->select('id','fullname','previous_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f15view',compact('s_id','profiles','abc'));
    }
    public function f16view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f16view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->where('previous_percentage','<=','60')->select('id','fullname','previous_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f16view',compact('s_id','profiles','abc'));
    }
    public function f17view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f17view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('school_percentage',[91,100])->select('id','fullname','school_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f17view',compact('s_id','profiles','abc'));
    }
    public function f18view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f18view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('school_percentage',[81,90])->select('id','fullname','school_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f18view',compact('s_id','profiles','abc'));
    }
    public function f19view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f19view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('school_percentage',[71,80])->select('id','fullname','school_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f19view',compact('s_id','profiles','abc'));
    }
    public function f20view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f20view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('school_percentage',[61,70])->select('id','fullname','school_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f20view',compact('s_id','profiles','abc'));
    }
    public function f21view(Setupscholarship $scholarships,$id)
    {
        // $scholarship=Scholarship::find($id);
        //$scholarships=Scholarship::find($id);
        //$results=DB::table('scholarship_user')->where('scholarship_id',$id)->get();
        //return view('scholarshipprovider.applications.f21view',compact('results','scholarships'));
        $scholarships=Scholarship::select('id')->where('id',$id)->first();
        $s_id=$scholarships->id;
        $abc=DB::table('scholarship_user')->select('user_id')->where('scholarship_id',$id);
        $profiles=StudentProfile::whereIn('user_id',$abc)->whereBetween('school_percentage',[0,60])->select('id','fullname','school_percentage','user_id')->get();
        return view('scholarshipprovider.applications.f21view',compact('s_id','profiles','abc'));
    }


    public function promotion()
    {
         return view('scholarshipprovider.promotion.index');
    }
}
