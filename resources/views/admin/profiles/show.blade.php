@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="form-group" class="row">
                
                <a class="btn btn-xs btn-primary" href="{{ URL::previous() }}">
                    Back
                </a>
                 
                 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">
  Add Scholarship Status
</button>

<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal1">
  Add Profile Remarks
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Profile Remarks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('storeremarks',$profile->id)}}" enctype="multipart/form-data">
            @csrf
        
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="" class="form-control" value="{{$profile->fullname}}" readonly>
        </div>
        <div class="form-group">
                <label class="required" for="profile_remarks">Profile Remarks</label>
                <textarea class="form-control ckeditor {{ $errors->has('profile_remarks') ? 'is-invalid' : '' }}" name="profile_remarks" id="profile_remarks">{!! old('profile_remarks',$profile->profile_remarks) !!}</textarea>
                

        </div>
        <select class="form-control select2 {{ $errors->has('courses') ? 'is-invalid' : '' }}" name="profile_remarks[]" id="profile_remarks" multiple  required>
                    
                    <option value="Personal Details Incomplete">Personal Details Incomplete</option>
                    <option value="Family Details Incomplete">Family Details Incomplete</option>
                    <option value="Current Details Incomplete">Current Details Incomplete</option>
                    <option value="Educational Details Incomplete">Educational Details Incomplete</option>
                    <option value="Communication Details Incomplete">Communication Details Incomplete</option>
                    <option value="Bank Details Incomplete">Bank Details Incomplete</option>
                    <option value="Photo Upload Pending">Photo Upload Pending</option>
                    <option value="Aadhar Card Upload Pending">Aadhar Card Upload Pending</option>
                    <option value="Death Certificate Upload Pending">Death Certificate Upload Pending</option>
                    <option value="Disability Certificate Upload Pending">Disability Certificate Upload Pending</option>
                    <option value="Income Certificate Upload Pending">Income Certificate Upload Pending</option>
                    <option value="Bonafide Certificate Upload Pending">Bonafide Certificate Upload Pending</option>
                    <option value="Fees Reciept Upload Pending">Latest Fees Reciept Upload Pending</option>
                    <option value="Class 10 Result Upload Pending">Class 10 Result Upload Pending</option>
                    <option value="Class 12 Result Upload Pending">Class 12 Result Upload Pending</option>
                    <option value="Diploma Result Upload Pending">Diploma Result Upload Pending</option>
                    <option value="Previous Result Upload Pending">Previous Result Upload Pending</option>
                    <option value="Address Proof Upload Pending">Address Proof Upload Pending</option>
                    <option value="Bank Passbook Upload Pending">Bank Passbook Upload Pending</option>
                    <option value="All Details Incomplete">All Details Incomplete</option>
                    <option value="All Documents Upload Pending">All Documents Upload Pending</option>
                    <option value="Profile Upto date">Profile Upto Date</option>


                    
                </select>
        
        
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>







<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('storestatus')}}" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
            <label>User ID</label>
            <input type="text" name="user_id" value="{{$profile->user_id}}" class="form-control" readonly >        
        </div>
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="" class="form-control" value="{{$profile->fullname}}" readonly>
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
                    <option value="Application Submitted">Application Submitted</option>

                    <option value="Shortlised">Shortlised</option>
                    <option value="Awarded">Awarded</option>
                    <option value="Fund Disbursed">Fund Disbursed</option>
                    <option value="Better Luck Next Time">Better Luck Next Time</option>
                </select>
        </div>
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
                 <a class="btn btn-xs btn-warning" href="https://wa.me/91{{$profile->mobile}}?text=Hello%20{{$profile->fullname}}.%20Welcome%20to%20FORSTU" target="__blank">
                Send Welcome Whatsapp Message
                </a>
                <a class="btn btn-xs btn-success" href="{{ route('paid',$profile->id)}}">
                Mark as Paid
                 </a>
                 
                 <a class="btn btn-xs btn-success" href="{{route('profile_completed',$profile->id)}}">
                    Mark as Vidyasaarthi Profile Upto Date
                 </a>
                 
                 <a class="btn btn-xs btn-success" href="{{ route('kyc_completed',$profile->id)}}">
                    Mark KYC Completed
                 </a>
                  <a class="btn btn-xs btn-success" href="{{ route('sfcstu',$profile->id)}}">
                    Mark SFC Student
                 </a>
                 <a class="btn btn-xs btn-success" href="{{ route('uptodate',$profile->id)}}">
                    Mark Profile Upto Date
                 </a>
                 <a class="btn btn-xs btn-success" href="{{ route('activeprofile',$profile->id)}}">
                    Mark Profile as Active
                 </a>
                 <a class="btn btn-xs btn-success" href="{{ route('inactiveprofile',$profile->id)}}">
                    Mark Profile as InActive
                 </a>
                                               
                
                 <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#admin">Administrative Details</button>
                 <div class="modal fade" id="admin" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Administrative Details</h2>
                                    <hr>
                                    
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="required" for="account_number">FORSTU email Address</label>
                                            <input class="form-control " type="text" name="forstu_email" id="forstu_email" value="{{ old('forstu_email', $profile->forstu_email) }}"   >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="required" for="account_number">FORSTU email Password</label>
                                            <input class="form-control " type="text" name="forstu_email_password" id="forstu_email_password" value="{{ old('forstu_email_password', $profile->forstu_email_password) }}"   >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="required" for="account_number">FORSTU Invoice Number</label>
                                            <input class="form-control " type="text" name="invoice_number" id="invoice_number" value="{{ old('invoice_number', $profile->invoice_number) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="required" for="reg_date">Registration Number</label>
                                            <input class="form-control " type="date" name="reg_date" id="reg_date" value="{{ old('reg_date', $profile->reg_date) }}"   >
                                        </div>

                                        
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label class="required" for="account_number">Buddy4Study Email</label>
                                            <input class="form-control " type="text" name="buddy4study_email" id="buddy4study_email" value="{{ old('buddy4study_email', $profile->buddy4study_email) }}"   >
                                        </div>
                                        <div class="col-md-5">
                                            <label class="required" for="account_number">Buddy4Study Password</label>
                                            <input class="form-control " type="text" name="buddy4study_password" id="buddy4study_password" value="{{ old('buddy4study_password', $profile->buddy4study_password) }}"   >
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label class="required" for="account_number">Vidyasaarthi Email</label>
                                            <input class="form-control " type="text" name="vidyasaarthi_email" id="vidyasaarthi_email" value="{{ old('vidyasaarthi_email', $profile->vidyasaarthi_email) }}"   >
                                        </div>
                                        <div class="col-md-5">
                                            <label class="required" for="account_number">Vidyasaarthi Password</label>
                                            <input class="form-control " type="text" name="vidyasaarthi_password" id="vidyasaarthi_password" value="{{ old('vidyasaarthi_password', $profile->vidyasaarthi_password) }}"   >
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
    </div>

    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
           <div class="card-header">
               Student Details
           </div>
           <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                       <strong>Student Type :</strong> 
                       
                       @if($profile->paid==='YES')
                        PAID
                       @elseif($profile->paid==='NO')
                        Free Plan Activated
                       @else
                        No Plan Activated
                       @endif
                    </div>
                    
                    <div class="col-md-3">
                        <strong>Vidyasaarthi Profile Status</strong> 
                        {{$profile->vidyasaarthi_profile_status}}

                    </div>
                    
                    <div class="col-md-3">
                        <strong>KYC Completed</strong> 
                        {{$profile->kyc_completed}}
                    </div>
                    <div class="col-md-3">
                        <strong>Profile Upto Date</strong> 
                        {{$profile->profile_upto_date ?? ''}}
                    </div>
                </div>           
           </div>
       </div>
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border: none;">
           <div class="card-header">
               Student Remarks
           </div>
           <div class="card-body">
                <div class="row">
                    
                    {!! $profile->profile_remarks !!}
                </div>           
           </div>
    </div>
    

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Personal Details 
                    
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#personal" style="float: right;">Edit</button>
                    
                    <div class="modal fade" id="personal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Personal Details</h2>
                                    <hr>
                                    
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Full Name:</label> 
                                            <input type="text" name="fullname" value="{{ old('fullname', $profile->fullname) }}" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <label>Email:</label> 
                                            <input type="text" name="email" value="{{ old('fullname', $profile->email) }}" class="form-control" >
                                        </div>

                                        <div class="col-md-3">
                                           <label>Mobile</label> 
                                            <input class="form-control" type="text" name="mobile" id="mobile" value="{{ old('mobile', $profile->mobile) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label>DOB</label>
                                            <input class="form-control date" type="text" name="dob" id="dob" value="{{ old('dob', $profile->dob) }}" required>
                                        </div>
                                        <br><br>
                                        <div class="col-md-3">
                                            <label>Gender</label>
                                            @foreach(App\StudentProfile::GENDER_RADIO as $key => $label)
                                            <div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">

                                            <input class="form-check-input" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', $profile->gender) === (string) $key ? 'checked' : '' }} required>

                                            <label class="form-check-label" for="gender_{{ $key }}">{{ $label }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-3">
                                            <label>Religion</label>
                                            <select class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" id="religion" required>
                                            <option value disabled {{ old('religion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::RELIGION_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('religion', $profile->religion) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                    </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="caste_id">{{ trans('cruds.studentDetail.fields.caste') }}
                                            </label>
                                            <select class="form-control select2 {{ $errors->has('caste') ? 'is-invalid' : '' }}" name="caste_id" id="caste_id">
                    
                                            @foreach(App\Caste::all() as $id => $caste)
                                            <option value="{{ $caste->id }}" {{ old('caste_id',$profile->caste_id) == $caste->id ? 'selected' : '' }}>{{ $caste->caste_name }}
                                            </option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required">{{ trans('cruds.studentDetail.fields.marital_status') }}
                                            </label>
                                            <select class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}" name="marital_status" id="marital_status" required>
                                            <option value disabled {{ old('marital_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::MARITAL_STATUS_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('marital_status', $profile->marital_status) === (string) $key ? 'selected' : '' }}>{{ $label   }}
                                            </option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="col-md-3">
                                            <label class="required">{{ trans('cruds.studentDetail.fields.handicapped') }}
                                            </label>
                                             @foreach(App\StudentProfile::HANDICAPPED_RADIO as $key => $label)
                                            <div class="form-check {{ $errors->has('handicapped') ? 'is-invalid' : '' }}">
                                            <input class="form-check-input phhandicapped" type="radio" id="handicapped_{{ $key }}" name="handicapped" value="{{ $key }}" {{ old('handicapped',$profile->handicapped) === (string) $key ? 'checked' : '' }} required>
                                            <label class="form-check-label" for="handicapped_{{ $key }}">{{ $label }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-3">
                                            <label>{{ trans('cruds.studentDetail.fields.single_parent') }}</label>
                                            @foreach(App\StudentProfile::SINGLE_PARENT_RADIO as $key => $label)
                                            <div class="form-check {{ $errors->has('single_parent') ? 'is-invalid' : '' }}">
                                            <input class="form-check-input singleparent" type="radio" id="single_parent_{{ $key }}" name="single_parent" value="{{ $key }}" {{ old('single_parent',$profile->single_parent) === (string) $key ? 'checked' : '' }}>
                                            <label class="form-check-label" for="single_parent_{{ $key }}">{{ $label }}</label>
                                            </div>
                                            @endforeach

                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="aadharnumber">{{ trans('cruds.studentDetail.fields.aadharnumber') }}</label>
                                            <input class="form-control {{ $errors->has('aadharnumber') ? 'is-invalid' : '' }}" type="text" name="aadharnumber" id="aadharnumber" value="{{ old('aadharnumber', $profile->aadharnumber) }}" minlength="12" maxlength="12" required>
                                        </div>
                                    </div>
                                   
                                    
                                     
                                    
                                    
                                    
                                    
                                   
                                    
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card-body">
                    <img src="{{ asset($profile->photo)}}" width="150" style="display: block;margin-left: auto;margin-right: auto;">
                    <hr><strong>ID:</strong>{{$profile->id ?? ''}}
                    
                    <hr><strong>Full Name:</strong> {{$profile->fullname ?? ''}}
                    <hr><strong>Date of Birth:</strong> {{$profile->dob ?? ''}}
                    @if(!empty($profile->domicile_certificate))
                    <a href="{{$profile->domicile_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                    
                    <hr><strong>Gender</strong> {{$profile->gender ?? ''}}
                    <hr><strong>Email:</strong> {{$profile->email ?? ''}}
                    <hr><strong>FORSTU Email:</strong> {{$profile->forstu_email ?? ''}}
                    <hr><strong>Mobile:</strong> {{$profile->mobile ?? ''}}
                    <hr><strong>Religion:</strong> {{$profile->religion ?? ''}}

                    <hr><strong>Caste</strong> {{$profile->caste->caste_name ?? ''}}

                    @if(!empty($profile->caste_certificate))
                    <a href="{{$profile->caste_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif

                    <hr><strong>Marital Status:</strong> {{$profile->marital_status ?? ''}}
                    <hr><strong>Single Parent:</strong> {{$profile->single_parent ?? ''}}
                    @if(!empty($profile->death_certificate))
                    <a href="{{$profile->death_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                    <br>
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal1">
  Add Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
        <div class="form-group">
            <label>Death Year</label>
            <select class="form-control" name="death_year">
                <option value="">Please Select</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            
            </select>
        </div>

        <div class="form-group">
            <label>Relationship with Death</label>
            <select class="form-control" name="death_relationship">
                <option value="">Please Select</option>
                <option value="Father">Father</option>
                <option value="Mother">Mother</option>
            </select>
        </div>
        <div class="form-group">
            <label>Reason of Death</label>
            <select class="form-control" name="reason_death">
                <option value="">Please Select</option>
                <option value="Illness">Illness</option>
                <option value="Accident">Accident</option>
                <option value="Disaster">Disaster</option>
                <option value="Covid 19 Affected">Covid 19 Affected</option>
                <option value="Others">Others</option>
            </select>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
                    <br>
                    <hr><strong>Physically handicapped:</strong> {{$profile->handicapped ?? ''}}
                    @if(!empty($profile->physically_handicapped_certificate))
                    <a href="{{$profile->physically_handicapped_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif

                    <hr><strong>Aadhar Number</strong> {{$profile->aadharnumber ?? ''}} &nbsp; &nbsp; 

                    @if(!empty($profile->aadhar_card))
                    <a href="{{$profile->aadhar_card}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif



                </div>
            </div>
         </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Family Details
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#family" style="float: right;">Edit</button>
                     <div class="modal fade" id="family" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Family Details</h2>
                                    <hr>
                                    
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="required" for="father_name">{{ trans('cruds.studentDetail.fields.father_name') }}</label>
                                            <input class="form-control {{ $errors->has('father_name') ? 'is-invalid' : '' }}" type="text" name="father_name" id="father_name" value="{{ old('father_name', $profile->father_name) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                           <label class="required">{{ trans('cruds.studentDetail.fields.father_edu') }}</label>
                                            <select class="form-control {{ $errors->has('father_edu') ? 'is-invalid' : '' }}" name="father_edu" id="father_edu" required>
                                                <option value disabled {{ old('father_edu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                                @foreach(App\StudentProfile::FATHER_EDU_SELECT as $key => $label)
                                                <option value="{{ $key }}" {{ old('father_edu',$profile->father_edu) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                           <label class="required" for="father_occupation">{{ trans('cruds.studentDetail.fields.father_occupation') }}</label>
                                           <input class="form-control {{ $errors->has('father_occupation') ? 'is-invalid' : '' }}" type="text" name="father_occupation" id="father_occupation" value="{{ old('father_occupation',$profile->father_occupation) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="mother_name">{{ trans('cruds.studentDetail.fields.mother_name') }}</label>
                                            <input class="form-control {{ $errors->has('mother_name') ? 'is-invalid' : '' }}" type="text" name="mother_name" id="mother_name" value="{{ old('mother_name',$profile->mother_name) }}" required>
                                        </div>
                                        <br><br>
                                        <div class="col-md-3">
                                           <label class="required">{{ trans('cruds.studentDetail.fields.mother_edu') }}</label>
                                            <select class="form-control {{ $errors->has('mother_edu') ? 'is-invalid' : '' }}" name="mother_edu" id="mother_edu" required>
                                            <option value disabled {{ old('mother_edu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::MOTHER_EDU_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('mother_edu',$profile->mother_edu) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="mothers_occupation">{{ trans('cruds.studentDetail.fields.mothers_occupation') }}</label>
                                            <input class="form-control {{ $errors->has('mothers_occupation') ? 'is-invalid' : '' }}" type="text" name="mothers_occupation" id="mothers_occupation" value="{{ old('mothers_occupation',$profile->mothers_occupation) }}" required>
                                    
                                        </div>
                                        <div class="col-md-3">
                                            
                                        <label class="required" for="parents_mobile">{{ trans('cruds.studentDetail.fields.parents_mobile') }}</label>
                                        <input class="form-control {{ $errors->has('parents_mobile') ? 'is-invalid' : '' }}" type="text" name="parents_mobile" id="parents_mobile" value="{{ old('parents_mobile',$profile->parents_mobile) }}" required>
                                            
                                        </div>
                                        <div class="col-md-3">
                                           <label class="required" for="annual_income">{{ trans('cruds.studentDetail.fields.annual_income') }}</label>
                                            <input class="form-control {{ $errors->has('annual_income') ? 'is-invalid' : '' }}" type="number" name="annual_income" id="annual_income" value="{{ old('annual_income', $profile->annual_income) }}" step="1" required>
                                        </div>
                                        <hr>
                                        <div class="col-md-3">
                                           <label>House Type</label>
                                           <select class="form-control" name="house_type">
                                                <option value="">Please Select</option>
                                               <option value="Rented">Rented</option>
                                               <option value="Own House">Own House</option>
                                               <option value="Relative">Relative</option>
                                          
                                        </div>
                                        <div class="col-md-3">
                                            <label>Agricultural Land</label>
                                           <select class="form-control" name="agricultural_land">
                                                <option value="">Please Select</option>
                                               <option value="5 Acres or More">5 Acres or More</option>
                                               <option value="2-5 Acres">2-5 Acres</option>
                                               <option value="0-2 Acres">0-2 Acres</option>
                                               <option value="No">No Land</option>
                                           </select>
                                        </div>
                                        <div class="col-md-3">
                                            
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Father Name:</strong> {{$profile->father_name ?? ''}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Father Education</strong> {{$profile->father_edu ?? ''}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Father occupation:</strong> {{$profile->father_occupation ?? ''}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Mother Name:</strong> {{$profile->mother_name ?? ''}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Mother Education</strong> {{$profile->mother_edu ?? ''}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Mother occupation:</strong> {{$profile->mothers_occupation ?? ''}}
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Parents Contact Number</strong> {{$profile->parents_mobile ?? ''}}
                                </div>
                                <div class="col-md-6">
                                    <strong>Parents Annual Income</strong> {{$profile->annual_income ?? ''}}
                                    @if(!empty($profile->income_certificate))
                    <a href="{{$profile->income_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                    
                                </div>
                                
                            </div>      
                                        
                    </div>
                </div>

            

            
            <div class="row">
                 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Current Course Details
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#course" style="float: right;">Edit</button>
                     <div class="modal fade" id="course" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Current Course Details</h2>
                                    <hr>
                                    
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="course_type_id">Course Type</label>
                                            <select name="course_type_id" class="form-control select2" id="course_type_id"  required>
                                            @foreach(App\Coursetype::all() as $id => $course_type)
                                            <option value="{{$course_type->id}}" {{ old('course_type_id',$profile->course_type_id) == $course_type->id ? 'selected' : ''}}>{{$course_type->course_type_name}}</option>
                        
                                            @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-3">
                                           <label for="student_course_name_id">Course Name</label>
                                            <select name="student_course_name_id" class="form-control select2" id="student_course_name_id" required>
                                            @foreach(App\StudentCourses::all() as $id => $studentcourses)
                                            <option value="{{$studentcourses->id}}"{{ old('student_course_name_id',$profile->student_course_name_id ?? '') == $studentcourses->id ? 'selected' : ''}}>{{$studentcourses->course_name}}</option>
                        
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                           <label for="course_name_id">Course Specialization</label>
                                           <select name="course_name_id" class="form-control select2" id="course_name_id" required>
                                            @foreach(App\Course::all() as $id => $courses)
                                                <option value="{{$courses->id}}"{{ old('course_name_id',$profile->course_name_id) == $courses->id ? 'selected' : ''}}>{{$courses->course_name}}</option>
                        
                                            @endforeach

                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label  for="current_year">Current Year</label>
                                            <select name="current_year" id="current_year" class="form-control select2">
                                            <option value disabled {{ old('current_year', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::CURRENT_YEAR as $key => $label)
                                            <option value="{{ $key }}" {{ old('religion', $profile->current_year) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                    
                                            </select>
                                        </div>
                                        <br><br>
                                        <div class="col-md-3">
                                            <label class="required" for="current_inst_name">{{ trans('cruds.studentDetail.fields.current_inst_name') }}</label>
                                            <input class="form-control {{ $errors->has('current_inst_name') ? 'is-invalid' : '' }}" type="text" name="current_inst_name" id="current_inst_name" value="{{ old('current_inst_name',$profile->current_inst_name) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                           <label class="required" for="inst_address">{{ trans('cruds.studentDetail.fields.inst_address') }}</label>
                                           <input class="form-control {{ $errors->has('inst_address') ? 'is-invalid' : '' }}" type="text" name="inst_address" id="inst_address" value="{{ old('inst_address', $profile->current_inst_name) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="course_start">{{ trans('cruds.studentDetail.fields.course_start') }}</label>
                                            <input class="form-control date {{ $errors->has('course_start') ? 'is-invalid' : '' }}" type="text" name="course_start" id="course_start" value="{{ old('course_start',$profile->course_start) }}" required>
                                        
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="tution_fees">{{ trans('cruds.studentDetail.fields.tution_fees') }}</label>
                                            <input class="form-control {{ $errors->has('tution_fees') ? 'is-invalid' : '' }}" type="number" name="tution_fees" id="tution_fees" value="{{ old('tution_fees', $profile->tution_fees) }}" step="1" required>
                                        
                                            
                                        </div>
                                        
                                        
                                        <div class="col-md-3">
                                           <label for="hostel_fees">{{ trans('cruds.studentDetail.fields.hostel_fees') }}</label>
                                            <input class="form-control {{ $errors->has('hostel_fees') ? 'is-invalid' : '' }}" type="number" name="hostel_fees" id="hostel_fees" value="{{ old('hostel_fees',$profile->hostel_fees) }}" step="1">
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Course Type</strong>
                                    {{$profile->course_type->course_type_name ?? ''}}
                                    
                                    
                                   
                                </div>
                                <div class="col-md-4">
                                    <strong>Current Course:</strong>{{$profile->student_course_name->course_name ?? ''}}
                                    <br><br>
                                      <strong>Course Specilization:</strong>{{$profile->course_name->course_name ?? ''}}
                                </div>
                                <div class="col-md-4">
                                      <strong>Current Year:</strong> {{$profile->current_year ?? ''}}
                                     @if(!empty($profile->clg_id_card))
                    <a href="{{$profile->clg_id_card}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                    
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <hr>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <strong>Current Institute</strong> {{$profile->current_inst_name ?? ''}}<br>{{$profile->inst_address ?? ''}}
                                    @if(!empty($profile->admission_letter))
                    <a href="{{$profile->admission_letter }}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                    @if(!empty($profile->bonafide_certificate))
                    <a href="{{$profile->bonafide_certificate }}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                </div>
                                
                            </div>
                            
                            
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Tution Fees:</strong> {{$profile->tution_fees ?? ''}}
                                    @if(!empty($profile->currentyear_fees_reciept))
                    <a href="{{$profile->currentyear_fees_reciept}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                </div>
                                <div class="col-md-4">
                                    <strong>Non Tution Fees:</strong> {{$profile->non_tution_fees ?? ''}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Hostel Fees:</strong> {{$profile->hostel_fees ?? ''}}
                                    @if(!empty($profile->hostel_reciept))
                    <a href="{{$profile->hostel_reciept}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                </div>
                            </div>
                            <hr>
                            <label><strong>Fee Structure</strong></label>
                            @if(!empty($profile->feestructure))
                    <a href="{{$profile->feestructure}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Educational Details
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#edu" style="float: right;">Edit</button>
                     <div class="modal fade" id="edu" role="dialog">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Educational Details</h2>
                                    <hr>
                                    
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <h5>SSC Details</h5>
                                    <div class="row">
                                        
                                        <hr>
                                        <div class="col-md-4">
                                            
                                            <label class="required" for="class_10_school_name">{{ trans('cruds.studentDetail.fields.class_10_school_name') }}</label>
                                            <input class="form-control {{ $errors->has('class_10_school_name') ? 'is-invalid' : '' }}" type="text" name="class_10_school_name" id="class_10_school_name" value="{{ old('class_10_school_name', $profile->class_10_school_name) }}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="required" for="class_10_state">{{ trans('cruds.studentDetail.fields.class_10_state') }}</label>
                

                                            <select class="form-control {{ $errors->has('class_10_state') ? 'is-invalid' : '' }}" name="class_10_state" id="class_10_state" >
                                            <option value disabled {{ old('class_10_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                                @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('class_10_state', $profile->class_10_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                            </select>
                                           
                                        </div>
                                        <div class="col-md-4">
                                           <label class="required" for="school_passing">{{ trans('cruds.studentDetail.fields.school_passing') }}</label>
                                            <input class="form-control date {{ $errors->has('school_passing') ? 'is-invalid' : '' }}" type="text" name="school_passing" id="school_passing" value="{{ old('school_passing',$profile->school_passing) }}" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="required" for="school_marks_obtained" style="" id="school_obtained">{{ trans('cruds.studentDetail.fields.school_marks_obtained') }}</label>
                                            <input class="form-control" type="number" name="school_marks_obtained" id="school_marks_obtained" value="{{ old('school_marks_obtained',$profile->school_marks_obtained) }}"  >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="required" for="school_marks_total" style="" id="school_total">{{ trans('cruds.studentDetail.fields.school_marks_total') }}</label>
                                             <input class="form-control {{ $errors->has('school_marks_total') ? 'is-invalid' : '' }}" type="number" name="school_marks_total" id="school_marks_total" value="{{ old('school_marks_total',$profile->school_marks_total) }}"  >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="required">Percentage</label>
                                            @if(empty($profile->school_percentage))
                                            <input type="text" name="school_percentage" value=" " id="ssc_percentage" class="form-control"  >
                                            @else
                                            <input type="text" name="school_percentage" value="{{$profile->school_percentage}} " id="ssc_percentage" class="form-control" readonly>
                                            @endif

                                            
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label  for="class10_obtained" id="school_cgpa_obtained"  class="required">Class 10 CGPA Obtained</label>
                                            <input class="form-control" type="text" name="cgpa_school_marks_obtained" id="cgpa_school_marks_obtained" value="{{ old('cgpa_school_marks_obtained',$profile->cgpa_school_marks_obtained) }}"  step="0.01" min="0" max="10"  >
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="class10_total" id="school_cgpa_total" style="" class="required"> Class 10 Total CGPA </label>
                                            <input class="form-control {{ $errors->has('cgpa_school_marks_total ') ? 'is-invalid' : '' }}" type="text" name="cgpa_school_marks_total" id="cgpa_school_marks_total" style="" step="0.01" min="0" max="10" >
                                            
                                        </div>
                                        <div class="col-md-4">
                                           
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <h5>Class 12 Details</h5>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="class_12_clg_name" class="required">{{ trans('cruds.studentDetail.fields.class_12_clg_name') }}</label>
                                            <input class="form-control {{ $errors->has('class_12_clg_name') ? 'is-invalid' : '' }}" type="text" name="class_12_clg_name" id="class_12_clg_name" value="{{ old('class_12_clg_name',$profile->class_12_clg_name) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="class_12_state" class="required">{{ trans('cruds.studentDetail.fields.class_12_state') }}</label>
                
                                            <select class="form-control {{ $errors->has('class_12_state') ? 'is-invalid' : '' }}" name="class_12_state" id="class_12_state" >
                                            <option value disabled {{ old('class_12_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('class_12_state', $profile->class_12_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="class_12_passing_yeat" class="required">{{ trans('cruds.studentDetail.fields.class_12_passing_yeat') }}</label>
                                            <input class="form-control date {{ $errors->has('class_12_passing_yeat') ? 'is-invalid' : '' }}" type="text" name="class_12_passing_yeat" id="class_12_passing_yeat" value="{{ old('class_12_passing_yeat', $profile->class_12_passing_yeat) }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="class_12_marks_obtained" id="hsc_obtained" style="" class="required">{{ trans('cruds.studentDetail.fields.class_12_marks_obtained') }}</label>
                                            <input class="form-control {{ $errors->has('class_12_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="class_12_marks_obtained" id="class_12_marks_obtained" value="{{ old('class_12_marks_obtained', $profile->class_12_marks_obtained) }}" step="1" style="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="class_12_out_of_total_marks" id="hsc_total" style="">{{ trans('cruds.studentDetail.fields.class_12_out_of_total_marks') }}</label>
                                            <input class="form-control {{ $errors->has('class_12_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="class_12_out_of_total_marks" id="class_12_out_of_total_marks" value="{{ old('class_12_out_of_total_marks',$profile->class_12_out_of_total_marks) }}" step="1" style="">
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label class="required">Percentage</label>

                                            @if(empty($profile->class_12_percentage))
                                            <input type="text" name="class_12_percentage" id="hsc_percentage" class="form-control" value=" " required>
                                            @else
                                            <input type="text" name="class_12_percentage" id="hsc_percentage" class="form-control" value="{{$profile->class_12_percentage}}" >
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_obtained" id="hsc_cgpa_obtained" >Class 12 CGPA Obtained</label>
                                            <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_class_12_marks_obtained" id="cgpa_class_12_marks_obtained" value="{{ old('cgpa_class_12_marks_obtained', $profile->cgpa_class_12_marks_obtained) }}"  step="0.01" min="0" max="10"  >
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_total" id="hsc_cgpa_total" >Class 12 Total CGPA </label>
                                            <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_class_12_marks_total" id="cgpa_class_12_marks_total"  step="0.01" min="0" max="10" >
                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Diploma Details</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="diploma_clg_name" class="required">{{ trans('cruds.studentDetail.fields.diploma_clg_name') }}</label>
                                            <input class="form-control {{ $errors->has('diploma_clg_name') ? 'is-invalid' : '' }}" type="text" name="diploma_clg_name" id="diploma_clg_name" value="{{ old('diploma_clg_name', $profile->diploma_clg_name) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="diploma_state" class="required">{{ trans('cruds.studentDetail.fields.diploma_state') }}</label>
                
                                            <select class="form-control {{ $errors->has('diploma_state') ? 'is-invalid' : '' }}" name="diploma_state" id="diploma_state" >
                                            <option value disabled {{ old('diploma_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('diploma_state', $profile->diploma_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="diploma_passing_year" class="required">{{ trans('cruds.studentDetail.fields.diploma_passing_year') }}</label>
                                            <input class="form-control date {{ $errors->has('diploma_passing_year') ? 'is-invalid' : '' }}" type="text" name="diploma_passing_year" id="diploma_passing_year" value="{{ old('diploma_passing_year', $profile->diploma_passing_year) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="diploma_total_marks_obtained" id="diploma_obtained" class="required" >{{ trans('cruds.studentDetail.fields.diploma_total_marks_obtained') }}</label>
                                            <input class="form-control {{ $errors->has('diploma_total_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="diploma_total_marks_obtained" id="diploma_total_marks_obtained" value="{{ old('diploma_total_marks_obtained', $profile->diploma_total_marks_obtained) }}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label for="diploma_out_of_total_marks" id="diploma_total" class="required" >{{ trans('cruds.studentDetail.fields.diploma_out_of_total_marks') }}</label>
                                            <input class="form-control {{ $errors->has('diploma_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="diploma_out_of_total_marks" id="diploma_out_of_total_marks" value="{{ old('diploma_out_of_total_marks',$profile->diploma_out_of_total_marks) }}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Percentage</label>
                                            @if(empty($profile->diploma_percentage))
                                            <input type="text" name="diploma_percentage" id="diploma_percentage"  class="form-control" readonly>  
                                            @else
                                            <input type="text" name="diploma_percentage" id="diploma_percentage"  class="form-control"  value="{{$profile->diploma_percentage}}">
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_obtained" id="diploma_cgpa_obtained"  class="required"> CGPA Obtained</label>
                                            <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_diploma_marks_obtained" id="cgpa_diploma_marks_obtained" value="{{ old('cgpa_diploma_marks_obtained', $profile->cgpa_diploma_marks_obtained) }}"  step="0.01" min="0" max="10"  >
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_total" id="diploma_cgpa_total" class="required">Total CGPA </label>
                                            <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_diploma_marks_total" id="cgpa_diploma_marks_total"    step="0.01" min="0" max="10"  >
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <h5>Graduation Details</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="grad_clg_name" class="required">{{ trans('cruds.studentDetail.fields.grad_clg_name') }}</label>
                                            <input class="form-control {{ $errors->has('grad_clg_name') ? 'is-invalid' : '' }}" type="text" name="grad_clg_name" id="grad_clg_name" value="{{ old('grad_clg_name', $profile->grad_clg_name) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="grad_state" class="required">{{ trans('cruds.studentDetail.fields.grad_state') }}</label>
                    
                                            <select class="form-control {{ $errors->has('grad_state') ? 'is-invalid' : '' }}" name="grad_state" id="grad_state" >
                                            <option value disabled {{ old('grad_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('grad_state', $profile->grad_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="grad_passing_year" class="required">{{ trans('cruds.studentDetail.fields.grad_passing_year') }}</label>
                                            <input class="form-control date {{ $errors->has('grad_passing_year') ? 'is-invalid' : '' }}" type="text" name="grad_passing_year" id="grad_passing_year" value="{{ old('grad_passing_year',$profile->grad_passing_year) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="grad_total_marks" id="grad_obtained" class="required">{{ trans('cruds.studentDetail.fields.grad_total_marks')   }}</label>
                                            <input class="form-control {{ $errors->has('grad_total_marks') ? 'is-invalid' : '' }}"  type="number" name="grad_total_marks" id="grad_total_marks" value="{{ old('grad_total_marks',$profile->grad_total_marks) }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="grad_out_of_total_marks" id="grad_total"  class="required" >{{ trans('cruds.studentDetail.fields.grad_out_of_total_marks') }}</label>
                                            <input class="form-control {{ $errors->has('grad_out_of_total_marks') ? 'is-invalid' : '' }}" type="number" name="grad_out_of_total_marks" id="grad_out_of_total_marks"     value="{{ old('grad_out_of_total_marks',$profile->grad_out_of_total_marks) }}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Percentage</label>
                                             @if(empty($profile->grad_percentage))
                                            <input type="text" name="grad_percentage" value=" " id="grad_percentage" class="    form-control" required>
                                            @else
                                            <input type="text" name="grad_percentage" value="{{$profile->grad_percentage}} " id="grad_percentage" class="form-control" >
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_obtained" id="grad_cgpa_obtained"> CGPA Obtained</label>
                                            <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_grad_marks_obtained" id="cgpa_grad_marks_obtained" value="{{ old('cgpa_grad_marks_obtained', $profile->cgpa_grad_marks_obtained) }}"  step="0.01" min="0" max="10"  >
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_total" id="grad_cgpa_total" >Total CGPA </label>
                                            <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_grad_marks_total" id="cgpa_grad_marks_total"   step="0.01" min="0" max="10" >
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Previous Year/Previous Semester</h5>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label  for="previous_marks_obtained" id="previous_obtained">Previous Semester/Previous Year Marks Obtained</label>
                                            <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="number" name="previous_marks_obtained" id="previous_marks_obtained" value="{{ old('previous_marks_obtained', $profile->previous_marks_obtained) }}"   >
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="previous_marks_total" id="previous_total_obtained">Previous Semester/Previous Year  Out of Total Marks </label>
                                            <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="number" name="previous_marks_total" id="previous_marks_total" value="{{ old('previous_marks_total',$profile->previous_marks_total ) }}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Percentage</label>
                                            <input type="text" name="previous_percentage" value=" {{ old('previous_percentage',$profile->school_percentage)}}" id="previous_percentage" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_obtained" id="cgpa_obtained" >Previous Semester/Previous Year CGPA Obtained</label>
                                            <input class="form-control {{ $errors->has('previous_marks_obtained') ? 'is-invalid' : '' }}" type="text" name="cgpa_previous_marks_obtained" id="cgpa_previous_marks_obtained" value="{{ old('cgpa_previous_marks_obtained', $profile->cgpa_previous_marks_obtained) }}"  step="0.01" min="0" max="10"  >
                                        </div>
                                        <div class="col-md-4">
                                            <label  for="cgpa_previous_marks_total" id="cgpa_total" >Previous Semester/Previous Year  Out of Total CGPA </label>
                                            <input class="form-control {{ $errors->has('previous_marks_total') ? 'is-invalid' : '' }}" type="text" name="cgpa_previous_marks_total" id="cgpa_previous_marks_total"   step="0.01" min="0" max="10" >
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                            
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <th>Course</th>
                                    <th>Institute Name</th>
                                    <th>State</th>
                                    <th>Passing Year</th>
                                    <th>Marks/CGPA Obtained</th>
                                    <th>Total Marks/CGPA</th>
                                    <th>Percentage</th>
                                </thead>
                                <tbody>
                                  
                                  @if(!empty($profile->class_10_school_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Class 10</td>
                                        <td>{{$profile->class_10_school_name ?? ''}}</td>
                                        <td>{{$profile->class_10_state ?? ''}}</td>
                                        <td>{{$profile->school_passing ?? ''}}</td>
                                        @if(!empty($profile->school_marks_obtained))
                                        <td>
                                            {{$profile->school_marks_obtained ?? ''}}
                                        </td>
                                        @else
                                            <td>
                                              {{$profile->cgpa_school_marks_obtained ?? ''}}  
                                            </td>
                                        @endif

                                        @if(!empty($profile->school_marks_obtained))
                                        <td>{{$profile->school_marks_total ?? ''}}
                                        </td>
                                        @else
                                        <td>
                                            {{$profile->cgpa_school_marks_total ?? ''}}
                                        </td>
                                        @endif
                                            
                                        
                                        <td>{{$profile->school_percentage ?? ''}}
                                            @if(!empty($profile->class10_marksheet))
                    <a href="{{$profile->class10_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>


                                    </tr>
                                    @endif

                                    @if(!empty($profile->class_12_clg_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Class 12</td>
                                        <td>{{$profile->class_12_clg_name ?? ''}}</td>
                                        <td>{{$profile->class_12_state ?? ''}}</td>
                                        <td>{{$profile->class_12_passing_yeat ?? ''}}</td>
                                        @if(!empty($profile->class_12_marks_obtained))
                                        <td>
                                            {{$profile->class_12_marks_obtained ?? ''}}
                                        </td>
                                        @else
                                            <td>
                                              {{$profile->cgpa_class_12_marks_obtained ?? ''}}  
                                            </td>
                                        @endif

                                        @if(!empty($profile->class_12_marks_obtained))
                                        <td>{{$profile->class_12_out_of_total_marks ?? ''}}
                                        </td>
                                        @else
                                        <td>
                                            {{$profile->cgpa_class_12_marks_total ?? ''}}
                                        </td>
                                        @endif
                                        
                                        <td>{{$profile->class_12_percentage ?? ''}}
                                            @if(!empty($profile->class12_marksheet))
                    <a href="{{$profile->class12_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>
                                    </tr>
                                    @endif

                                    @if(!empty($profile->diploma_clg_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Diploma Details</td>
                                        <td>{{$profile->diploma_clg_name ?? ''}}</td>
                                        <td>{{$profile->diploma_state ?? ''}}</td>
                                        <td>{{$profile->diploma_passing_year ?? ''}}</td>
                                        @if(!empty($profile->diploma_total_marks_obtained))
                                        <td>
                                            {{$profile->diploma_total_marks_obtained ?? ''}}
                                        </td>
                                        @else
                                            <td>
                                              {{$profile->cgpa_diploma_marks_obtained ?? ''}}  
                                            </td>
                                        @endif

                                        @if(!empty($profile->diploma_total_marks_obtained))
                                        <td>{{$profile->diploma_out_of_total_marks ?? ''}}
                                        </td>
                                        @else
                                        <td>
                                            {{$profile->cgpa_diploma_marks_total ?? ''}}
                                        </td>
                                        @endif
                                        <td>{{$profile->diploma_percentage ?? ''}}
                                            @if(!empty($profile->diploma_marksheet))
                    <a href="{{$profile->diploma_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>
                                    </tr>
                                    @endif

                                    @if(!empty($profile->grad_clg_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Graduation Details</td>
                                        <td>{{$profile->grad_clg_name ?? ''}}</td>
                                        <td>{{$profile->grad_state ?? ''}}</td>
                                        <td>{{$profile->grad_passing_year ?? ''}}</td>
                                        @if(!empty($profile->grad_total_marks))
                                        <td>
                                            {{$profile->grad_total_marks ?? ''}}
                                        </td>
                                        @else
                                            <td>
                                              {{$profile->cgpa_grad_marks_obtained ?? ''}}  
                                            </td>
                                        @endif

                                        @if(!empty($profile->grad_total_marks))
                                        <td>{{$profile->grad_out_of_total_marks ?? ''}}
                                        </td>
                                        @else
                                        <td>
                                            {{$profile->cgpa_grad_marks_total ?? ''}}
                                        </td>
                                        @endif
                                        
                                        <td>{{$profile->grad_percentage ?? ''}}
                                            @if(!empty($profile->graduation_marksheet))
                    <a href="{{$profile->graduation_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Previous Year/Semester</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        @if(!empty($profile->previous_marks_obtained))
                                        <td>
                                            {{$profile->previous_marks_obtained ?? ''}}
                                        </td>
                                        @else
                                            <td>
                                              {{$profile->cgpa_previous_marks_obtained ?? ''}}  
                                            </td>
                                        @endif

                                        @if(!empty($profile->previous_marks_obtained))
                                        <td>{{$profile->previous_marks_total ?? ''}}
                                        </td>
                                        @else
                                        <td>
                                            {{$profile->cgpa_previous_marks_total ?? ''}}
                                        </td>
                                        @endif
                                        
                                        <td>{{$profile->previous_percentage ?? '' }}
                                            @if(!empty($profile->previous_marksheet))
                    <a href="{{$profile->previous_marksheet }}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
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

        <div class="col-md-3">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Communication Details
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#comm" style="float: right;">Edit</button>
                     <div class="modal fade" id="comm" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Communication Details</h2>
                                    <hr>
                                    
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="required" for="current_add">{{ trans('cruds.studentDetail.fields.current_add') }}</label>
                                            <input class="form-control {{ $errors->has('current_add') ? 'is-invalid' : '' }}" type="text" name="current_add" id="current_add" value="{{ old('current_add', $profile->current_add) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                           <label class="required" for="current_state">{{ trans('cruds.studentDetail.fields.current_state') }}</label>
                                          <select class="form-control {{ $errors->has('current_state') ? 'is-invalid' : '' }}" name="current_state" id="current_state" required>
                                            <option value disabled {{ old('current_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('current_state',$profile->current_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="col-md-3">
                                           <label class="required" for="current_city">Current District</label>
                                            <input class="form-control {{ $errors->has('current_city') ? 'is-invalid' : '' }}" type="text" name="current_city" id="current_city" value="{{ old('current_city',$profile->current_city) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="pincode">{{ trans('cruds.studentDetail.fields.pincode') }}</label>
                                            <input class="form-control {{ $errors->has('pincode') ? 'is-invalid' : '' }}" type="number" name="pincode" id="pincode" value="{{ old('pincode', $profile->pincode) }}" step="1" required>
                                        </div>
                                        <br><br>
                                        <div class="col-md-3">
                                           <label class="required" for="permanent_add">{{ trans('cruds.studentDetail.fields.permanent_add') }}</label>
                                            <input class="form-control {{ $errors->has('permanent_add') ? 'is-invalid' : '' }}" type="text" name="permanent_add" id="permanent_add" value="{{ old('permanent_add', $profile->permanent_add) }}" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="permanent_state">{{ trans('cruds.studentDetail.fields.permanent_state') }}</label>
                
                                            <select class="form-control {{ $errors->has('permanent_state') ? 'is-invalid' : '' }}" name="permanent_state" id="permanent_state" required>
                                            <option value disabled {{ old('permanent_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                            @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('permanent_state', $profile->permanent_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                            </select>
                                    
                                        </div>
                                        <div class="col-md-3">
                                            
                                        <label class="required" for="permanent_city">Permanent District</label>
                                        <input class="form-control {{ $errors->has('permanent_city') ? 'is-invalid' : '' }}" type="text" name="permanent_city" id="permanent_city" value="{{ old('permanent_city',$profile->permanent_city) }}" required>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <label class="required" for="permanent_pincode">{{ trans('cruds.studentDetail.fields.permanent_pincode') }}</label>
                                            <input class="form-control {{ $errors->has('permanent_pincode') ? 'is-invalid' : '' }}" type="number" name="permanent_pincode" id="permanent_pincode" value="{{ old('permanent_pincode', $profile->permanent_pincode) }}" step="1" required>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <strong>Current Address :</strong> {{$profile->current_add ?? ''}} &nbsp {{$profile->pincode ?? ''}}<br>
                        <strong>Current City:</strong> {{$profile->current_city ?? ''}}<br>
                        <strong>Current State:</strong> {{$profile->current_state ?? ''}}
                        <hr>
                        <strong>Permanent Address :</strong> {{$profile->permanent_add ?? ''}} &nbsp {{$profile->permanent_pincode ?? ''}}<br>
                        <strong>Permanent City:</strong> {{$profile->permanent_city ?? ''}}<br>
                        <strong>Permanent State:</strong> {{$profile->permanent_state ?? ''}}
                        <hr>

                        @if(!empty($profile->address_proof))
                        <a href="{{$profile->address_proof}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Bank Details
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bank" style="float: right;">Edit</button>
                     <div class="modal fade" id="bank" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Bank Details</h2>
                                    <hr>
                                    
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="required" for="account_number">{{ trans('cruds.studentDetail.fields.account_number') }}</label>
                                            <input class="form-control {{ $errors->has('account_number') ? 'is-invalid' : '' }}" type="text" name="account_number" id="account_number" value="{{ old('account_number', $profile->account_number) }}"  minlength="6" maxlength="18" required>
                                        </div>
                                        <div class="col-md-6">
                                           <label class="required" for="bank_ifsc">{{ trans('cruds.studentDetail.fields.bank_ifsc') }}</label>
                                            <input class="form-control {{ $errors->has('bank_ifsc') ? 'is-invalid' : '' }}" type="text" name="bank_ifsc" id="bank_ifsc" value="{{ old('bank_ifsc',$profile->bank_ifsc) }}" required>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <div class="card-body">
                        <strong>Account Number:</strong> {{$profile->account_number ?? ''}} <hr>
                        <strong>IFSC CODE</strong> {{$profile->bank_ifsc ?? ''}}<br>
                        
                        

                        @if(!empty($profile->bank_passbook))
                        <a href="{{$profile->bank_passbook}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                        @endif
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="card">
                    <div class="card-header">
                        Referee Details
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#reff" style="float: right;">Edit</button>
                     <div class="modal fade" id="reff" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Referral Details</h2>
                                    <hr>
                                    
                                    
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('updatestudentdetails',$profile->user_id)}} " method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Referral Code</label>
                                            <input class="form-control {{ $errors->has('ref_code') ? 'is-invalid' : '' }}" type="text" name="ref_code" id="ref_code" value="{{ old('ref_code',$profile->ref_code) }}" >
                                        </div>
                                        <div class="col-md-3">
                                           
                                        </div>
                                        <div class="col-md-3">
                                           
                                        </div>
                                        <div class="col-md-3">
                                            
                                        </div>
                                        <br><br>
                                        <div class="col-md-3">
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" value="Update Details">Update Details </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <div class="card-body">
                        <strong>Referre Name</strong> 
                     <hr>
                        <strong>Referral Code Applied</strong>
                        {{-- {{$referral->ref_code ?? ''}} --}}<br>
                        
                        {{$profile->ref_code}}

                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Administrative Details
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#admin">Edit</button>
                    </div>
                    <div class="card-body">
                        <strong>FORSTU Email</strong>
                        {{$profile->forstu_email}}
                        <hr>
                        <strong>FORSTU Email Password</strong>
                        {{$profile->forstu_email_password}}
                        <hr>
                        <strong>Buddy4Study Email</strong>
                        {{$profile->buddy4study_email}}
                        <hr>
                        <strong>Buddy4Study Password</strong>
                        {{$profile->buddy4study_password}}
                        <hr>
                        <strong>Vidyasaarthi Email</strong>
                        {{$profile->vidyasaarthi_email}}
                        <hr>
                        <strong>Vidyasaarthi Password</strong>
                        {{$profile->vidyasaarthi_password}}
                        <hr>
                        <strong>Invoice Number</strong>
                        
                        {{$profile->invoice_number}}
                        <hr>
                        <strong>Profile Creation Date</strong>
                        
                        {{ $profile->created_at }}
                        <hr>
                        <strong>Subscription Starting Date</strong>
                        
                        {{ $profile->reg_date }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Applied Scholarship Details
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>Scheme Name</th>
                            <th>Application Date</th>
                            <th>Status</th>
                            <th>Application PDF</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach(App\StudStatus::where('user_id',$profile->user_id)->get() as $status)
                            <tr>
                                <td><h5>{{$status->scheme_name}}</h5></td>
                                <td><h5>
                                        {{\Carbon\Carbon::parse($status->created_at)->format('j F Y') }}  </h5>
                                </td>
                                <td><h5><span class="badge badge-success">{{$status->status ?? ''}}</span> <br><br>
                                   
                                   
                                </td>
                                       
                                    <td>
                                      @if(isset($status->applicationpdf))
                                        <a href="{{$status->applicationpdf}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></td>
                                      @endif
                                    <td>
                                        {{--<a href="" class="btn btn-success btn-xs">Edit Status</a>--}}
  {{--                                     <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
  Edit Status
</button>--}} 
 <form method="GET" action="{{route('updatescholarshipstatus',$status->id)}}" enctype="multipart/form-data"> 
                                   
            @csrf
        
        <button type="submit" class="btn btn-primary btn-xs">Edit Status</button>
    </form>
    {{--
    <form method="POST" action="{{route('deletescholarshipstatus',$status->id)}}" enctype="multipart/form-data"> 
                                   
            @csrf
        
        <button type="submit" class="btn btn-primary btn-xs">Delete Status</button>
    </form>
    --}}
    <form action="{{ route('deletescholarshipstatus',$status->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" >
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
{{--
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Document Remarks
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>Document</th>
                            <th>Remark</th>
                            
                        </thead>
                        <tbody>
                           
                            <tr>
                               <td>Aadhar Card</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20AadharCard%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20AadharCard%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>

                               
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20AadharCard%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbsp Missing</span></h5></a>

                               </td>
                              
                               
                            </tr>
                            <tr>
                                <td>Caste Certificate</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Caste%20Certificate%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Caste%20Certificate%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspNot Latest</span></h5></a>

                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Caste%20Certificate%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Death Certificate</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Death%20Certificate%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>Blur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Death%20Certificate%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>

                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Death%20Certificate%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Domicile Certificate</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Domicile%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Domicile%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Domicile%20Certificate%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Income Certificate</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Income%20Certificate%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Income%20Certificate%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Income%20Certificate%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Admission Letter/Allotment Letter</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Allotment%20Letter%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Allotment%20Letter%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Allotment%20Letter%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Fees Reciept</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Fees%20Reciept%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Fees%20Reciept%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Fees%20Reciept%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Bonafide</td>
                               <td><a  target="_blank" href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Bonafide%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20Bonafide%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Bonafide%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>College ID Card</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20College%20ID%20Card%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20uploaded%20College%20Id%20Card%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20College%20Id%20Card%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Class 10 Marksheet</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20.%20{{$profile->fullname}}%20Your%20Class%2010%20Marksheet%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Class%2010%20Marksheet%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Class%2010%20Marksheet%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Class 12 Marksheet</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Class%2012%20Marksheet%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Class%2012%20Marksheet%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Class%2012%20Marksheet%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Diploma Marksheet</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Diploma%20Marksheet%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Diploma%20Marksheet%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Diploma%20Marksheet%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Graduation  Marksheet</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Graduation%20Marksheet%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Graduation%20Marksheet%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Graduation%20Marksheet%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Address Proof</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Address%20Proof%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Address%20Proof%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Address%20Proof%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            <tr>
                                <td>Bank Passbook</td>
                               <td><a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Bank%20Passbook%20is%20Blur" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspBlur</span></h5></a>

                                <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Bank%20Passbook%20is%20not%20Updated%20one" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i>&nbspNot Latest</span></h5></a>
                                 <a  target="_blank"href="https://wa.me/91{{$profile->mobile}}?text=Hello%20to%20{{$profile->fullname}}%20Your%20Bank%20Passbook%20is%20misisng%20Upload%20it%20on%20forstu%20portal%20soon%20as%20possible" ><h5><span class="badge badge-pill badge-dark "><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i> &nbspMissing</span></h5></a>

                               </td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
--}}
<div class="row">
    <div class="col-md-12">
    
        <div class="card">
            <div class="card-header">
                Documents
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    
                
                <table class="table table-striped">
                    
                    <thead class="thead-dark">
                    <th>Document Name</th>
                    <th>Status</th>
                    <th>Document Link</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Photo</td>
                            <td>
                                @if(!empty($profile->photo))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->photo))
                            <a href="{{$profile->photo}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Parents Aadhar Card</td>
                            <td>
                                @if(!empty($profile->paadhar))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->paadhar))
                            <a href="{{$profile->paadhar}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Aadhar Card</td>
                            <td>
                                @if(!empty($profile->aadhar_card))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->aadhar_card))
                            <a href="{{$profile->aadhar_card}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Caste Certificate</td>
                            <td>
                                @if(!empty($profile->caste_certificate))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->caste_certificate))
                            <a href="{{$profile->caste_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Differently Abled Certificate</td>
                            <td>
                                @if(!empty($profile->physically_handicapped_certificate))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->physically_handicapped_certificate))
                            <a href="{{$profile->physically_handicapped_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Death Certificate (For Single Parent Students)</td>
                            <td>
                                @if(!empty($profile->death_certificate))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->death_certificate))
                            <a href="{{$profile->death_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                         <tr>
                            <td>Address Proof</td>
                            <td>
                                @if(!empty($profile->address_proof))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->address_proof))
                            <a href="{{$profile->address_proof}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Domicile Certificate</td>
                            <td>
                                @if(!empty($profile->domicile_certificate))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->domicile_certificate))
                            <a href="{{$profile->domicile_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Income Certificate</td>
                            <td>
                                @if(!empty($profile->income_certificate))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->income_certificate))
                            <a href="{{$profile->income_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Bank Passbook</td>
                            <td>
                                @if(!empty($profile->bank_passbook))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->bank_passbook))
                            <a href="{{$profile->bank_passbook}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>School/College ID Card</td>
                            <td>
                                @if(!empty($profile->clg_id_card))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->clg_id_card))
                            <a href="{{$profile->clg_id_card}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Bonafide Certificate</td>
                            <td>
                                @if(!empty($profile->bonafide_certificate))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->bonafide_certificate))
                            <a href="{{$profile->bonafide_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                         <tr>
                            <td>Admission/Allotment Letter</td>
                            <td>
                                @if(!empty($profile->admission_letter))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->admission_letter))
                            <a href="{{$profile->admission_letter}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Fees Reciept/Fee Structure</td>
                            <td>
                                @if(!empty($profile->currentyear_fees_reciept))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->currentyear_fees_reciept))
                            <a href="{{$profile->currentyear_fees_reciept}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                            @endif
                    
                            </td>
                        </tr>
                        <tr>
                            <td>Fees Reciept/Fee Structure</td>
                            <td>
                                @if(!empty($profile->currentyear_fees_reciept))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->currentyear_fees_reciept))
                                    <a href="{{$profile->currentyear_fees_reciept}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                                @if(!empty($profile->hostel_reciept))
                                    <a href="{{$profile->hostel_reciept}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Class 10 Marksheet</td>
                            <td>
                                @if(!empty($profile->class10_marksheet))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->class10_marksheet))
                                    <a href="{{$profile->class10_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                               
                            </td>
                        </tr>
                        <tr>
                            <td>Class 12 Marksheet</td>
                            <td>
                                @if(!empty($profile->class12_marksheet))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->class12_marksheet))
                                    <a href="{{$profile->class12_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                               
                            </td>
                        </tr>
                        <tr>
                            <td>Diploma Marksheet</td>
                            <td>
                                @if(!empty($profile->diploma_marksheet))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->diploma_marksheet))
                                    <a href="{{$profile->class12_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                               
                            </td>
                        </tr>
                        <tr>
                            <td>Graduation Marksheet</td>
                            <td>
                                @if(!empty($profile->graduation_marksheet))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->graduation_marksheet))
                                    <a href="{{$profile->graduation_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                               
                            </td>
                        </tr>
                        <tr>
                            <td>Previous Examination Marksheet</td>
                            <td>
                                @if(!empty($profile->previous_marksheet))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->previous_marksheet))
                                    <a href="{{$profile->previous_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                               
                            </td>
                        </tr>
                        <tr>
                            <td>Recommendation Letter</td>
                            <td>
                                @if(!empty($profile->pan_card))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->pan_card))
                                    <a href="{{$profile->pan_card}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                               
                            </td>
                        </tr>
                        <tr>
                            <td>Ration Card</td>
                            <td>
                                @if(!empty($profile->ration_card))
                                    <h4><span class="badge badge-pill badge-success">Uploaded</span></h4>
                                @else
                                   <h4><span class="badge badge-pill badge-danger">Not Uploaded</span></h4>
                                @endif
                            </td>
                            <td>
                                @if(!empty($profile->ration_card))
                                    <a href="{{$profile->ration_card}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                @endif
                               
                            </td>
                        </tr>

                    </tbody>
                </table>
              </div>  
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function () {

  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/scholarships/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', {{ $scholarship->id ?? 0 }});
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});


</script>

<script type="text/javascript">
     $('select').change(function(){

$('input[type=name]').val($('option:selected',this).text());
    
});
</script>

<script type="text/javascript">
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