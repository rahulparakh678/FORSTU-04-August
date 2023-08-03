@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Student Scholarship Status
    </div>

    <div class="card-body">
        
        <form method="POST" action="{{route('searchstatus')}}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label class="required" for="student_name">{{ trans('cruds.scholarshipAchiever.fields.student_name') }}</label>
                <select class="form-control select2" name="user_id" id="student_name">
                    @foreach($profiles as $student_name)
                        <option value="{{$student_name->user_id}}">{{$student_name->fullname}} {{$student_name->user_id}}</option>
                    @endforeach

                </select>

                

                
            
            </div>
            
            
            
            
              

            <button type="submit" class="btn btn-danger" value="Save Details">Search Student Scholarships</button>
             
            
            
            
            
            
            
        </form>
            


        
    </div>
        
</div>


@endsection