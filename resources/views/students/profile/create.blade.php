@extends('layouts.student')

@section('content')

@if(App\StudentProfile::where('user_id',auth()->user()->id)->exists())

<div class="row">
<div class="container-fluid">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Profile Details
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                       <table class="table table-striped">
                        
                        <tbody>
                            <tr>
                                <td>Personal Details</td>
                                <td>
                                    @if(empty($profile->aadharnumber))
                                     <h4><span class="badge badge-danger">Incomplete</span></h4>
                                    @else
                                   
                                    <h4><span class="badge badge-success">100% Completed</span></h4>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('personaldetails')}}"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>Family Details</td>
                                <td>
                                    @if(empty($profile->father_name))
                                     <h4><span class="badge badge-danger">Incomplete</span></h4>
                                    @else
                                   
                                    <h4><span class="badge badge-success">100% Completed</span></h4>
                                    @endif
                                </td>
                                <td>
                                     <a href="{{route('storepersonaldetails')}}"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Communication Details</td>
                                <td>
                                    @if(empty($profile->current_add))
                                     <h4><span class="badge badge-danger">Incomplete</span></h4>
                                    @else
                                   
                                    <h4><span class="badge badge-success">100% Completed</span></h4>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('loadadddetails')}}"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Bank Details</td>
                                <td>
                                    @if(empty($profile->account_number))
                                     <h4><span class="badge badge-danger">Incomplete</span></h4>
                                    @else
                                   
                                    <h4><span class="badge badge-success">100% Completed</span></h4>
                                    @endif
                                </td>
                                <td>
                                     <a href="{{route('loadbank')}}"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>Current Course Details</td>
                                <td>
                                     @if(empty($profile->current_inst_name))
                                     <h4><span class="badge badge-danger">Incomplete</span></h4>
                                    @else
                                   
                                    <h4><span class="badge badge-success">100% Completed</span></h4>
                                    @endif
                                </td>
                                <td>
                                    
                                    <a href="{{route('loadcourse')}}"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Past Education Details</td>
                                <td>
                                        
                                    @if($profile->course_type_id=== 1) 
                                    <h4><span class="badge badge-success"> 100 % Completed</span></h4>

                                    @elseif($profile->course_type_id=== 2)

                                        @if(!empty($profile->school_percentage))
                                        <h4><span class="badge badge-success"> 100 % Completed</span></h4>
                                        @else
                                        <h4><span class="badge badge-danger"> InComplete</span></h4>
                                        @endif
                                    
                                    @elseif($profile->course_type_id===3)
                                        @if(!empty($profile->school_percentage))
                                        <h4><span class="badge badge-success"> 100 % Completed</span></h4>

                                        @else
                                        <h4><span class="badge badge-danger"> InComplete</span></h4>

                                        @endif

                                    @elseif($profile->course_type_id===4)
                                        @if(!empty($profile->school_percentage) && !empty($profile->class_12_percentage || $profile->diploma_percentage ))
                                        <h4><span class="badge badge-success"> 100 % Completed</span></h4>
                                        @else
                                        <h4><span class="badge badge-danger"> InComplete</span></h4>
                                        @endif
                                    @elseif($profile->course_type_id===5)

                                        @if(!empty($profile->school_percentage && $profile->grad_percentage) && !empty($profile->class_12_percentage || $profile->diploma_percentage)  )
                                        <h4><span class="badge badge-success"> 100 % Completed</span></h4>
                                        @else
                                        <h4><span class="badge badge-danger"> InComplete</span></h4>
                                        @endif
                                    @elseif($profile->course_type_id===6)
                                        @if(!empty($profile->school_percentage))
                                            <h4><span class="badge badge-success"> 100 % Completed</span></h4>
                                        @else
                                            <h4><span class="badge badge-danger"> InComplete</span></h4>
                                        @endif

                                    @elseif($profile->course_type_id===7)
                                     @if(!empty($profile->school_percentage && $profile->class_12_percentage))
                                            <h4><span class="badge badge-success"> 100 % Completed</span></h4>
                                        @else
                                            <h4><span class="badge badge-danger"> InComplete</span></h4>
                                        @endif
                                    @elseif($profile->course_type_id===8)
                                        @if(!empty($profile->school_percentage && $profile->class_12_percentage))
                                            <h4><span class="badge badge-success"> 100 % Completed</span></h4>
                                        @else
                                            <h4><span class="badge badge-danger"> InComplete</span></h4>
                                        @endif
                                    @else
                                    <h4><span class="badge badge-danger"> InComplete</span></h4>
                                    @endif
                                     
                                     
                                    
                                </td>
                                <td>
                                    
                                    <a href="{{route('loadeducationaldetails')}}"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>    
                       </table>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@else
<div class="card">
    
        <div class="progress">
            <div class="progress-bar progress-bar-success       progress-bar-striped" role="progressbar"
                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:5%">
                5% Completed
            </div>
        </div>
    
</div>

<div id="accordion">
<form method="POST" action="{{route('storepersonal')}} " enctype="multipart/form-data">
            @csrf

             
            
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="ref_code" value="{{auth()->user()->ref_code}}">
            <input type="hidden" name="profile_percentage" value="15">

    <div class="card" id="personal_details">

            
    
        <div class="card-header collapsed card-link " data-toggle="collapse" data-target="#collapseOne" >
                Personal Details 
                <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>

        <div id="collapseOne" class="collapse" data-parent="#accordion">
            <div class="card-body">
        
            <div class="form-group">
                <label class="required" for="fullname">{{ trans('cruds.studentDetail.fields.fullname') }}</label>
                <br>
                <small>Enter Full name as per Aadhar Card</small>
                <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text" name="fullname" id="fullname" value="{{ old('fullname', auth::user()->name) }} " required>
                @if($errors->has('fullname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.fullname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.studentDetail.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email',auth::user()->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.email_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="mobile">{{ trans('cruds.studentDetail.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', auth::user()->mobile) }}" required>
                @if($errors->has('mobile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.studentDetail.fields.gender') }}</label>
                @foreach(App\StudentProfile::GENDER_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', auth::user()->gender) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="gender_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.gender_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label class="required" for="dob">{{ trans('cruds.studentDetail.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob') }}" required>
                @if($errors->has('dob'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.studentDetail.fields.religion') }}</label>
                <select class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" id="religion" required>
                    <option value disabled {{ old('religion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::RELIGION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('religion', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('religion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('religion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.religion_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="caste_id">{{ trans('cruds.studentDetail.fields.caste') }}</label>
                <select class="form-control select2 {{ $errors->has('caste') ? 'is-invalid' : '' }}" name="caste_id" id="caste_id" required>
                    @foreach($castes as $id => $caste)
                        <option value="{{ $id }}" {{ old('caste_id') == $id ? 'selected' : '' }}>{{ $caste }}</option>
                    @endforeach
                </select>
                @if($errors->has('caste'))
                    <div class="invalid-feedback">
                        {{ $errors->first('caste') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.caste_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.studentDetail.fields.marital_status') }}</label>
                <select class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}" name="marital_status" id="marital_status" required>
                    <option value disabled {{ old('marital_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::MARITAL_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('marital_status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('marital_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marital_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.marital_status_helper') }}</span>
            </div>
            <div class="form-group" id="physically_handicapped">
                <label class="required">{{ trans('cruds.studentDetail.fields.handicapped') }}</label>
                @foreach(App\StudentProfile::HANDICAPPED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('handicapped') ? 'is-invalid' : '' }}">
                        <input class="" type="radio" id="handicapped_{{ $key }}" name="handicapped" value="{{ $key }}" {{ old('handicapped', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="" for="handicapped_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('handicapped'))
                    <div class="invalid-feedback">
                        {{ $errors->first('handicapped') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.handicapped_helper') }}</span>
            </div>
            


            <div class="form-group" id="orphan">
                <label class="required">Are You Orphan ?
                </label>
                    @foreach(App\StudentProfile::HANDICAPPED_RADIO as $key => $label)
                        <div class="form-check {{ $errors->has('orphan') ? 'is-invalid' : '' }}">
                            <input class="form-check-input orphan" type="radio" id="orphan_{{ $key }}" name="orphan" value="{{ $key }}" {{ old('handicapped','') === (string) $key ? 'checked' : '' }} required>
                            <label class="form-check-label" for="orphan_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('handicapped'))
                        <div class="invalid-feedback">
                            {{ $errors->first('handicapped') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.handicapped_helper') }}
                    </span>
            </div>








            <div class="form-group" >
                <label>{{ trans('cruds.studentDetail.fields.single_parent') }}</label>
                <br>
                <strong><small>Please select Yes if anyone from your parent(Mother/Father) is not alive</small></strong>
                @foreach(App\StudentProfile::SINGLE_PARENT_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('single_parent') ? 'is-invalid' : '' }}">
                        <input class="form-check-input singleparent" type="radio" id="single_parent_{{ $key }}" name="single_parent" value="{{ $key }}" {{ old('single_parent', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="single_parent_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('single_parent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('single_parent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.single_parent_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="aadharnumber">{{ trans('cruds.studentDetail.fields.aadharnumber') }}</label>
                <input class="form-control {{ $errors->has('aadharnumber') ? 'is-invalid' : '' }}" type="number" name="aadharnumber" id="aadharnumber" value="{{ old('aadharnumber', '') }}" pattern="[0-9]{12}" required>
                @if($errors->has('aadharnumber'))
                    <div class="invalid-feedback">
                        {{ $errors->first('aadharnumber') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.aadharnumber_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save Details
                </button>
            </div>

          




        </div>

    </div>
       
    </div>            




    <div class="card" id="family_details">
        <div class="card-header collapsed card-link" data-toggle="collapse" data-target="#collapseTwo">
            Family Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>

        <div id="collapseTwo" class="collapse"  data-parent="#accordion"> 
            <div class="card-body">


            <div class="form-group">
                <label class="required" for="father_name">{{ trans('cruds.studentDetail.fields.father_name') }}</label>
                <input class="form-control {{ $errors->has('father_name') ? 'is-invalid' : '' }}" type="text" name="father_name" id="father_name" value="{{ old('father_name', '') }}">
                @if($errors->has('father_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('father_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.father_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.studentDetail.fields.father_edu') }}</label>
                <select class="form-control {{ $errors->has('father_edu') ? 'is-invalid' : '' }}" name="father_edu" id="father_edu">
                    <option value disabled {{ old('father_edu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::FATHER_EDU_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('father_edu', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('father_edu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('father_edu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.father_edu_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="father_occupation">{{ trans('cruds.studentDetail.fields.father_occupation') }}</label>
                <input class="form-control {{ $errors->has('father_occupation') ? 'is-invalid' : '' }}" type="text" name="father_occupation" id="father_occupation" value="{{ old('father_occupation', '') }}" >
                @if($errors->has('father_occupation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('father_occupation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.father_occupation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mother_name">{{ trans('cruds.studentDetail.fields.mother_name') }}</label>
                <input class="form-control {{ $errors->has('mother_name') ? 'is-invalid' : '' }}" type="text" name="mother_name" id="mother_name" value="{{ old('mother_name', '') }}" >
                @if($errors->has('mother_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mother_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.mother_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.studentDetail.fields.mother_edu') }}</label>
                <select class="form-control {{ $errors->has('mother_edu') ? 'is-invalid' : '' }}" name="mother_edu" id="mother_edu">
                    <option value disabled {{ old('mother_edu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\StudentProfile::MOTHER_EDU_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('mother_edu', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('mother_edu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mother_edu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.mother_edu_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label class="required" for="parents_mobile">{{ trans('cruds.studentDetail.fields.parents_mobile') }}</label>
                <input class="form-control {{ $errors->has('parents_mobile') ? 'is-invalid' : '' }}" type="text" name="parents_mobile" id="parents_mobile" value="{{ old('parents_mobile', '') }}" >
                @if($errors->has('parents_mobile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parents_mobile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.parents_mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="annual_income">{{ trans('cruds.studentDetail.fields.annual_income') }}</label>
                <input class="form-control {{ $errors->has('annual_income') ? 'is-invalid' : '' }}" type="number" name="annual_income" id="annual_income" value="{{ old('annual_income', '') }}"  >
                @if($errors->has('annual_income'))
                    <div class="invalid-feedback">
                        {{ $errors->first('annual_income') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.annual_income_helper') }}</span>
            </div>
        </div>

        </div>    
        
    </div>

    <div class="card" id="communication_details">
        <div class="card-header collapsed card-link" data-toggle="collapse" data-target="#collapseThree">
            Communication Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>


        <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body">

            <div class="form-group">
                <label class="required" for="current_add">{{ trans('cruds.studentDetail.fields.current_add') }}</label>
                <input class="form-control {{ $errors->has('current_add') ? 'is-invalid' : '' }}" type="text" name="current_add" id="current_add" value="{{ old('current_add', '') }}" >
                @if($errors->has('current_add'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_add') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.current_add_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="current_state">{{ trans('cruds.studentDetail.fields.current_state') }}</label>
                <input class="form-control {{ $errors->has('current_state') ? 'is-invalid' : '' }}" type="text" name="current_state" id="current_state" value="{{ old('current_state', '') }}" >
                @if($errors->has('current_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.current_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="current_city">{{ trans('cruds.studentDetail.fields.current_city') }}</label>
                <input class="form-control {{ $errors->has('current_city') ? 'is-invalid' : '' }}" type="text" name="current_city" id="current_city" value="{{ old('current_city', '') }}" >
                @if($errors->has('current_city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.current_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="pincode">{{ trans('cruds.studentDetail.fields.pincode') }}</label>
                <input class="form-control {{ $errors->has('pincode') ? 'is-invalid' : '' }}" type="number" name="pincode" id="pincode" value="{{ old('pincode', '') }}"  >
                @if($errors->has('pincode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pincode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.pincode_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="permanent_add">{{ trans('cruds.studentDetail.fields.permanent_add') }}</label>
                <input class="form-control {{ $errors->has('permanent_add') ? 'is-invalid' : '' }}" type="text" name="permanent_add" id="permanent_add" value="{{ old('permanent_add', '') }}" >
                @if($errors->has('permanent_add'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_add') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_add_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="permanent_state">{{ trans('cruds.studentDetail.fields.permanent_state') }}</label>
                <input class="form-control {{ $errors->has('permanent_state') ? 'is-invalid' : '' }}" type="text" name="permanent_state" id="permanent_state" value="{{ old('permanent_state', '') }}" >
                @if($errors->has('permanent_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="permanent_city">{{ trans('cruds.studentDetail.fields.permanent_city') }}</label>
                <input class="form-control {{ $errors->has('permanent_city') ? 'is-invalid' : '' }}" type="text" name="permanent_city" id="permanent_city" value="{{ old('permanent_city', '') }}" >
                @if($errors->has('permanent_city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="permanent_pincode">{{ trans('cruds.studentDetail.fields.permanent_pincode') }}</label>
                <input class="form-control {{ $errors->has('permanent_pincode') ? 'is-invalid' : '' }}" type="number" name="permanent_pincode" id="permanent_pincode" value="{{ old('permanent_pincode', '') }}"  >
                @if($errors->has('permanent_pincode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_pincode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_pincode_helper') }}</span>
            </div>
            
        </div>
        </div>

        
    </div>
    <div class="card" id="bank_details">
        <div class="card-header collapsed card-link" data-toggle="collapse" data-target="#collapseFour">
            Bank Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>

        <div id="collapseFour" class="collapse" data-parent="#accordion">
            <div class="card-body">

            <div class="form-group">
                <label class="required" for="account_number">{{ trans('cruds.studentDetail.fields.account_number') }}</label>
                <input class="form-control {{ $errors->has('account_number') ? 'is-invalid' : '' }}" type="number" name="account_number" id="account_number" value="{{ old('account_number', '') }}"  >
                @if($errors->has('account_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('account_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.account_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="bank_ifsc">{{ trans('cruds.studentDetail.fields.bank_ifsc') }}</label>
                <input class="form-control {{ $errors->has('bank_ifsc') ? 'is-invalid' : '' }}" type="text" name="bank_ifsc" id="bank_ifsc" value="{{ old('bank_ifsc', '') }}" >
                @if($errors->has('bank_ifsc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bank_ifsc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.bank_ifsc_helper') }}</span>
            </div>
        </div>

        </div>
    </div>


    <div class="card" id="course_details">
        <div class="card-header collapsed card-link"  data-toggle="collapse" data-target="#collapseFive">
            Current Course Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>

        <div id="collapseFive" class="collapse" data-parent="#accordion">
            <div class="card-body">
                
            
            <div class="form-group">
                <label for="course_type_id">Course Type</label>
                <select name="course_type_id" class="form-control select2" id="course_type_id"  >
                    @foreach($course_types as $id => $course_type)
                        <option value="{{$id}}">{{$course_type}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="course_name_id">Course Name</label>
                <select name="course_name_id" class="form-control select2" id="course_name_id" >
                    <option value="">Please select</option>

                </select>
            </div>
            <div class="form-group" id="current_year" style="display: none;">
                <label  for="current_year">Current Year</label>
                <select name="current_year" id="current_year" class="form-control select2">
                    <option value="First Year">First Year</option>
                    <option value="Second Year">Second Year</option>
                    <option value="Third Year">Third Year</option>
                    <option value="Fourth Year">Fourth Year</option>
                    <option value="Fifth Year">Fifth Year</option>
                </select>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.studentDetail.fields.course_pattern') }}</label>
                @foreach(App\StudentProfile::COURSE_PATTERN_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('course_pattern') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="course_pattern_{{ $key }}" name="course_pattern" value="{{ $key }}" {{ old('course_pattern', '') === (string) $key ? 'checked' : '' }} >
                        <label class="form-check-label" for="course_pattern_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('course_pattern'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_pattern') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.course_pattern_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="current_inst_name">{{ trans('cruds.studentDetail.fields.current_inst_name') }}</label>
                <input class="form-control {{ $errors->has('current_inst_name') ? 'is-invalid' : '' }}" type="text" name="current_inst_name" id="current_inst_name" value="{{ old('current_inst_name', '') }}" >
                @if($errors->has('current_inst_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_inst_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.current_inst_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="inst_address">{{ trans('cruds.studentDetail.fields.inst_address') }}</label>
                <input class="form-control {{ $errors->has('inst_address') ? 'is-invalid' : '' }}" type="text" name="inst_address" id="inst_address" value="{{ old('inst_address', '') }}" >
                @if($errors->has('inst_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('inst_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.inst_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_start">{{ trans('cruds.studentDetail.fields.course_start') }}</label>
                <input class="form-control date {{ $errors->has('course_start') ? 'is-invalid' : '' }}" type="text" name="course_start" id="course_start" value="{{ old('course_start') }}" >
                @if($errors->has('course_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.course_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tution_fees">{{ trans('cruds.studentDetail.fields.tution_fees') }}</label>
                <input class="form-control {{ $errors->has('tution_fees') ? 'is-invalid' : '' }}" type="number" name="tution_fees" id="tution_fees" value="{{ old('tution_fees', '') }}"  >
                @if($errors->has('tution_fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tution_fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.tution_fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="non_tution_fees">{{ trans('cruds.studentDetail.fields.non_tution_fees') }}</label>
                <input class="form-control {{ $errors->has('non_tution_fees') ? 'is-invalid' : '' }}" type="number" name="non_tution_fees" id="non_tution_fees" value="{{ old('non_tution_fees', '') }}"  >
                @if($errors->has('non_tution_fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('non_tution_fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.non_tution_fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="hostel_fees">{{ trans('cruds.studentDetail.fields.hostel_fees') }}</label>
                <input class="form-control {{ $errors->has('hostel_fees') ? 'is-invalid' : '' }}" type="number" name="hostel_fees" id="hostel_fees" value="{{ old('hostel_fees', '') }}" >
                @if($errors->has('hostel_fees'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hostel_fees') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.hostel_fees_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.studentDetail.fields.you_other_scholarship') }}</label>
                @foreach(App\StudentProfile::YOU_OTHER_SCHOLARSHIP_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('you_other_scholarship') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="you_other_scholarship_{{ $key }}" name="you_other_scholarship" value="{{ $key }}" {{ old('you_other_scholarship', '') === (string) $key ? 'checked' : '' }} >
                        <label class="form-check-label" for="you_other_scholarship_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('you_other_scholarship'))
                    <div class="invalid-feedback">
                        {{ $errors->first('you_other_scholarship') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.you_other_scholarship_helper') }}</span>
            </div>
            <div class="form-group">
                <label>Scoring System</label>
                <input type="radio" name="scoring" value="marks" id="marks">
                Marks
                <input type="radio" name="scoring" value="cgpa" id="cgpa"> CGPA
            </div>
            <div class="form-group">
                <label  for="previous_marks_obtained" id="previous_obtained">Previous Semester/Previous Year Marks Obtained</label>
                <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="previous_marks_obtained" id="previous_marks_obtained" value="{{ old('previous_marks_obtained', '') }}"   >
                @if($errors->has('previous_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="previous_marks_total" id="previous_total_obtained">Previous Semester/Previous Year  Out of Total Marks </label>
                <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="number" name="previous_marks_total" id="previous_marks_total" value="{{ old('previous_marks_total', '') }}" >
                @if($errors->has('previous_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_obtained" id="cgpa_obtained" style="display: none;">Previous Semester/Previous Year CGPA Obtained</label>
                <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_previous_marks_obtained" id="cgpa_previous_marks_obtained" value="{{ old('previous_marks_obtained', '') }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('previous_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_total" id="cgpa_total" style="display: none;">Previous Semester/Previous Year  Out of Total CGPA </label>
                <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_previous_marks_total" id="cgpa_previous_marks_total"  value="10" style="display: none;" step="0.01" min="0" max="10" placeholder="10">
                @if($errors->has('cgpa_previous_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_previous_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <input type="text" name="previous_percentage" value=" " id="previous_percentage" class="form-control" readonly>

            </div>
            
        </div>
    </div>   
    </div>


    <div class="card " id="class10_details" style="display: none;">
        <div class="card-header collapsed card-link" data-toggle="collapse" data-target="#collapseSix">
            Class 10 Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>

        <div id="collapseSix" class="collapse" data-parent="#accordion"> 
            <div class="card-body">

            <div class="form-group ">
                <label  for="class_10_school_name">{{ trans('cruds.studentDetail.fields.class_10_school_name') }}</label>
                <input class="form-control {{ $errors->has('class_10_school_name') ? 'is-invalid' : '' }}" type="text" name="class_10_school_name" id="class_10_school_name" value="{{ old('class_10_school_name', '') }}" >
                @if($errors->has('class_10_school_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_10_school_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_10_school_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="class_10_state">{{ trans('cruds.studentDetail.fields.class_10_state') }}</label>
                <input class="form-control {{ $errors->has('class_10_state') ? 'is-invalid' : '' }}" type="text" name="class_10_state" id="class_10_state" value="{{ old('class_10_state', '') }}" >
                @if($errors->has('class_10_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_10_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_10_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="school_passing">{{ trans('cruds.studentDetail.fields.school_passing') }}</label>
                <input class="form-control date {{ $errors->has('school_passing') ? 'is-invalid' : '' }}" type="text" name="school_passing" id="school_passing" value="{{ old('school_passing') }}" >
                @if($errors->has('school_passing'))
                    <div class="invalid-feedback">
                        {{ $errors->first('school_passing') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_passing_helper') }}</span>
            </div>
            <div class="form-group">
                <label>Scoring System</label>
                <input type="radio" name="ssc_scoring" value="marks" id="ssc_marks">
                Marks
                <input type="radio" name="ssc_scoring" value="cgpa" id="ssc_cgpa"> CGPA
            </div>
            <div class="form-group">
                <label  for="school_marks_obtained" id="school_obtained">{{ trans('cruds.studentDetail.fields.school_marks_obtained') }}</label>
                <input class="form-control {{ $errors->has('school_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="school_marks_obtained" id="school_marks_obtained" value="{{ old('school_marks_obtained', '') }}"   >
                @if($errors->has('school_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('school_marks_obtained') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_obtained_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="school_marks_total" id="school_total">{{ trans('cruds.studentDetail.fields.school_marks_total') }}</label>
                <input class="form-control {{ $errors->has('school_marks_total') ? 'is-invalid' : '' }}" type="number" name="school_marks_total" id="school_marks_total" value="{{ old('school_marks_total', '') }}" >
                @if($errors->has('school_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('school_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="class10_obtained" id="school_cgpa_obtained" style="display: none;">Class 10 CGPA Obtained</label>
                <input class="form-control {{ $errors->has('cgpa_school_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_school_marks_obtained" id="cgpa_school_marks_obtained" value="{{ old('cgpa_school_marks_obtained', '') }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('cgpa_school_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_school_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="class10_total" id="school_cgpa_total" style="display: none;">Class 10 Total CGPA </label>
                <input class="form-control {{ $errors->has('cgpa_school_marks_total ') ? 'is-invalid' : '' }}" type="text" name="cgpa_school_marks_total" id="cgpa_school_marks_total" value="10" style="display: none;" step="0.01" min="0" max="10" placeholder="10">
                @if($errors->has('cgpa_school_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_school_marks_total  ') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                <input type="text" name="school_percentage" value=" " id="ssc_percentage" class="form-control" readonly>

            </div>
            
            



        </div>

        </div>
    </div>



    <div class="card" id="class12_details"  style="display: none;">
        <div class="card-header collapsed card-link" data-toggle="collapse" data-target="#collapseSeven">
            Class 12 Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>
        <div id="collapseSeven" class="collapse"  data-parent="#accordion">
            <div class="card-body">

            <div class="form-group ">
                <label for="class_12_clg_name">{{ trans('cruds.studentDetail.fields.class_12_clg_name') }}</label>
                <input class="form-control {{ $errors->has('class_12_clg_name') ? 'is-invalid' : '' }}" type="text" name="class_12_clg_name" id="class_12_clg_name" value="{{ old('class_12_clg_name', '') }}">
                @if($errors->has('class_12_clg_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_clg_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_clg_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="class_12_state">{{ trans('cruds.studentDetail.fields.class_12_state') }}</label>
                <input class="form-control {{ $errors->has('class_12_state') ? 'is-invalid' : '' }}" type="text" name="class_12_state" id="class_12_state" value="{{ old('class_12_state', '') }}">
                @if($errors->has('class_12_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="class_12_passing_yeat">{{ trans('cruds.studentDetail.fields.class_12_passing_yeat') }}</label>
                <input class="form-control date {{ $errors->has('class_12_passing_yeat') ? 'is-invalid' : '' }}" type="text" name="class_12_passing_yeat" id="class_12_passing_yeat" value="{{ old('class_12_passing_yeat') }}">
                @if($errors->has('class_12_passing_yeat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_passing_yeat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_passing_yeat_helper') }}</span>
            </div>
            <div class="form-group">
                <label>Scoring System</label>
                <input type="radio" name="hsc_scoring" value="marks" id="hsc_marks">
                Marks
                <input type="radio" name="hsc_scoring" value="cgpa" id="hsc_cgpa"> CGPA
            </div>
            <div class="form-group">
                <label for="class_12_marks_obtained" id="hsc_obtained">{{ trans('cruds.studentDetail.fields.class_12_marks_obtained') }}</label>
                <input class="form-control {{ $errors->has('class_12_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="class_12_marks_obtained" id="class_12_marks_obtained" value="{{ old('class_12_marks_obtained', '') }}" >
                @if($errors->has('class_12_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_marks_obtained') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_marks_obtained_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="class_12_out_of_total_marks" id="hsc_total">{{ trans('cruds.studentDetail.fields.class_12_out_of_total_marks') }}</label>
                <input class="form-control {{ $errors->has('class_12_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="class_12_out_of_total_marks" id="class_12_out_of_total_marks" value="{{ old('class_12_out_of_total_marks', '') }}" >
                @if($errors->has('class_12_out_of_total_marks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_12_out_of_total_marks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.class_12_out_of_total_marks_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_obtained" id="hsc_cgpa_obtained" style="display: none;">Class 12 CGPA Obtained</label>
                <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_class_12_marks_obtained" id="cgpa_class_12_marks_obtained" value="{{ old('previous_marks_obtained', '') }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('previous_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_total" id="hsc_cgpa_total" style="display: none;">Class 12 Total CGPA </label>
                <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_class_12_marks_total" id="cgpa_class_12_marks_total"  value="10" style="display: none;" step="0.01" min="0" max="10" placeholder="10">
                @if($errors->has('cgpa_previous_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_previous_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            
            <div class="form-control">
                <input type="text" name="class_12_percentage" id="hsc_percentage" class="form-control" readonly>
                    
            </div>
            
        </div>

        </div>
    </div>

    <div class="card " id="diploma_details" style="display: none;">
        <div class="card-header collapsed card-link" data-toggle="collapse"  data-target="#collapseEight">
            Diploma Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>

        <div id="collapseEight" class="collapse" data-parent="#accordion"> 
            <div class="card-body">

            <div class="form-group ">
                <label for="diploma_clg_name">{{ trans('cruds.studentDetail.fields.diploma_clg_name') }}</label>
                <input class="form-control {{ $errors->has('diploma_clg_name') ? 'is-invalid' : '' }}" type="text" name="diploma_clg_name" id="diploma_clg_name" value="{{ old('diploma_clg_name', '') }}">
                @if($errors->has('diploma_clg_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_clg_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_clg_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="diploma_state">{{ trans('cruds.studentDetail.fields.diploma_state') }}</label>
                <input class="form-control {{ $errors->has('diploma_state') ? 'is-invalid' : '' }}" type="text" name="diploma_state" id="diploma_state" value="{{ old('diploma_state', '') }}">
                @if($errors->has('diploma_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="diploma_passing_year">{{ trans('cruds.studentDetail.fields.diploma_passing_year') }}</label>
                <input class="form-control date {{ $errors->has('diploma_passing_year') ? 'is-invalid' : '' }}" type="text" name="diploma_passing_year" id="diploma_passing_year" value="{{ old('diploma_passing_year') }}">
                @if($errors->has('diploma_passing_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_passing_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_passing_year_helper') }}</span>
            </div>
            <div class="form-group">
                <label>Scoring System</label>
                <input type="radio" name="diploma_scoring" value="marks" id="diploma_marks">
                Marks
                <input type="radio" name="diploma_scoring" value="cgpa" id="diploma_cgpa"> CGPA
            </div>

            <div class="form-group">
                <label for="diploma_total_marks_obtained" id="diploma_obtained">{{ trans('cruds.studentDetail.fields.diploma_total_marks_obtained') }}</label>
                <input class="form-control {{ $errors->has('diploma_total_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="diploma_total_marks_obtained" id="diploma_total_marks_obtained" value="{{ old('diploma_total_marks_obtained', '') }}" >
                @if($errors->has('diploma_total_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_total_marks_obtained') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_total_marks_obtained_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="diploma_out_of_total_marks" id="diploma_total">{{ trans('cruds.studentDetail.fields.diploma_out_of_total_marks') }}</label>
                <input class="form-control {{ $errors->has('diploma_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="diploma_out_of_total_marks" id="diploma_out_of_total_marks" value="{{ old('diploma_out_of_total_marks', '') }}" >
                @if($errors->has('diploma_out_of_total_marks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diploma_out_of_total_marks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.diploma_out_of_total_marks_helper') }}</span>
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_obtained" id="diploma_cgpa_obtained" style="display: none;"> CGPA Obtained</label>
                <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_diploma_marks_obtained" id="cgpa_diploma_marks_obtained" value="{{ old('previous_marks_obtained', '') }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('previous_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_total" id="diploma_cgpa_total" style="display: none;">Total CGPA </label>
                <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_diploma_marks_total" id="cgpa_diploma_marks_total"  value="10" style="display: none;" step="0.01" min="0" max="10" placeholder="10">
                @if($errors->has('cgpa_previous_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_previous_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
            <input type="text" name="diploma_percentage" id="diploma_percentage"  class="form-control" readonly>    
            </div>
            
    </div>
        </div>

        
    </div>


    <div class="card" id="graduation_details"  style="display: none;">
        <div class="card-header collapsed card-link" data-toggle="collapse" data-target="#collapseNine">
            Graduation Details
            <i class="fa fa-plus float-right" aria-hidden="true"></i>
        </div>

        <div id="collapseNine"  class="collapse" data-parent="#accordion">
            <div class="card-body">

                <div class="form-group ">
                    <label for="grad_clg_name">{{ trans('cruds.studentDetail.fields.grad_clg_name') }}</label>
                    <input class="form-control {{ $errors->has('grad_clg_name') ? 'is-invalid' : '' }}" type="text" name="grad_clg_name" id="grad_clg_name" value="{{ old('grad_clg_name', '') }}">
                    @if($errors->has('grad_clg_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_clg_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_clg_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="grad_state">{{ trans('cruds.studentDetail.fields.grad_state') }}</label>
                    <input class="form-control {{ $errors->has('grad_state') ? 'is-invalid' : '' }}" type="text" name="grad_state" id="grad_state" value="{{ old('grad_state', '') }}">
                    @if($errors->has('grad_state'))
                        <div class="invalid-feedback">
                        {{ $errors->first('grad_state') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_state_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="grad_passing_year">{{ trans('cruds.studentDetail.fields.grad_passing_year') }}</label>
                    <input class="form-control date {{ $errors->has('grad_passing_year') ? 'is-invalid' : '' }}" type="text" name="grad_passing_year" id="grad_passing_year" value="{{ old('grad_passing_year') }}">
                    @if($errors->has('grad_passing_year'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_passing_year') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_passing_year_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>Scoring System</label>
                    <input type="radio" name="grad_scoring" value="marks" id="grad_marks">
                    Marks
                    <input type="radio" name="grad_scoring" value="cgpa" id="grad_cgpa"> CGPA
                </div>
                <div class="form-group">
                    <label for="grad_total_marks" id="grad_obtained">{{ trans('cruds.studentDetail.fields.grad_total_marks')   }}</label>
                    <input class="form-control {{ $errors->has('grad_total_marks') ? 'is-invalid' : '' }}"  type="number" name="grad_total_marks" id="grad_total_marks" value="{{ old('grad_total_marks', '') }}" >
                    @if($errors->has('grad_total_marks'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_total_marks') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_total_marks_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="grad_out_of_total_marks" id="grad_total">{{ trans('cruds.studentDetail.fields.grad_out_of_total_marks') }}</label>
                    <input class="form-control {{ $errors->has('grad_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="grad_out_of_total_marks" id="grad_out_of_total_marks"     value="{{ old('grad_out_of_total_marks', '') }}" >
                    @if($errors->has('grad_out_of_total_marks'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grad_out_of_total_marks') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.grad_out_of_total_marks_helper') }}</span>
                </div>
                <div class="form-group">
                <label  for="cgpa_previous_marks_obtained" id="grad_cgpa_obtained" style="display: none;"> CGPA Obtained</label>
                <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_grad_marks_obtained" id="cgpa_grad_marks_obtained" value="{{ old('previous_marks_obtained', '') }}" style="display: none;" step="0.01" min="0" max="10"  >
                @if($errors->has('previous_marks_obtained'))
                    <div class="invalid-feedback">
                        {{ $errors->first('previous_marks_obtained') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label  for="cgpa_previous_marks_total" id="grad_cgpa_total" style="display: none;">Total CGPA </label>
                <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_grad_marks_total" id="cgpa_grad_marks_total"  value="10" style="display: none;" step="0.01" min="0" max="10" placeholder="10">
                @if($errors->has('cgpa_previous_marks_total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cgpa_previous_marks_total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.studentDetail.fields.school_marks_total_helper') }}</span>
            </div>
            <div class="form-group">
                    <input type="text" name="grad_percentage" id="grad_percentage" class="form-group " readonly>    
            </div>
                
            </div>
        </div>

    </div>
    
       <div class="form-group">
            <button class="btn btn-danger" type="submit">
            Submit Details
            </button>
        </div>


    </div>     





 
</form>

    
</div>    


@endif



@endsection

@section('scripts')
<script type="text/javascript">
     $("#course_type_id").change(function(){
            $.ajax({
                url: "{{ route('getcourse') }}?course_type_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#course_name_id').html(data.html);
                }
            });
        });

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
        
        
        

        
    }
    function ssc_cgpa()
    {
        
        
        $('#cgpa_school_marks_total').show();
        $('#school_cgpa_obtained').show();
        $('#cgpa_school_marks_obtained ').show();
        $('#school_cgpa_total').show();
        $('#school_total').hide();
        $('#school_marks_obtained').hide();
        $('#school_marks_total').hide();
        $('#school_obtained').hide();
        
        
        
        
        
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
        $('#cgpa_diploma_marks_obtained ').hide();
        
        
        

        
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

    
</script>
<script type="text/javascript">
        function fun_showdetails()
{
  var select_status=$("#course_type_id").val();
  
  if (select_status=='2') {
    $('#current_year').hide();
    $('#class10_details').show();
    $('#class12_details').hide();
    $('#diploma_details').hide();
    $('#graduation_details').hide();
    

    
    

  }
  else if (select_status=='3') {
    $('#class10_details').show();
    $('#class12_details').show();
    $('#diploma_details').hide();
    $('#graduation_details').hide();
    $('#current_year').show();

    
   
    

  }
  else if (select_status=='4') {
     $('#class10_details').show();
     $('#class12_details').show();
     $('#diploma_details').show();
     $('#graduation_details').hide();
     $('#current_year').show();

    
    

  }
  else if (select_status=='5') {
    $('#class10_details').show();
    $('#class12_details').show();
    $('#diploma_details').show();
    $('#graduation_details').show();
    $('#current_year').show();

     $('#grad_doc').show();
  }
  else if (select_status=='6') {
    $('#class10_details').show();
    $('#class12_details').show();
    $('#diploma_details').hide();
    $('#graduation_details').hide();
    $('#current_year').show();

    
  }
  else if (select_status=='7') {
    $('#class10_details').show();
    $('#class12_details').show();
    $('#diploma_details').hide();
    $('#graduation_details').hide();
    $('#current_year').show();

    
  }
  else if (select_status=='8') {
    $('#class10_details').show();
    $('#class12_details').show();
    $('#diploma_details').hide();
    $('#graduation_details').hide();
    $('#current_year').hide();

    
  }
  else 
  {
    $('#current_year').hide();
    $('#class10_details').hide();
    $('#class12_details').hide();
    $('#diploma_details').hide();
    $('#graduation_details').hide();


  }
}

$("#course_type_id").on("change",fun_showdetails);

</script>


@endsection

 
