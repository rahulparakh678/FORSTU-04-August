@extends('layouts.student')
@section('content')

{{--
<div class="alert alert-success" role="alert">
  Enroll into Scholarship Facilitation Centre to view this section. <a href="{{ route('sfc') }}"> Click Here to Enroll Now.</a>
</div>
--}}


@if(!(App\StudentProfile::where('user_id',auth()->user()->id)->exists()))

 <div class="alert alert-danger" role="alert">
  Complete your Profile to View &nbsp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i> This Section
</div>
@else
<h1>Matching Scholarships</h1>
<div class="container">
  <div class="row ">
    @foreach($scholarships as $scholarship)
    @foreach($scholarship->courses as $key => $courses)
    @if(($profile->student_course_name_id==$courses->id) || ($profile->course_name_id==$courses->id))

    
              @if(($scholarship->gender_criteria === 'female' || $scholarship->gender_criteria === 'both' ) && $profile->gender==='female')
              
              <div class="col-md-4">
      <div class="card border-primary">
        <img class="card-img-top" src="{{ asset('avatar\main2.png')}}" alt="Card image cap" style="width: 50%; align-self: center;">
        <div class="card-body">
          <div class="card-title"><strong><center>{{
            $scholarship->scheme_name}}</center></strong>
          </div>

            <hr>
          
            <i class="fas fa-trophy" aria-hidden="true"></i>&nbsp;
            <strong>Scholarship Amount : </strong>{{
            $scholarship->scholarship_amount}}
          
            <hr>
          
            <a href="{{ route('showdetails',$scholarship->id)}}">
              <center><button class="btn btn-primary ">View Details</button></center></a>
              <br>


              @elseif(($scholarship->gender_criteria === 'male' || $scholarship->gender_criteria === 'both') && $profile->gender ==='male') 
                

              <div class="col-md-4">
      <div class="card border-primary">
        <img class="card-img-top" src="{{ asset('avatar\main2.png')}}" alt="Card image cap" style="width: 50%; align-self: center;">
        <div class="card-body">
          <div class="card-title"><strong><center>{{
            $scholarship->scheme_name}} {{$scholarship->gender_criteria}}</center></strong>
          </div>

            <hr>
          
            <i class="fas fa-trophy" aria-hidden="true"></i>&nbsp;
            <strong>Scholarship Amount : </strong>{{
            $scholarship->scholarship_amount}}
          
            <hr>
          
            <a href="{{ route('showdetails',$scholarship->id)}}">
              <center><button class="btn btn-primary ">View Details</button></center></a>
              <br>

              @elseif(($scholarship->gender_criteria === 'trans' || $scholarship->gender_criteria === 'both') && $profile->gender==='other') 
                

              <div class="col-md-4">
      <div class="card border-primary">
        <img class="card-img-top" src="{{ asset('avatar\main2.png')}}" alt="Card image cap" style="width: 50%; align-self: center;">
        <div class="card-body">
          <div class="card-title"><strong><center>{{
            $scholarship->scheme_name}} {{$scholarship->gender_criteria}}</center></strong>
          </div>

            <hr>
          
            <i class="fas fa-trophy" aria-hidden="true"></i>&nbsp;
            <strong>Scholarship Amount : </strong>{{
            $scholarship->scholarship_amount}}
          
            <hr>
          
            <a href="{{ route('showdetails',$scholarship->id)}}">
              <center><button class="btn btn-primary ">View Details</button></center></a>
              <br>


              @else
                
              @endif
              
        </div>
      </div>
    </div>
    @endif
    @endforeach
    @endforeach
  </div>
</div> 

@endif

@endsection
