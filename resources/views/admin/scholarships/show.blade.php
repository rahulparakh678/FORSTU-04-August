@extends('layouts.admin')
@section('content')

<div class="content">
    <div class="row">

                
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                {{Session::get('message')}}
                
            </div>
        @endif  
            <div class="card border-primary ">
                <div class="card-header">
                   <h1>{{$scholarships->scheme_name}}</h1>
                </div>

                <div class="card-body">
                    <h3 class="card-title">What is {{$scholarships->scheme_name}} ?</h3>
                    {!! $scholarships->scheme_description !!}

                    <hr>
                    <h3 class="card-title">What is Eligibility Criteria ?</h3>
                    {!!$scholarships->eligibility_criteria!!}

                    <hr>
                    @if($scholarships->benefits!=null)
                    <h3 class="card-title">What are benefits ?</h3>
                    {!!$scholarships->benefits!!}

                    <hr>
                    @endif
                    <h3 class="card-title">How to Apply? </h3>
                    {!!$scholarships->how_to_apply!!}

                    <hr>
                    <h3 class="card-title">Deadline ?</h3>
                     {{  \Carbon\Carbon::parse($scholarships->last_date)->format('j F Y') }}

                    <hr>
                    <h3 class="card-title">What are documents required ?</h3>
                    {!!$scholarships->docs_required!!}

                    <hr>
                    @if($scholarships->terms_conditions!=null)
                    <h3 class="card-title">What are Terms & Conditions ?</h3>
                    {!!$scholarships->terms_conditions!!}

                    <hr>
                    @endif
                    <h3 class="card-title">Contact Details</h3>
                    {!!$scholarships->contact_address!!}<br>
                    {{$scholarships->contact_email}}<br>
                    {{$scholarships->contact_phone_number}}<br>



                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header">
                    Short Info
                </div>

                <div class="card-body">

                   <h5>Eligible Course</h5>
                   <i class="fa fa-graduation-cap"></i>
                   
                    @foreach($studentcourse as $key => $studentcourses)
                                
                        @if(App\StudentCourses::where('id',$studentcourses->course_id)->exists())

                            <?php
                            $result=App\StudentCourses::where('id',$studentcourses->course_id)->first();
                            echo $result->course_name;
                           ?>
                        @endif
                    @endforeach
                    <hr>
                    <h5>Scholarship Amount</h5>
                    <i class="fa fa-trophy"></i>                                    
                    @if($scholarships->scholarship_amount!=null)
                    {{$scholarships->scholarship_amount }}
                    @else
                    
                    Variable Awards
                    @endif
                    <hr>
                    <h5 >Deadline </h5>
                    <i class="far fa-calendar-check"></i>
                        {{  \Carbon\Carbon::parse($scholarships->last_date)->format('j F Y')  }}<br><br>
                    @if(Auth::check() && Auth::user()->user_type='student')
                        <form action=" " method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                                <button class="btn btn-primary  " type="submit">Apply Now</button>
                            </center> 
                        </form>
                            
                        
                    @endif    


                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection