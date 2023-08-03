@extends('layouts.scholarshipprovider')
@section('content')

<div class="content">
    <div class="row">

                
        <div class="col-md-8">
        
            <div class="card border-primary">
                <div class="card-header">
                   <h1>{{$scholarships->scheme_name}}</h1>
                </div>

                <div class="card-body">
                    <h3 class="card-title">What is {{$scholarships->scheme_name}} ?</h3>
                    @if(!empty($scholarships->scheme_description))
                        {!! $scholarships->scheme_description !!}
                        <hr>
                    @endif


                    @if(!empty($scholarships->eligibility_criteria))
                        <h3 class="card-title">What is Eligibility Criteria ?</h3>
                        {!!$scholarships->eligibility_criteria!!}
                        <hr>
                    @endif

                    @if(!empty($scholarships->benefits))
                        <h3 class="card-title">What are benefits ?</h3>
                        {!!$scholarships->benefits!!}
                        <hr>
                    @endif

                    @if(!empty($scholarships->how_to_apply))
                    <h3 class="card-title">How to Apply? </h3>
                    {!!$scholarships->how_to_apply!!}

                    <hr>
                    @endif

                    @if(!empty($scholarships->last_date))
                    <h3 class="card-title">Deadline ?</h3>
                        {{  \Carbon\Carbon::parse($scholarships->last_date)->format('j F Y') }}

                        <hr>
                    @endif

                    @if(!empty($scholarships->docs_required))
                        <h3 class="card-title">What are documents required ?</h3>
                            {!!$scholarships->docs_required!!}
                        <hr>
                    @endif

                    @if(!empty($scholarships->terms_conditions))
                        <h3 class="card-title">What are Terms & Conditions ?</h3>
                        {!!$scholarships->terms_conditions!!}

                        <hr>
                    @endif


                    <h3 class="card-title">Contact Details</h3>
                    @if(!empty($scholarships->contact_address))
                        {!!$scholarships->contact_address!!}<br>
                    @endif
                    @if(!empty($scholarships->contact_email))
                        {!!$scholarships->contact_email!!}<br>
                    @endif
                    @if(!empty($scholarships->contact_phone))
                    {!!$scholarships->contact_phone!!}<br>
                    @endif



                    
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
                    Rs 25000 

                    <hr>
                    <h5 >Deadline </h5>
                    <i class="far fa-calendar-check"></i>
                        {{  \Carbon\Carbon::parse($scholarships->last_date)->format('j F Y')  }}<br><br>
                    
                    @if(Auth::check() && Auth::user()->user_type='student')
                    @if(!$scholarships->checkApplication())
                        <form action="{{ route('apply',$scholarships->id)}} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <center>
                                <button class="btn btn-primary  " type="submit">Apply Now</button>
                            </center> 
                        </form>
                            
                    @endif 
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