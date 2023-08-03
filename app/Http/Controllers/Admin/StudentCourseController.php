<?php

namespace App\Http\Controllers\Admin;

use App\StudentCourses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coursetype;

use App\Http\Requests\MassDestroyCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Gate;

use Symfony\Component\HttpFoundation\Response;

class StudentCourseController extends Controller
{
    //
    public function index()
    {
        abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = StudentCourses::all();

        return view('admin.student_courses.index', compact('courses'));
    }
    public function create()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.student_courses.create', compact('course_types'));
    }
    public function store(StoreCourseRequest $request)
    {
        

        $course = StudentCourses::create($request->all());

        return redirect()->route('student_courses');
    }
    public function edit(Request $request,$id)
    {
        abort_if(Gate::denies('course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course_types = Coursetype::all()->pluck('course_type_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        //$course->load('course_type');

        $course=StudentCourses::find($id);
        return view('admin.student_courses.edit', compact('course_types', 'course'));
    }

    public function update(UpdateCourseRequest $request, $id)
    {
        $course=StudentCourses::find($id);
        $course->update($request->all());

        return redirect()->route('student_courses');
    }
   
}
