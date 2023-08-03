@extends('layouts.admin')
@section('content')
<h1>Hello </h1>
<div class="card">
    <div class="card-header">
        Student Scholarship Status
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('storestatus')}}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label class="required" for="student_name">{{ trans('cruds.scholarshipAchiever.fields.student_name') }}</label>
                <select class="form-control select2" name="user_id" id="student_name">
                    @foreach(App\StudentProfile::all() as $student_name)
                        <option value="{{$student_name->user_id}}">{{$student_name->fullname}} {{$student_name->id}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="form-group">
                <label class="required" for="scheme_name">Scholarship Name</label>
                <input type="text" name="scheme_name" class="form-control">

            </div>
            <div class="form-group">
                <label>Attachments</label> <br>
                <input type="file" name="applicationpdf">
            </div>
            <div class="form-group">
                <label class="required" for="student_name">Status</label>
                <select class="form-control" name="status">
                    <option selected="selected" disabled="true">Please Select</option>
                    <option value="Application PDF mailed to Student by FORSTU Team">Application PDF mailed to Student by FORSTU Team</option>
                	<option value="Application Submitted">Application Submitted</option>

                	<option value="Shortlised">Shortlised</option>
                	<option value="Awarded">Awarded</option>
                	<option value="Fund Disbursed">Fund Disbursed</option>
                    <option value="Better Luck Next Time">Better Luck Next Time</option>
                </select>
            </div>
           
            
            
            
            
            
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>


@endsection