@extends('layouts.student')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" >
                
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><strong>Welcome  {{Auth::user()->name}} in your FORSTU Dashboard</strong></center> <hr>


                    <p>FORSTU is a platform connecting Students with different Scholarship Opportunities globally. FORSTU works as a Scholarship aggregator which helps students to apply for  right Scholarships for them.</p>

                    <p>India has more than 2000+ Scholarships Available But Students find it difficult to apply for all them also misses the scholarship opportunties due lack of time,awareness and correct assistancte towards scholarship.</p>

                     <p>FORSTU also runs a Scholarship Facilitation facilitation center through students application is forwarded to all scholarship providers according to their courses. </p>

                
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Profile Remarks
            </div>
            <div class="card-body">
               
                {!! $profile->profile_remarks ?? '' !!}
                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Student Profile
            </div>
            <div class="card-body">
               <form method="POST" action=" {{route('storbasicdetails')}}" enctype="multipart/form-data">
            @csrf 
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="ref_code" value="{{auth()->user()->ref_code}}">
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" >Full Name</span>
                            <input type="text" class="form-control" name="fullname" placeholder="" value="{{Auth::user()->name}}">
                        </div>
                         
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" >Email Address</span>
                            <input type="text" class="form-control" name="email" placeholder="" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" >Mobile Number</span>
                            <input type="text" class="form-control" name="mobile" placeholder="" value="{{Auth::user()->mobile}}">
                        </div>
                         
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" >Gender</span>
                            <select class="form-control" name="gender">
                                <option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="fullname">State</span>
                            <select class="form-control {{ $errors->has('current_state') ? 'is-invalid' : '' }}" name="current_state" id="state" required>
                                    <option value disabled {{ old('current_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                        @foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('current_state',Auth::user()->state ?? '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                </select>
                            
                        </div>
                         
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="">Course Type</span>
                            <select name="course_type_id" class="form-control " id="course_type_id"  required>
                                <option value disabled {{ old('course_type_id', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach($course_types as $id => $course_type)
                                <option value="{{$course_type->id}}" {{ old('course_type_id',$profile->course_type_id ?? '') == $course_type->id ? 'selected' : ''}}>{{$course_type->course_type_name}}</option>
                        
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="fullname">Course</span>
                            <select name="student_course_name_id"  id="student_course_name_id" class="form-control select2"  required>
                                <option value disabled {{ old('student_course_name_id', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                    @foreach($studentcourse as $id => $studentcourses)
                                        <option value="{{$studentcourses->id}}"{{ old('student_course_name_id',$profile->student_course_name_id ?? '') == $studentcourses->id ? 'selected' : ''}}>{{$studentcourses->course_name}}</option>
                        
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="" class="form-control">Referral Code</span>
                            <input type="text" class="form-control" placeholder="" value="FS00{{Auth::user()->id}}" disabled="">
                            <br><label style="color:red">You can use your Referral Code to refer your friends and earn amazing referral bonus</label>
                        </div>
                    </div>
                                                         
                </div>
                <br>
                <div class="row">
                    @if(isset($profile->id))
                    <div class="col-md-3">
                        <a href="{{ route('personaldetails') }}" class="btn btn-success">Complete Full Profile</a>
                        
                    </div>
                    
                    @else
                    <div class="col-md-3">
                        <button type="submit" class=" btn btn-success">Save Profile</button>
                    </div>
                    
                    @endif       

                    @if(isset($profile->paid))


                    @else
                    
                    <div class="col-md-3">
                        <a href="{{ route('sfc') }}" class="btn btn-success">Enroll in Scholarship Facilitation Centre</a>
                        
                    </div>
                    @endif
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


<div class="whatsappFloater"><a href="https://api.whatsapp.com/send?phone=919373606334&amp;&amp;text=Hi!&nbsp;I’d like to chat with an scholarship expert and know more about FORSTU.&amp;source=&amp;data=" target="_blank" class="color-white"><img src="https://leverageedunew.s3.amazonaws.com/whatsapp-icon-2.svg" style="height:60px;width:60px" id="indexed"></a></div>

<style type="text/css">
    
.whatsappFloater, .whatsappFloater-cf {
                                    position: fixed;
                                    bottom: 20px;
                                    z-index: 9999;
        }
        .whatsappFloater {
    right: 20px;
}
</style>

@endsection
@section('scripts')
<script type="text/javascript">
        $("#course_type_id").change(function(){
    
            $.ajax({
                url: "{{ route('getstudentcourse') }}?course_type_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#student_course_name_id').html(data.html);
                    
                    
                }
            });
        });
     
</script>
@endsection