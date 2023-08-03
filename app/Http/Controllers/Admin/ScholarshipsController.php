<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyScholarshipRequest;
use App\Http\Requests\StoreScholarshipRequest;
use App\Http\Requests\UpdateScholarshipRequest;
use App\Scholarship;
use App\ScholarshipProvider;
use App\StudentProfile;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Redirect;
use App\StudentCourses;
use DB;
use Illuminate\Support\Str;
class ScholarshipsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('scholarship_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scholarships = Scholarship::all();
        $studentcourse=DB::table('course_scholarship')->get();
        return view('admin.scholarships.index', compact('scholarships','studentcourse'));
    }

    public function create()
    {
        abort_if(Gate::denies('scholarship_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company_names = ScholarshipProvider::all()->pluck('organization_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('category_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = StudentCourses::all()->pluck('course_name', 'id');

        return view('admin.scholarships.create', compact('company_names', 'categories', 'courses'));
    }

    public function store(StoreScholarshipRequest $request)
    {
        $slug=Str::slug($request->scheme_name,'-');
        $scholarship = Scholarship::create($request->all());
        $scholarship->courses()->sync($request->input('courses', []));

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $scholarship->id]);
        }

        

           
                $scholarship->update(['slug' =>$slug]);
           
       

        return redirect()->route('admin.scholarships.index');
    }

    public function edit(Scholarship $scholarship)
    {
        abort_if(Gate::denies('scholarship_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company_names = ScholarshipProvider::all()->pluck('organization_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('category_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $courses = StudentCourses::all()->pluck('course_name', 'id');

        $scholarship->load('company_name', 'category', 'courses');

        return view('admin.scholarships.edit', compact('company_names', 'categories', 'courses', 'scholarship'));
    }

    public function update(UpdateScholarshipRequest $request, Scholarship $scholarship)
    {
        $scholarship->update($request->all());
        $scholarship->courses()->sync($request->input('courses', []));

        return redirect()->route('admin.scholarships.index');
    }

    public function show(Scholarship $scholarships,$id)
    {
        abort_if(Gate::denies('scholarship_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scholarships=Scholarship::find($id);

        $scholarships->load('company_name', 'category');

        $studcourse=StudentCourses::all();

        $studentcourse=DB::table('course_scholarship')->where('scholarship_id',$id)->get();

        return view('admin.scholarships.show', compact('scholarships','studentcourse'));
    }

    public function destroy(Scholarship $scholarship)
    {
        abort_if(Gate::denies('scholarship_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $scholarship->delete();

        return back();
    }

    public function massDestroy(MassDestroyScholarshipRequest $request)
    {
        Scholarship::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('scholarship_create') && Gate::denies('scholarship_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Scholarship();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function applicant()
    {
        $applicants=Scholarship::has('users')->where('user_id',auth()->user()->id)->get();
        //$applicants=Scholarship::with('users')->get();
        //$scholarship=Scholarship::all();
        //$applicants=Scholarship::with('users')->where('id','scholarship_id')->get();
        return view('scholarshipprovider.applications.applicants',compact('applicants'));
    }

    public function sco(Request $request)
    {
        $id=$request->id;
        $applicants=Scholarship::where('id',$id)->get();
        return redirect()->back()->with('message','Successful');
    }

    public function applications(Scholarship $scholarship,$id)
    {
        return view('admin.scholarships.applications');
    }

     public function logoup(Request $request)
    {
        
        
        
        
    }

     public function showapplications(Scholarship $scholarships,$id)
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


       return view('admin.scholarships.applicants',compact('results','scholarship','awarded','shortlist','male','female','handicapped','single_parent')); 
    }
    
}