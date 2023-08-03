@extends('layouts.admin')
@section('content')
<h1>Hello </h1>
<div class="card">
    <div class="card-header">
        SMS Scholarship Status
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('storesmsstatus')}}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label class="required" for="student_name">{{ trans('cruds.scholarshipAchiever.fields.student_name') }}</label>
                <select class="form-control select2" name="user_id" id="student_name">
                    @foreach(App\StudentProfile::all() as $student_name)
                        <option value="{{$student_name->user_id}}">{{$student_name->fullname}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="form-group">
                <input type="user_name" name="user_name" class="form-control" id="user_name" readonly>

            </div>
            <div class="form-group">
                <label class="required" for="scheme_name">Scholarship Name</label>
                
                <select class="form-control select2" name="scholarship_id" id="scholarship_id">
                    <option>All</option>
                    @foreach(App\Scholarship::all() as $scholarship)
                        <option value="{{$scholarship->id}}">{{$scholarship->scheme_name}} </option>
                    @endforeach
                    
                </select>
                
            </div>
             <div class="form-group">
                <label class="required" for="student_name">Status</label>
                <select class="form-control" name="status">
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
@section('scripts')
@parent

<script type="text/javascript">
    $('#student_name').change(function(){

    $('input[type=user_name]').val($('option:selected',this).text());
    
});

</script>


@endsection