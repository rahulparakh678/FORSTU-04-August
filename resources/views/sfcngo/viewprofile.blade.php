@extends('layouts.sfcngo')
@section('content')
<div class="content">
    <div class="form-group">
                
                <a class="btn btn-xs btn-primary" href="{{ URL::previous() }}">
                    Back
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
                    <div class="col-md-4">
                       <strong>Student Type :</strong> 
                       
                       @if($profile->paid==='YES')
                        PAID
                       @else
                       {{$profile->paid}}
                       @endif
                    </div>
                    <div class="col-md-4">
                        <strong>Profile Completed</strong> 
                        {{$profile->profile_completed}}
                    </div>
                    <div class="col-md-4">
                        <strong>KYC Completed</strong> 
                        {{$profile->kyc_completed}}
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
                </div>
                <div class="card-body">
                    <img src="{{ asset($profile->photo ) }}" width="150" style="display: block;margin-left: auto;margin-right: auto;">
                    <hr><strong>Full Name:</strong> {{$profile->fullname}}
                    <hr><strong>Date of Birth:</strong> {{$profile->dob}}
                    @if(!empty($profile->domicile_certificate))
                    <a href="{{$profile->domicile_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                    
                    <hr><strong>Gender:</strong> {{$profile->gender}}
                    <hr><strong>Email:</strong> {{$profile->email}}
                    <hr><strong>Mobile:</strong> {{$profile->mobile}}
                    <hr><strong>Religion:</strong> {{$profile->religion}}

                    <hr><strong>Caste</strong> {{$profile->caste->caste_name}}

                    @if(!empty($profile->caste_certificate))
                    <a href="{{$profile->caste_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif

                    <hr><strong>Marital Status:</strong> {{$profile->marital_status}}
                    <hr><strong>Single Parent:</strong> {{$profile->single_parent}}
                    @if(!empty($profile->death_certificate))
                    <a href="{{$profile->death_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif

                    <hr><strong>Physically handicapped:</strong> {{$profile->handicapped}}
                    @if(!empty($profile->physically_handicapped_certificate))
                    <a href="{{$profile->physically_handicapped_certificate}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif

                    <hr><strong>Aadhar Number</strong> {{$profile->aadharnumber}} &nbsp; &nbsp; 

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
                </div>
                <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Father Name:</strong> {{$profile->father_name}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Father Education</strong> {{$profile->father_edu}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Father occupation:</strong> {{$profile->father_occupation}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Mother Name:</strong> {{$profile->mother_name}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Mother Education</strong> {{$profile->mother_edu}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Mother occupation:</strong> {{$profile->mothers_occupation}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Parents Contact Number</strong> {{$profile->parents_mobile}}
                                </div>
                                <div class="col-md-6">
                                    <strong>Parents Annual Income</strong> {{$profile->annual_income}}
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
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Current Course:</strong> {{$profile->course_name->course_name ?? '  '}}
                                </div>
                                <div class="col-md-4">
                                     <strong>Current Year:</strong> {{$profile->current_year}}
                                </div>
                                <div class="col-md-4">
                                     <strong>Course Pattern:</strong> {{$profile->course_pattern}}
                                     @if(!empty($profile->clg_id_card))
                    <a href="{{$profile->clg_id_card}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                    
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <hr>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <strong>Current Institute</strong> {{$profile->current_inst_name}}<br>{{$profile->inst_address}}
                                    @if(!empty($profile->admission_letter))
                    <a href="{{$profile->admission_letter}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                </div>
                                
                            </div>
                            
                            
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Tution Fees:</strong> {{$profile->tution_fees}}
                                    @if(!empty($profile->currentyear_fees_reciept))
                    <a href="{{$profile->currentyear_fees_reciept}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                </div>
                                <div class="col-md-4">
                                    <strong>Non Tution Fees:</strong> {{$profile->non_tution_fees}}
                                </div>
                                <div class="col-md-4">
                                    <strong>Hostel Fees:</strong> {{$profile->hostel_fees}}
                                    @if(!empty($profile->hostel_reciept))
                    <a href="{{$profile->hostel_reciept}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Educational Details
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                            
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <th>Course</th>
                                    <th>Institute Name</th>
                                    <th>State</th>
                                    <th>Passing Year</th>
                                    <th>Percentage</th>
                                </thead>
                                <tbody>
                                  
                                  @if(!empty($profile->class_10_school_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Class 10</td>
                                        <td>{{$profile->class_10_school_name}}</td>
                                        <td>{{$profile->class_10_state}}</td>
                                        <td>{{$profile->school_passing}}</td>
                                        <td>{{$profile->school_percentage}}
                                            @if(!empty($profile->class10_marksheet))
                    <a href="{{$profile->class10_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>


                                    </tr>
                                    @endif

                                    @if(!empty($profile->class_12_clg_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Class 12</td>
                                        <td>{{$profile->class_12_clg_name}}</td>
                                        <td>{{$profile->class_12_state}}</td>
                                        <td>{{$profile->class_12_passing_yeat}}</td>
                                        <td>{{$profile->class_12_percentage}}
                                            @if(!empty($profile->class12_marksheet))
                    <a href="{{$profile->class12_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>
                                    </tr>
                                    @endif

                                    @if(!empty($profile->diploma_clg_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Diploma Details</td>
                                        <td>{{$profile->diploma_clg_name}}</td>
                                        <td>{{$profile->diploma_state}}</td>
                                        <td>{{$profile->diploma_passing_year}}</td>
                                        <td>{{$profile->diploma_percentage}}
                                            @if(!empty($profile->diploma_marksheet))
                    <a href="{{$profile->diploma_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>
                                    </tr>
                                    @endif

                                    @if(!empty($profile->grad_clg_name))
                                    <tr>
                                        <td style="background-color: #2f353a;border-color: #40484f;color: #fff;font-weight: bold;">Graduation Details</td>
                                        <td>{{$profile->grad_clg_name}}</td>
                                        <td>{{$profile->grad_state}}</td>
                                        <td>{{$profile->grad_passing_year}}</td>
                                        <td>{{$profile->grad_percentage}}
                                            @if(!empty($profile->graduation_marksheet))
                    <a href="{{$profile->graduation_marksheet}}" style="text-decoration: none; float: right;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                    @endif
                                        </td>
                                    </tr>
                                    @endif
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
                    
                    </div>
                    <div class="card-body">
                        <strong>Current Address :</strong> {{$profile->current_add}} &nbsp {{$profile->pincode}}<br>
                        <strong>Current City:</strong> {{$profile->current_city}}<br>
                        <strong>Current State:</strong> {{$profile->current_state}}
                        <hr>
                        <strong>Permanent Address :</strong> {{$profile->permanent_add}} &nbsp {{$profile->permanent_pincode}}<br>
                        <strong>Permanent City:</strong> {{$profile->permanent_city}}<br>
                        <strong>Permanent State:</strong> {{$profile->permanent_state}}
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
                            
                        </thead>
                        <tbody>
                            @foreach(App\StudStatus::where('user_id',$profile->user_id)->get() as $status)
                            <tr>
                                <td><h5>{{$status->scheme_name}}</h5></td>
                                <td><h5>
                                        {{  \Carbon\Carbon::parse($status->created_at)->format('j F Y') }}  </h5>
                                </td>
                                <td><h5><span class="badge badge-success">{{$status->status}}</span> <br><br>
                                     
                                </td>
                                        

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

@endsection
@section('scripts')
@parent

@endsection