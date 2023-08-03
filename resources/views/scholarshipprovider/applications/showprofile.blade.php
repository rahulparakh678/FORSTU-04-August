@extends('layouts.scholarshipprovider')
@section('content')
<div class="content">
     
    <div style="float: right;">
       
        <a href="{{route('Shortlised',$s_id)}}" class="btn btn-xs btn-dark">Shortlist</a>
        <a href="{{route('Rejected',$s_id)}}" class="btn btn-xs btn-danger">Better Luck Next Time</a>
        <a href="{{route('Awarded',$s_id)}}" class="btn btn-xs btn-success">Award Scholarship</a>
       
    </div>
    
     
    
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <strong>Current Status</strong>:&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-primary "> {{$results->status ?? ''}}</span>
                </div>

            </div>
        </div>
    </div>
    
    <div class="form-group">
                <a class="btn btn-primary" href="{{ URL::previous() }}">
                    Back   {{$s_id}}
                </a>
                
                
                
                
               
                
                
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Personal Details {{$profile->user_id}} {{$profile->id}}

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

                    {{--<hr><strong>Caste</strong> {{$profile->caste->caste_name}} --}}

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
                    <hr>
                    <strong>Parents Aadhar Card</strong>
                     @if(!empty($profile->paadhar))
                    <a href="{{$profile->paadhar}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
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
                                    <strong>Current Course:</strong> {{$profile->course_name->course_name ?? ''}}
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
        </div>
    </div>
</div>
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
                    <th>Document Link</th>
                    
                    </thead>
                    <tbody>
                        {{--
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
                                @if(!empty($profile->pan_Card))
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
                        --}}
                        @foreach($doc_results as $doc_result)
                        <tr>
                            <td>{{$doc_result->document_name}}</td>
                            <td>
                                @switch ($doc_result->document_name) 
                                    
                                    @case ('Photo')
                                        <a href="{{$profile->photo ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        
                                        @break;
                                    @case ('Aadhar card')
                                        <a href="{{$profile->aadhar_card ?? ''}}" style="text-decoration: none; " target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        
                                        @break;
                                    @case ('Parents Aadhar Card')
                                        <a href="{{$profile->paadhar ?? ''}}" style="text-decoration: none; " target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        
                                        @break;
                                        
                                    @case ('Address Proof')
                                        <a href="{{$profile->address_proof ?? ''}}" style="text-decoration: none; " target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        
                                        @break;
                                    @case ('Caste Certificate')
                                        <a href="{{$profile->caste_certificate ?? ''}}" style="text-decoration: none; " target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        
                                        @break;
                                    @case ('Domicile Certificate')
                                        
                                        <a href="{{$profile->caste_certificate ?? ''}}" style="text-decoration: none; " target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Income Certificate')
                                        <a href="{{$profile->income_certificate ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Bank Passbook')
                                        <a href="{{$profile->bank_passbook ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Fee Structure')
                                        {{$profile->aadhar_card ?? ''}}
                                        @break;
                                    @case ('College/School ID Card')
                                        
                                        <a href="{{$profile->clg_id_card ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Bonafide Certificate')
                                        <a href="{{$profile->bonafide_certificate ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Admission Letter/ Allotment Letter')
                                        <a href="{{$profile->admission_letter ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Current Year Fees Reciept')
                                        
                                        <a href="{{$profile->currentyear_fees_reciept ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Hostel Fees Reciept')
                                        <a href="{{$profile->hostel_reciept ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Class 10 Marksheet')
                                        
                                        <a href="{{$profile->class10_marksheet ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Previous Year/Previous Semester Marksheet')
                                        <a href="{{$profile->previous_marksheet ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        
                                        @break;
                                    @case ('Recommendation Letter')
                                        <a href="{{$profile->pan_card ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Ration Card')
                                        <a href="{{$profile->ration_card ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @case ('Class 12 Marksheet')
                                        <a href="{{$profile->class12_marksheet ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                             
                                           
                                            
                                    @case ('Diploma Marksheet')
                                        <a href="{{$profile->diploma_marksheet ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        
                                        @break;
                                    @case ('Graduation Marksheet')
                                    
                                        <a href="{{$profile->graduation_marksheet ?? ''}}" style="text-decoration: none;" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>
                                        @break;
                                    @default
                                        // Handle the case if the document name //doesn't match any specific condition
                                        @break;
                                @endswitch
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