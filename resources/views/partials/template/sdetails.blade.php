@extends('layouts.main')
@section('content')

<div class="container">
	
		
	
    <div class="row">

                
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif  

  
            <div class="card border-success " style="margin-bottom: 35px;">
                <div class="card-header">
                   <h3 id="scheme_name" name="scheme_name">{{$scholarships->scheme_name}}</h1>
                </div>

                <div class="card-body" style="margin-left: 1em;">
                    <h3 class="card-title">What is {{$scholarships->scheme_name}} ?</h3>
                    @if(!empty($scholarships->scheme_description))
                        {!! $scholarships->scheme_description !!}
                        <hr>
                    @endif


                    @if(!empty($scholarships->eligibility_criteria))
                        <h3 class="card-title">What is Eligibility Criteria ?</h3>
                        {!!$scholarships->eligibility_criteria!!}

                        <br>
                         <a href="{{$scholarships->video_link}}" target="__blank"><h6 style="margin-top: 1px;"><i class="fa fa-video-camera" aria-hidden="true" ></i> &nbsp Watch this Video to see How to Apply for scholarship</h6></a>
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

                     @if(!empty($scholarships->contact_email && $scholarships->contact_phone ))

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

                    @endif

                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-success" style="margin-bottom: 35px;">
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
                    {{--
                        {{  \Carbon\Carbon::parse($scholarships->last_date)->format('j F Y')  }}<br><br>
                    
                     
                     <center><a href="{{$scholarships->application_link}}" target="__blank" class="btn btn-primary">Apply Now</a></center>  
                     
                     --}}

                    
                </div>
            </div>
            
        </div>
    </div>
</div>

{{--
     <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary py-2 px-4">Click Here !</button> <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
                        <div class="tabs" id="tab01">
                            <h6 class="text-muted">Register</h6>
                        </div>
                        <div class="tabs active" id="tab02">
                            <h6 class="font-weight-bold">Login</h6>
                        </div>
                        <div class="tabs active" id="tab03">
                           
                        </div>
                        <div class="tabs active" id="tab04">
                            
                        </div>                        
                        
                    </div>
                    <div class="line"></div>
                    <div class="modal-body p-0">
                        <fieldset id="tab011">
                            <div class="bg-light">
                                
                                
                                
                            </div>
                            <div class="px-3">
                                
                            </div>
                        </fieldset>
                        <fieldset class="show" id="tab021">
                            <div class="bg-light">
                                <div class="form-group">
                                    
                                </div>
                                
                                
                            </div>
                            <div class="px-3">
                                
                            </div>
                        </fieldset>
                        
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    
--}}
@endsection

@section('scripts')
<script type="text/javascript">
   var title="{{$scholarships->scheme_name}}";
   document.title=title;

   $(document).ready(function(){
        //$("#myModal").modal('show');

    

 
    });
   
</script>

@endsection

