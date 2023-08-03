@extends('layouts.main')
@section('content')

<div class="jumbotron jumbotron-fluid">
  
  <div class="container">
    @if(session('message'))
                    <div class="row md-12">
                        <div class="col-lg-12">
                            <div class="alert alert-primary" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
    @endif
    <center><h1 class="display-4">Our Services</h1></center>
    <hr>
    <p><h5>FORSTU provides end-to-end management and monitoring of scholarship design,application management,documentation and verification services like student verification,document verification,sreening of students..</h5></p>
  </div>
</div>

<div class="container">
  <div class="card-deck">
  <div class="card">
    
    <div class="card-body">
      <center><span><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i></center>
      <center><h5 class="card-title"><strong>End-to-end Scholarship Management</strong></h5></center>
      <p class="card-text">We provide end-end support to Launch new Scholarship or manage existing one with our Scholarship Management System</p>


            
    </div>
    <div class="card-footer">
     {{--  <small class="text-muted">Last updated 3 mins ago</small> --}}
      
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><span><i class="fa fa-list-alt fa-2x" aria-hidden="true"></i></center>
      <center><h5 class="card-title"><strong>Beneficiary Dedupe Management</strong></h5></center>
      <p class="card-text">We help you prevent deduplication of student beneficiary among different corporates or scholarship providers</p>
    </div>
    <div class="card-footer">
      {{--  <small class="text-muted">Last updated 3 mins ago</small> --}}
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><span><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i></center>
      <center><h5 class="card-title"><strong>Verification Services</strong></h5></center>
      <p class="card-text">We help you conduct interviews as well as verify originality of documents submitted by Students.</p>
      
    </div>
    <div class="card-footer">
      {{--  <small class="text-muted">Last updated 3 mins ago</small> --}}
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <center><span><i class="fa fa-users fa-2x" aria-hidden="true"></i></center>
</span>
      <center><h5 class="card-title"><strong>Promotion</strong></h5></center>
      <p class="card-text">Promote your Scholarship with us digitally as well as offline and get relevant and impactful returns on investment as compared to other media channel.</p>
      
    </div>
    <div class="card-footer">
     {{--  <small class="text-muted">Last updated 3 mins ago</small> --}}
    </div>
  </div>


</div>
</div>

@include('partials.template.impact')

<div class="container-fluid" style="margin-top:50px; background-color:#e9ecef;" id="contact">
  <center><h1 class="display-4">Reach us Out</h1></center>
  <br>
  <center><h5>You can also write to us on <strong>info@forstu.co</strong></h5></center>
  <hr>
  

                

            
  <div class="row">
    <div class="col-md-6">
      <form method="POST" action="{{route('enquiry')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input type="text" name="fullname" class="form-control" placeholder="FullName" id="fullname" required />
        </div>
        <div class="form-group">
          <input type="text" name="orgname" class="form-control" placeholder="Organization Name" required=""  />
        </div>
        <div class="form-group">
          <input type="email" name="emailaddress" class="form-control" placeholder="Your Email Address " required  />
        </div>
        <div class="form-group">
          <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" required="" minlength="10" maxlength="10" />
        </div>
        
        

    </div>
  
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="designation" class="form-control" placeholder="Designation" required="" />
        </div>
      <div class="form-group">
        <textarea placeholder="Comments" class="form-control" name="comments" required=""></textarea>
      </div>
      <div class="form-group">
          <input type="submit" name="btnSubmit" class="btn btn-lg btn-outline-success" value="Submit" />
      </div>

      </form>    
    </div>
  </div>
</div>
@endsection

