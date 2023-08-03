@extends('layouts.main')
@section('content')
    <!-- Testimonial Section End -->
<style type="text/css">
    span,p{
        white-space: nowrap; 
        overflow: hidden;
        text-overflow: ellipsis;
    }

    span:hover,p:hover{
        overflow: visible;
    }
</style>
<div class="container" style="margin-top: 50px;">
    <div class="row">
            @foreach($achievers as $achiever)
            <div class="col-md-4">
                <div class="testimonial__item" style="max-height:500px;">
                    @if(App\StudentProfile::where('fullname',$achiever->student_name)->exists())
                        
                        @foreach(App\StudentProfile::where('fullname',$achiever->student_name)->get() as $photo)
                        
                        <img src="{{asset($photo->photo)}}" alt="" style="vertical-align: middle;width: 100px;height: 100px;border-radius: 50%;">
                        @endforeach
                    @else
                        <img src="{{asset('external/img/testimonial/testimonial-2.png')}}" alt="">
                    @endif
                        <h5>{{$achiever->student_name}}</h5>
                        <span>{{$achiever->collegename}}</span>
                         <span style="color: grey;font-weight: bold;">{{$achiever->students_city}}</span>
                            <p>
                                <b>Course:</b>{{$achiever->course}}
                                <hr>
                                <b>Scholarship Amount Recieved:</b>{{$achiever->scholarshipamount}}<hr>
                                <b>Scholarships Recieved From:</b>
                                {!! $achiever->schemename !!}
                            </p>

                </div>
                <br><br><br><br>
            </div>
            @endforeach

        </div>

        {{$achievers->links()}}
    
</div>
        
        
        


@endsection