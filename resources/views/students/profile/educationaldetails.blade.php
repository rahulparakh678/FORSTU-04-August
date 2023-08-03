@extends('layouts.student')

@section('content')

 @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
@endif

<div class="accordion" id="accordionExample">
@if($profile->course_type_id>1)
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Class 10 Details
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <form method="POST" action=" {{ route('storessc')}}" enctype="multipart/form-data">
            @csrf
             <input type="hidden" name="class10_details_completed" value="Yes">                   
            <div class="form-group ">
                <label class="required" for="class_10_school_name">{{ trans('cruds.studentDetail.fields.class_10_school_name') }}</label>
                <input class="form-control {{ $errors->has('class_10_school_name') ? 'is-invalid' : '' }}" type="text" name="class_10_school_name" id="class_10_school_name" value="{{ old('class_10_school_name', $profile->class_10_school_name) }}" required>
                @if($errors->has('class_10_school_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_10_school_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_10_school_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="class_10_state">{{ trans('cruds.studentDetail.fields.class_10_state') }}</label>
                

                <select class="form-control {{ $errors->has('class_10_state') ? 'is-invalid' : '' }}" name="class_10_state" id="class_10_state" required>
                    <option value disabled {{ old('class_10_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('class_10_state', $profile->class_10_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>

                @if($errors->has('class_10_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_10_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_10_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="school_passing">{{ trans('cruds.studentDetail.fields.school_passing') }}</label>
                <input class="form-control date {{ $errors->has('school_passing') ? 'is-invalid' : '' }}" type="text" name="school_passing" id="school_passing" value="{{ old('school_passing',$profile->school_passing) }}" required>
                @if($errors->has('school_passing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('school_passing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_passing_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">Scoring System</label>
                <input type="radio" name="ssc_scoring" value="marks" id="ssc_marks" required>
                Marks
                <input type="radio" name="ssc_scoring" value="cgpa" id="ssc_cgpa" > CGPA
            </div>
            <div class="form-group">
                <label class="required" for="school_marks_obtained" style="display: none;" id="school_obtained">{{ trans('cruds.studentDetail.fields.school_marks_obtained') }}</label>
                <input class="form-control {{ $errors->has('school_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="school_marks_obtained" id="school_marks_obtained" value="{{ old('school_marks_obtained',$profile->school_marks_obtained) }}" style="display: none;" >
                @if($errors->has('school_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('school_marks_obtained') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_obtained_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="school_marks_total" style="display: none;" id="school_total">{{ trans('cruds.studentDetail.fields.school_marks_total') }}</label>
                <input class="form-control {{ $errors->has('school_marks_total') ? 'is-invalid' : '' }}" type="number" name="school_marks_total" id="school_marks_total" value="{{ old('school_marks_total',$profile->school_marks_total) }}" style="display: none;" >
                @if($errors->has('school_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('school_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="class10_obtained" id="school_cgpa_obtained" style="display: none;" class="required">Class 10 CGPA Obtained</label>
                <input class="form-control {{ $errors->has('cgpa_school_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_school_marks_obtained" id="cgpa_school_marks_obtained" value="{{ old('cgpa_school_marks_obtained',$profile->cgpa_school_marks_obtained) }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('cgpa_school_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_school_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="class10_total" id="school_cgpa_total" style="display: none;" class="required"> Class 10 Total CGPA </label>
                <input class="form-control {{ $errors->has('cgpa_school_marks_total ') ? 'is-invalid' : '' }}" type="text" name="cgpa_school_marks_total" id="cgpa_school_marks_total"  style="display: none;" step="0.01" min="0" max="10" >
                @if($errors->has('cgpa_school_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_school_marks_total  ') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">Percentage</label>
              
                <input type="text" name="school_percentage" class="form-control" id="ssc_percentage" value="{{old('ssc_percentage',$profile->school_percentage)}}" required>
                
            </div>
            
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                Save Details
                </button>
            </div>
        </form>
        </div>
    </div>
  </div>
 @endif
 @if($profile->course_type_id>3 && $profile->course_type_id!=6 && $profile->course_type_id!=8)
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Class 12 Details/ Diploma Details
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <label>Which of following course have you completed</label>
            <input type="radio" name="class12_appeared" value="YES" id="class12_appeared_yes">Class 12
            <input type="radio" name="class12_appeared" value="No" id="class12_appeared_no">Diploma
            <input type="radio" name="class12_appeared" value="Both" id="class12_appeared_both">Both
            <form method="POST" action=" {{ route('storessc')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="class12_details_completed" value="Yes">
            <div class="form-group ">
                <label for="class_12_clg_name" class="required" id="class_12_clg_name_label" style="display:none;">{{ trans('cruds.studentDetail.fields.class_12_clg_name') }}</label>
                <input class="form-control {{ $errors->has('class_12_clg_name') ? 'is-invalid' : '' }}" type="text" name="class_12_clg_name" id="class_12_clg_name" value="{{ old('class_12_clg_name',$profile->class_12_clg_name) }}" style="display:none;">
                @if($errors->has('class_12_clg_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_clg_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_clg_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="class_12_state" class="required" id="class_12_state_label" style="display:none;">{{ trans('cruds.studentDetail.fields.class_12_state') }}</label>
                
                <select class="form-control {{ $errors->has('class_12_state') ? 'is-invalid' : '' }}" name="class_12_state" id="class_12_state" style="display:none;" >
                    <option value disabled {{ old('class_12_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('class_12_state', $profile->class_12_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>

                @if($errors->has('class_12_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="class_12_passing_yeat" class="required" id="class_12_passing_yeat_label" style="display:none;">{{ trans('cruds.studentDetail.fields.class_12_passing_yeat') }}</label>
                <input class="form-control date {{ $errors->has('class_12_passing_yeat') ? 'is-invalid' : '' }}" type="text" name="class_12_passing_yeat" id="class_12_passing_yeat" value="{{ old('class_12_passing_yeat', $profile->class_12_passing_yeat) }}" style="display:none;">
                @if($errors->has('class_12_passing_yeat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_passing_yeat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_passing_yeat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" id="scoring_system" style="display:none;">Scoring System</label>
                <input type="radio" name="hsc_scoring" value="marks" id="hsc_marks" style="display:none;">
                <label id="hsc_marks_label" style="display:none;">Marks</label>
                <input type="radio" name="hsc_scoring" style="display:none;" value="cgpa" id="hsc_cgpa"> <label id="hsc_cgpa_label" style="display:none;">CGPA</label> 
            </div>
            <div class="form-group">
                <label for="class_12_marks_obtained"  style="display: none;" class="required" id="class_12_marks_obtained_label">{{ trans('cruds.studentDetail.fields.class_12_marks_obtained') }}</label>
                <input class="form-control {{ $errors->has('class_12_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="class_12_marks_obtained" id="class_12_marks_obtained" value="{{ old('class_12_marks_obtained', $profile->class_12_marks_obtained) }}" step="1" style="display: none;">
                @if($errors->has('class_12_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_marks_obtained') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_marks_obtained_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="class_12_out_of_total_marks"  style="display: none;" id="class_12_out_of_total_marks_label">{{ trans('cruds.studentDetail.fields.class_12_out_of_total_marks') }}</label>
                <input class="form-control {{ $errors->has('class_12_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="class_12_out_of_total_marks" id="class_12_out_of_total_marks" value="{{ old('class_12_out_of_total_marks',$profile->class_12_out_of_total_marks) }}" step="1" style="display: none;">
                @if($errors->has('class_12_out_of_total_marks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_out_of_total_marks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_out_of_total_marks_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_obtained" id="hsc_cgpa_obtained" style="display: none;" >Class 12 CGPA Obtained</label>
                <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_class_12_marks_obtained" id="cgpa_class_12_marks_obtained" value="{{ old('cgpa_class_12_marks_obtained', $profile->cgpa_class_12_marks_obtained) }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('previous_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_total" id="hsc_cgpa_total_label" style="display: none;">Class 12 Total CGPA </label>
                <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_class_12_marks_total" id="cgpa_class_12_marks_total"   style="display: none;" min="0" max="10" >
                @if($errors->has('cgpa_previous_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_previous_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" id="hsc_percentage_label" style="display:none;">Percentage</label>

               
                <input type="text" name="class_12_percentage" id="hsc_percentage" class="form-control" value="{{ old('hsc_percentage', $profile->class_12_percentage ?? '') }}" style="display: none;" readonly>
            </div>
            <div class="form-group" >
                <button class="btn btn-danger" type="submit" id="hsc_save_details" style="display:none;">
                Save Details
                </button>
            </div>
        </form>
        <form method="POST" action=" {{ route('storessc')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="diploma_details_completed" value="Yes">
            <div class="form-group ">
                <label for="diploma_clg_name" class="required" id="diploma_clg_name_label" style="display:none;">{{ trans('cruds.studentDetail.fields.diploma_clg_name') }}</label>
                <input class="form-control {{ $errors->has('diploma_clg_name') ? 'is-invalid' : '' }}" type="text" name="diploma_clg_name" id="diploma_clg_name" value="{{ old('diploma_clg_name', $profile->diploma_clg_name) }}" style="display:none;">
                @if($errors->has('diploma_clg_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_clg_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_clg_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="diploma_state" class="required" id="diploma_state_label" style="display:none;">{{ trans('cruds.studentDetail.fields.diploma_state') }}</label>
                
                <select class="form-control {{ $errors->has('diploma_state') ? 'is-invalid' : '' }}" name="diploma_state" id="diploma_state"  style="display:none;">
                    <option value disabled {{ old('diploma_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('diploma_state', $profile->diploma_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('diploma_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="diploma_passing_year" class="required" id="diploma_passing_year_label" style="display:none;">{{ trans('cruds.studentDetail.fields.diploma_passing_year') }}</label>
                <input class="form-control date {{ $errors->has('diploma_passing_year') ? 'is-invalid' : '' }}" type="text" name="diploma_passing_year" id="diploma_passing_year" value="{{ old('diploma_passing_year', $profile->diploma_passing_year) }}" style="display:none;">
                @if($errors->has('diploma_passing_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_passing_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_passing_year_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" id="diploma_scoring" style="display:none;">Scoring System</label>
                <input type="radio" name="diploma_scoring" value="marks" id="diploma_marks" style="display:none;">
                <label id="diploma_marks_label" style="display:none;">Marks</label>
                <input type="radio" name="diploma_scoring" value="cgpa" id="diploma_cgpa" style="display:none;" ><label id="diploma_cgpa_label" style="display:none;">CGPA </label>
            </div>
            <div class="form-group">
                <label for="diploma_total_marks_obtained" id="diploma_obtained" class="required" style="display: none;">{{ trans('cruds.studentDetail.fields.diploma_total_marks_obtained') }}</label>
                <input class="form-control {{ $errors->has('diploma_total_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="diploma_total_marks_obtained" id="diploma_total_marks_obtained" value="{{ old('diploma_total_marks_obtained', $profile->diploma_total_marks_obtained) }}" style="display: none;">
                @if($errors->has('diploma_total_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_total_marks_obtained') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_total_marks_obtained_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="diploma_out_of_total_marks" id="diploma_total" class="required" style="display: none;">{{ trans('cruds.studentDetail.fields.diploma_out_of_total_marks') }}</label>
                <input class="form-control {{ $errors->has('diploma_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="diploma_out_of_total_marks" id="diploma_out_of_total_marks" value="{{ old('diploma_out_of_total_marks',$profile->diploma_out_of_total_marks) }}" style="display: none;">
                @if($errors->has('diploma_out_of_total_marks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_out_of_total_marks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_out_of_total_marks_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_obtained" id="diploma_cgpa_obtained" style="display: none;" class="required"> CGPA Obtained</label>
                <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_diploma_marks_obtained" id="cgpa_diploma_marks_obtained" value="{{ old('cgpa_diploma_marks_obtained', $profile->cgpa_diploma_marks_obtained) }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('previous_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_total" id="diploma_cgpa_total" style="display: none;" class="required">Total CGPA </label>
                <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_diploma_marks_total" id="cgpa_diploma_marks_total"    step="0.01" min="0" max="10"  style="display: none;">
                @if($errors->has('cgpa_diploma_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_diploma_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
            <label id="diploma_percentage_label" style="display:none;">Percentage</label>
            @if(empty($profile->diploma_percentage))
            <input type="text" name="diploma_percentage" id="diploma_percentage"  class="form-control" readonly style="display:none">  
            @else
            <input type="text" name="diploma_percentage" id="diploma_percentage"  class="form-control"  value="{{$profile->diploma_percentage}}" style="display:none" >
            @endif
            </div>
            
            <div class="form-group" >
                <button class="btn btn-danger" type="submit" style="display:none;" id="diploma_submit">
                Save Details
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>
 @endif
 @if($profile->course_type_id>4 && $profile->course_type_id<6)
   
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Graduation Details
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <form method="POST" action=" {{ route('storessc')}}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="graduation_details_completed" value="Yes">
            <div class="form-group ">
                    <label for="grad_clg_name" class="required">{{ trans('cruds.studentDetail.fields.grad_clg_name') }}</label>
                    <input class="form-control {{ $errors->has('grad_clg_name') ? 'is-invalid' : '' }}" type="text" name="grad_clg_name" id="grad_clg_name" value="{{ old('grad_clg_name', $profile->grad_clg_name) }}">
                    @if($errors->has('grad_clg_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_clg_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_clg_name_helper') }}</span>
            </div>
            <div class="form-group">
                    <label for="grad_state" class="required">{{ trans('cruds.studentDetail.fields.grad_state') }}</label>
                    
                    <select class="form-control {{ $errors->has('grad_state') ? 'is-invalid' : '' }}" name="grad_state" id="grad_state" required>
                    <option value disabled {{ old('grad_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('grad_state', $profile->grad_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>

                    @if($errors->has('grad_state'))
                        <div class="invalid-feedback">
                        {{ $errors->first('grad_state') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_state_helper') }}</span>
            </div>
            <div class="form-group">
                    <label for="grad_passing_year" class="required">{{ trans('cruds.studentDetail.fields.grad_passing_year') }}</label>
                    <input class="form-control date {{ $errors->has('grad_passing_year') ? 'is-invalid' : '' }}" type="text" name="grad_passing_year" id="grad_passing_year" value="{{ old('grad_passing_year',$profile->grad_passing_year) }}" required>
                    @if($errors->has('grad_passing_year'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_passing_year') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_passing_year_helper') }}</span>
            </div>
            <div class="form-group">
                    <label class="required">Scoring System</label>
                    <input type="radio" name="grad_scoring" value="marks" id="grad_marks" required>
                    Marks
                    <input type="radio" name="grad_scoring" value="cgpa" id="grad_cgpa"> CGPA
            </div>
            <div class="form-group">
                    <label for="grad_total_marks" id="grad_obtained" class="required" style="display: none;">{{ trans('cruds.studentDetail.fields.grad_total_marks')   }}</label>
                    <input class="form-control {{ $errors->has('grad_total_marks') ? 'is-invalid' : '' }}"  type="number" name="grad_total_marks" id="grad_total_marks" value="{{ old('grad_total_marks',$profile->grad_total_marks) }}" style="display:none;">
                    @if($errors->has('grad_total_marks'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_total_marks') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_total_marks_helper') }}</span>
            </div>
            <div class="form-group">
                    <label for="grad_out_of_total_marks" id="grad_total" style="display: none;" class="required" >{{ trans('cruds.studentDetail.fields.grad_out_of_total_marks') }}</label>
                    <input class="form-control {{ $errors->has('grad_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="grad_out_of_total_marks" id="grad_out_of_total_marks"     value="{{ old('grad_out_of_total_marks',$profile->grad_out_of_total_marks) }}" style="display: none;">
                    @if($errors->has('grad_out_of_total_marks'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_out_of_total_marks') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_out_of_total_marks_helper') }}</span>
            </div>
            <div class="form-group">
                    <label  for="cgpa_previous_marks_obtained" id="grad_cgpa_obtained" style="display: none;"> CGPA Obtained</label>
                    <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_grad_marks_obtained" id="cgpa_grad_marks_obtained" value="{{ old('cgpa_grad_marks_obtained', $profile->cgpa_grad_marks_obtained) }}" style="display: none;" step="0.01" min="0" max="10"  >
                    @if($errors->has('previous_marks_obtained'))
                        <div class="invalid-feedback">
                            {{ $errors->first('previous_marks_obtained') }}
                        </div>
                    @endif
                
            </div>
            <div class="form-group">
                    <label  for="cgpa_previous_marks_total" id="grad_cgpa_total" style="display: none;  ">Total CGPA </label>
                    <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_grad_marks_total" id="cgpa_grad_marks_total"   style="display: none;" step="0.01" min="0" max="10" >
                    @if($errors->has('cgpa_grad_marks_total'))
                        <div class="invalid-feedback">
                        {{ $errors->first('cgpa_grad_marks_total') }}
                    </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <label>Percentage</label>
                
                <input type="text" name="grad_percentage" id="grad_percentage" class="form-control"
                value="{{old('grad_percentage',$profile->grad_percentage ?? '')}}" required>

            </div>
            <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                    Save Details
                    </button>
            </div>

        </form>
      </div>
    </div>
  </div>
@endif
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Previous Examination Details.
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            <form method="POST" action=" {{ route('storessc')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group" id="scoring_system">
                    <center><small><strong>Enter the details of previous examination you attempted.</strong></small></center>
                    <label class="required">Scoring System</label>
                    <input type="radio" name="scoring" value="marks" id="marks">
                    Marks
                    <input type="radio" name="scoring" value="cgpa" id="cgpa"> CGPA
                </div>
                <div class="form-group">
                    <label  for="previous_marks_obtained" id="previous_obtained" style="display:none;">Previous Semester/Previous Year Marks Obtained</label>
                    <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="previous_marks_obtained" id="previous_marks_obtained" value="{{ old('previous_marks_obtained', $profile->previous_marks_obtained) }}"  style="display:none;" >
                    @if($errors->has('previous_marks_obtained'))
                        <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                        </div>
                    @endif
                
                </div>
                <div class="form-group">
                    <label  for="previous_marks_total" id="previous_total_obtained" style="display:none;" >Previous Semester/Previous Year  Out of Total Marks </label>
                    <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="number" name="previous_marks_total" id="previous_marks_total" value="{{ old('previous_marks_total',$profile->previous_marks_total ) }}"  style="display:none;">
                    @if($errors->has('previous_marks_total'))
                        <div class="invalid-feedback">
                            {{ $errors->first('previous_marks_total') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
                </div>
                <div class="form-group">
                    <label  for="cgpa_previous_marks_obtained" id="cgpa_obtained" style="display: none;">Previous Semester/Previous Year CGPA Obtained</label>
                    <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_previous_marks_obtained" id="cgpa_previous_marks_obtained" value="{{ old('cgpa_previous_marks_obtained', $profile->cgpa_previous_marks_obtained) }}" style="display: none;" step="0.01" min="0" max="10"  >
                    @if($errors->has('previous_marks_obtained'))
                        <div class="invalid-feedback">
                         {{ $errors->first('previous_marks_obtained') }}
                        </div>
                    @endif
                
                </div>
                <div class="form-group">
                    <label  for="cgpa_previous_marks_total" id="cgpa_total" style="display: none;">Previous Semester/Previous Year  Out of Total CGPA </label>
                    <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_previous_marks_total" id="cgpa_previous_marks_total"  style="display: none;" step="0.01" min="0" max="10" >
                    @if($errors->has('cgpa_previous_marks_total'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cgpa_previous_marks_total') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
                </div>
                <div class="form-group">
                    <input type="text" name="previous_percentage" value=" {{ old('previous_percentage',$profile->previous_percentage)}}" id="previous_percentage" class="form-control" readonly style="display:none">

                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit" style="display:none" id="prev_submit">
                    Save Details
                    </button>
                </div>
            
            
            
            
            </form>
        </div>
    </div>
</div>


@if(($profile->course_type_id==1))
<div class="form-group">
    <a class="btn btn-danger btn-block" style="color: white;text-decoration:none;" href="{{route('student_documents')}}">Save Details & Proceed</a>
</div>
@elseif((($profile->course_type_id==2)|| ($profile->course_type_id==6) || ($profile->course_type_id==8) ) &&(!empty($profile->school_percentage)) )
    <div class="form-group">
        <a class="btn btn-danger btn-block" style="color: white;text-decoration:none;" href="{{route('student_documents')}}">Save Details & Proceed</a>
    </div>

@elseif(($profile->course_type_id==3) && (!empty($profile->school_percentage)))
    <div class="form-group">
        <a class="btn btn-danger btn-block" style="color: white;text-decoration:none;" href="{{route('student_documents')}}">Save Details & Proceed</a>
    </div>
@elseif((($profile->course_type_id==4) || ($profile->course_type_id==7) ) && (!empty($profile->school_percentage))  && 
((!empty($profile->class_12_percentage)) || (!empty($profile->diploma_percentage)) )
 )
    <div class="form-group">
        <a class="btn btn-danger btn-block" style="color: white;text-decoration:none;" href="{{route('student_documents')}}">Save Details & Proceed</a>
    </div>

@elseif(($profile->course_type_id==5) && (!empty($profile->school_percentage))  && 
((!empty($profile->class_12_percentage)) || (!empty($profile->diploma_percentage)) ) &&
(!empty($profile->grad_percentage))
 )
    <div class="form-group">
        <a class="btn btn-danger btn-block" style="color: white;text-decoration:none;" href="{{route('student_documents')}}">Save Details & Proceed</a>
    </div>

@else


@endif
 
	 
@endsection
@section('scripts')

<script type="text/javascript">
    $("#ssc_marks").on("change",ssc_scoring);
    $("#ssc_cgpa").on("change",ssc_cgpa);
    function ssc_scoring()
    {
        
        $('#school_marks_obtained').show();
       
        
        $('#school_marks_total').show();
        $('#school_obtained').show();
        $('#school_total').show();
        $('#school_cgpa_obtained').hide();
        $('#cgpa_school_marks_obtained  ').hide();
        $('#school_cgpa_total').hide();
        $('#cgpa_school_marks_total').hide();
        $('#cgpa_school_marks_total').val('');
        $('#cgpa_school_marks_obtained  ').val('');
        
         $('#school_percentage').val('');

        
    }
    function ssc_cgpa()
    {
        
        
        $('#cgpa_school_marks_total').show();
        $('#school_cgpa_obtained').show();
        $('#cgpa_school_marks_obtained ').show();
        $('#school_cgpa_total').show();
        
        $('#school_marks_obtained').hide();
        $('#school_marks_total').hide();
        $('#school_obtained').hide();
        $('#school_total').hide();

        $('#school_marks_obtained').val('');
        $('#school_marks_total').val('');
        $('#school_percentage').val('');
        
        
        
    }
$("#school_marks_obtained").on("keyup",ssc_percentage);
$("#school_marks_total").on("keyup",ssc_percentage);
function ssc_percentage(){
        var obtained= document.getElementById('school_marks_obtained').value;
        var total=document.getElementById('school_marks_total').value;
        var result=(parseFloat(obtained) / parseFloat(total))*100;
        var result= result.toFixed(2);
        if (!isNaN(result)) {
                document.getElementById('ssc_percentage').value = result;
            }
    }
$("#cgpa_school_marks_obtained").on("keyup",cgpa_school_percentage);
    function cgpa_school_percentage()
    {
        var obtained= document.getElementById('cgpa_school_marks_obtained').value;
        var result=(parseFloat(obtained) * 9.5);
                var result= result.toFixed(2);
                if (!isNaN(result)) {
                    document.getElementById('ssc_percentage').value = result;
                                     }   
    }

    $("#hsc_marks").on("change",hsc_scoring);
    $("#hsc_cgpa").on("change",hsc_cgpa);
    function hsc_scoring()
    {
        
        $('#hsc_obtained').show();
        $('#class_12_marks_obtained').show();
        $('#hsc_total').show();
        $('#class_12_out_of_total_marks').show();
        $('#hsc_cgpa_obtained').hide();
        $('#cgpa_class_12_marks_obtained  ').hide();
        $('#hsc_cgpa_total').hide();
        $('#cgpa_class_12_marks_total').hide();
        
        $('#cgpa_class_12_marks_obtained  ').val('');
        $('#cgpa_class_12_marks_total').val('');
        $('#class_12_marks_obtained_label').show();
        $('#class_12_out_of_total_marks_label').show();


        $('#hsc_cgpa_total_label').hide();
        
        

        
    }
    function hsc_cgpa()
    {
        
        
        $('#hsc_cgpa_obtained').show();
        $('#cgpa_class_12_marks_obtained  ').show();
        $('#hsc_cgpa_total').show();
        $('#cgpa_class_12_marks_total').show();
        $('#hsc_obtained').hide();
        $('#class_12_marks_obtained').hide();
        $('#hsc_total').hide();
        $('#class_12_out_of_total_marks').hide();
        $('#class_12_marks_obtained').val('');
        $('#class_12_out_of_total_marks').val('');
        
        $('#hsc_cgpa_total_label').show();
         $('#class_12_marks_obtained_label').hide();
        $('#class_12_out_of_total_marks_label').hide();
        
        
       
    }
    

    $("#cgpa_class_12_marks_obtained").on("keyup",cgpa_hsc_percentage);
    function cgpa_hsc_percentage()
    {
        var obtained= document.getElementById('cgpa_class_12_marks_obtained').value;
        var result=(parseFloat(obtained) * 9.5);
                var result= result.toFixed(2);
                if (!isNaN(result)) {
                    document.getElementById('hsc_percentage').value = result;
                                     }   
    }
    $("#class_12_marks_obtained").on("keyup",hsc_percentage);
    $("#class_12_out_of_total_marks").on("keyup",hsc_percentage);
function hsc_percentage(){
        var obtained= document.getElementById('class_12_marks_obtained').value;
        var total=document.getElementById('class_12_out_of_total_marks').value;
        var result=(parseFloat(obtained) / parseFloat(total))*100;
        var result= result.toFixed(2);
        if (!isNaN(result)) {
                document.getElementById('hsc_percentage').value = result;
            }
    }  

$("#class12_appeared_yes").on("click",class12_appeared_yes);
function class12_appeared_yes(){
    var obtained=document.getElementById('class12_appeared_yes').value;
    

    
     $('#diploma_clg_name_label').hide();

     $('#diploma_clg_name').hide();
     document.getElementById("diploma_clg_name").removeAttribute("required");
     $('#diploma_state_label').hide();
     $('#diploma_state').hide();
     document.getElementById("diploma_state").removeAttribute("required");
     $('#diploma_passing_year_label').hide();
     $('#diploma_passing_year').hide();
     document.getElementById("diploma_passing_year").removeAttribute("required");
     $('#diploma_scoring').hide();
     $('#diploma_marks').hide();
     $('#diploma_cgpa').hide();
     $('#diploma_obtained').hide();

     $('#diploma_total_marks_obtained').hide();
     $('#diploma_total').hide();
     $('#diploma_out_of_total_marks').hide();
     $('#diploma_cgpa_obtained').hide();
     $('#diploma_cgpa_total').hide();
     $('#cgpa_diploma_marks_total').hide();
     $('#diploma_percentage_label').hide();
     document.getElementById("diploma_percentage").removeAttribute("required");
     $('#diploma_percentage').hide();
     $('#diploma_submit').hide();
     $('#diploma_marks_label').hide();
     $('#diploma_cgpa_label').hide();




    $('#class_12_clg_name').show();
    document.getElementById("class_12_clg_name").setAttribute("required","");
    $('#class_12_state').show();
    document.getElementById("class_12_state").setAttribute("required","");
    $('#class_12_clg_name_label').show();
    $('#class_12_state_label').show();
    $('#class_12_passing_yeat_label').show();
    $('#class_12_passing_yeat').show();
    document.getElementById("class_12_passing_yeat").setAttribute("required","");
    $('#hsc_marks').show();
    $('#hsc_cgpa').show();
    document.getElementById("hsc_marks").setAttribute("required","");
    
    $('#hsc_percentage_label').show();
    
    $('#hsc_percentage').show();
    document.getElementById("hsc_percentage").setAttribute("required","");
    $('#scoring_system').show();
    $('#hsc_marks_label').show();
    $('#hsc_cgpa_label').show();
    $('#hsc_save_details').show();

    

  
    
}
$("#class12_appeared_no").on("click",class12_appeared_no);
function class12_appeared_no(){
    var obtained=document.getElementById('class12_appeared_no').value;
    

    $('#diploma_submit').show();
    $('#class_12_clg_name').hide();
    document.getElementById("class_12_clg_name").removeAttribute("required");
    $('#class_12_state').hide();
    document.getElementById("class_12_state").removeAttribute("required");
    $('#class_12_clg_name_label').hide();

    $('#class_12_state_label').hide();

    $('#class_12_passing_yeat_label').hide();
    $('#class_12_passing_yeat').hide();
    document.getElementById("class_12_passing_yeat").removeAttribute("required");
    $('#hsc_marks').hide();
    document.getElementById("hsc_marks").removeAttribute("required");
    $('#hsc_cgpa').hide();
    document.getElementById("hsc_cgpa").removeAttribute("required");
    $('#class_12_marks_obtained_label').hide();
    $('#class_12_marks_obtained').hide();
    document.getElementById("class_12_marks_obtained").removeAttribute("required");
    $('#class_12_out_of_total_marks').hide();
    document.getElementById("class_12_out_of_total_marks").removeAttribute("required");
    $('#class_12_out_of_total_marks_label').hide();
    $('#hsc_cgpa_obtained_label').hide();
    document.getElementById("cgpa_class_12_marks_obtained").removeAttribute("required");
    $('#cgpa_class_12_marks_obtained').hide();
    $('#hsc_cgpa_total_label').hide();
    document.getElementById("cgpa_class_12_marks_total").removeAttribute("required");
    $('#cgpa_class_12_marks_total').hide();
    document.getElementById("hsc_percentage").removeAttribute("required");
    $('#hsc_percentage_label').hide();
    $('#hsc_percentage').hide();
    
    $('#scoring_system').hide();
    $('#hsc_marks_label').hide();
    $('#hsc_cgpa_label').hide();
    $('#hsc_save_details').hide();

     $('#diploma_clg_name_label').show();
     $('#diploma_clg_name').show();
     document.getElementById("diploma_clg_name").setAttribute("required","");
     $('#diploma_state_label').show();
     $('#diploma_state').show();
     document.getElementById("diploma_state").setAttribute("required","");
     $('#diploma_passing_year_label').show();
     $('#diploma_passing_year').show();
     document.getElementById("diploma_passing_year").setAttribute("required","");
     $('#diploma_scoring').show();
     $('#diploma_marks').show();
     $('#diploma_cgpa').show();
    
     
     
     $('#diploma_percentage_label').show();

     $('#diploma_percentage').show();
     document.getElementById("diploma_marks").setAttribute("required","");
     document.getElementById("diploma_percentage").setAttribute("required","");
     $('#diploma_submit').show();
     $('#diploma_marks_label').show();
     $('#diploma_cgpa_label').show();

     
    
    
}
$("#diploma_marks").on("change",diploma_scoring);
    $("#diploma_cgpa").on("change",diploma_cgpa);
    function diploma_scoring()
    {
        
        $('#diploma_obtained').show();
        $('#diploma_total').show();
        $('#diploma_total_marks_obtained').show();
        $('#diploma_out_of_total_marks').show();
        $('#diploma_cgpa_obtained').hide();
        $('#diploma_cgpa_total').hide();
        $('#cgpa_diploma_marks_obtained ').hide();
        $('#cgpa_diploma_marks_total ').hide();
        $('#cgpa_diploma_marks_obtained ').val('');
        $('#cgpa_diploma_marks_total ').val('');
        $('#diploma_percentage').val('');
        
        
        
        

        
    }
    function diploma_cgpa()
    {
        
        
        $('#diploma_cgpa_obtained').show();
        $('#diploma_cgpa_total').show();
        $('#cgpa_diploma_marks_obtained ').show();
        $('#cgpa_diploma_marks_total ').show();
        
        $('#diploma_obtained').hide();
        $('#diploma_total').hide();
        $('#diploma_total_marks_obtained').hide();
        $('#diploma_out_of_total_marks').hide();
        $('#diploma_total_marks_obtained').val('');
        $('#diploma_out_of_total_marks').val('');
        $('#diploma_percentage').val('');
        
        
       
    }
    

    $("#cgpa_diploma_marks_obtained").on("keyup",cgpa_diploma_percentage);
    function cgpa_diploma_percentage()
    {
        var obtained= document.getElementById('cgpa_diploma_marks_obtained').value;
        var result=(parseFloat(obtained) * 9.5);
                var result= result.toFixed(2);
                if (!isNaN(result)) {
                    document.getElementById('diploma_percentage').value = result;
                                     }   
    }
    $("#diploma_total_marks_obtained").on("keyup",diploma_percentage);
    $("#diploma_out_of_total_marks").on("keyup",diploma_percentage);
    function diploma_percentage(){
        var obtained= document.getElementById('diploma_total_marks_obtained').value;
        var total=document.getElementById('diploma_out_of_total_marks').value;
        var result=(parseFloat(obtained) / parseFloat(total))*100;
        var result= result.toFixed(2);
        if (!isNaN(result)) {
                document.getElementById('diploma_percentage').value = result;
            }
    }    

$("#class12_appeared_both").on("click",class12_appeared_both);
function class12_appeared_both(){
    

    $('#class_12_clg_name').show();
    $('#class_12_state').show();
    $('#class_12_clg_name_label').show();
    $('#class_12_state_label').show();
    $('#class_12_passing_yeat_label').show();
    $('#class_12_passing_yeat').show();
    $('#hsc_marks').show();
    $('#hsc_cgpa').show();
    
    $('#hsc_percentage_label').show();
    $('#hsc_percentage').show();
    $('#scoring_system').show();
    $('#hsc_marks_label').show();
    $('#hsc_cgpa_label').show();
   

    $('#diploma_clg_name_label').show();
     $('#diploma_clg_name').show();
     
     $('#diploma_state_label').show();
     $('#diploma_state').show();
    
     $('#diploma_passing_year_label').show();
     $('#diploma_passing_year').show();
    
     $('#diploma_scoring').show();
     $('#diploma_marks').show();
     $('#diploma_cgpa').show();
     
     $('#diploma_percentage_label').show();

     $('#diploma_percentage').show();
    
     $('#diploma_submit').show();
     $('#diploma_marks_label').show();
     $('#diploma_cgpa_label').show();

}
$("#grad_marks").on("change",grad_scoring);
    $("#grad_cgpa").on("change",grad_cgpa);
    function grad_scoring()
    {
        
        $('#grad_obtained').show();
        $('#grad_total').show();
        $('#grad_total_marks').show();
       
        $('#grad_out_of_total_marks').show();
       
        $('#grad_cgpa_obtained').hide();
        $('#grad_cgpa_total').hide();
        $('#cgpa_grad_marks_obtained').hide();
        $('#cgpa_grad_marks_total').hide();
        $('#cgpa_grad_marks_obtained').val('');
        $('#cgpa_grad_marks_total').val('');
        $('#grad_percentage').val('');

        document.getElementById('grad_total_marks').setAttribute("required","");
        document.getElementById('grad_out_of_total_marks').setAttribute("required","");
       
    
    }
    function grad_cgpa()
    {
        
        
        $('#grad_cgpa_obtained').show();
        $('#grad_cgpa_total').show();
        $('#cgpa_grad_marks_obtained').show();
        $('#cgpa_grad_marks_total').show();
        
        $('#grad_obtained').hide();
        $('#grad_total').hide();
        $('#grad_total_marks').hide();
        $('#grad_out_of_total_marks').hide();
        $('#grad_total_marks').val('');
        $('#grad_out_of_total_marks').val('');
        $('#grad_percentage').val('');

        document.getElementById('grad_total_marks').setAttribute("required","");
        document.getElementById('grad_out_of_total_marks').setAttribute("required","");
        
        
    }
    

    $("#cgpa_grad_marks_obtained").on("keyup",cgpa_grad_percentage);
    function cgpa_grad_percentage()
    {
        var obtained= document.getElementById('cgpa_grad_marks_obtained').value;
        var result=(parseFloat(obtained) * 9.5);
                var result= result.toFixed(2);
                if (!isNaN(result)) {
                    document.getElementById('grad_percentage').value = result;
                                     }   
    }
$("#grad_total_marks").on("keyup",grad_percentage);
$("#grad_out_of_total_marks").on("keyup",grad_percentage);

function grad_percentage(){
        var obtained= document.getElementById('grad_total_marks').value;
        
        var total=document.getElementById('grad_out_of_total_marks').value;
         
        var result=(parseFloat(obtained) / parseFloat(total))*100;

        var result= result.toFixed(2);
        if (!isNaN(result)) {
                document.getElementById('grad_percentage').value = result;
                
            }
    } 
  $("#marks").on("change",scoring);
    $("#cgpa").on("change",cgpa);
    function scoring()
    {
        
        $('#previous_marks_obtained').show();
        $('#previous_marks_total').show();
        $('#previous_obtained').show();
        $('#previous_total_obtained').show();
        $('#cgpa_previous_marks_obtained').hide();
        $('#cgpa_previous_marks_total').hide();
        $('#cgpa_obtained').hide();
        $('#cgpa_total').hide();
        $('#cgpa_previous_marks_obtained').val('');
        $('#cgpa_previous_marks_total').val('');
        previous_percentage
        $('#previous_percentage').show();
       
        $('#prev_submit').show();

        
    }
    function cgpa()
    {
        
        $('#previous_marks_obtained').hide();
        $('#previous_marks_total').hide();
        $('#previous_obtained').hide();
        $('#previous_total_obtained').hide();
        $('#cgpa_previous_marks_obtained').show();
        $('#cgpa_previous_marks_total').show();
        $('#cgpa_obtained').show();
        $('#cgpa_total').show();
        $('#previous_marks_obtained').val('');
        $('#previous_marks_total').val('');
        $('#previous_percentage').show();
       
        $('#prev_submit').show();
        
        
    }

    $("#previous_marks_obtained").on("keyup",previous_percentage);
    $("#previous_marks_total").on("keyup",previous_percentage);
    function previous_percentage(){
        
        
                var obtained= document.getElementById('previous_marks_obtained').value;
                var total=document.getElementById('previous_marks_total').value;
                var result=(parseFloat(obtained) / parseFloat(total))*100;
                var result= result.toFixed(2);
                if (!isNaN(result)) {
                    document.getElementById('previous_percentage').value = result;
                                     }
        
        
        
        
    }
    $("#cgpa_previous_marks_obtained").on("keyup",cgpa_previous_percentage);
    function cgpa_previous_percentage()
    {
        var obtained= document.getElementById('cgpa_previous_marks_obtained').value;
        var result=(parseFloat(obtained) * 9.5);
                var result= result.toFixed(2);
                if (!isNaN(result)) {
                    document.getElementById('previous_percentage').value = result;
                                     }   
    }
  
</script>
@endsection