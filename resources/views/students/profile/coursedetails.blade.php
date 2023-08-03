@extends('layouts.student')

@section('content')

{{--
DB_CONNECTION=mysql
DB_HOST=aa14wayuwdv2txn.clmjwc5vgk2o.ap-south-1.rds.amazonaws.com
DB_PORT=3306
DB_DATABASE=ebdb
DB_USERNAME=root
DB_PASSWORD=password
--}}

<div class="card" id="course_details">
	<div class="card-header">
		<div class="card-title">
			Current Course Details
		</div>
		<div class="card-body">
			<form method="POST" action=" {{ route('storecoursedetails')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="currentcoursedetails_completed" value="Yes">
            {{--
            <div class="form-group">
                <label class="required" id="class10_passed_que">Have you passed Class 1O in 2021</label>
                <input type="radio" name="class10_passed" value="YES" id="class10_passed_yes" required> <label id="class10_passed_label_yes">YES</label>
                
                <input type="radio" name="class10_passed" value="NO" id="class10_passed_no"><label id="class10_passed_label_no">NO</label> 
            </div>
            <div class="form-group">
                <label class="required" id="class12_passed_que">Have you passed Class 12 in 2021</label>
                <input type="radio" name="class12_passed" value="YES" id="class12_passed_yes" >
                <label id="class12_yes_label">YES</label>
                <input type="radio" name="class12_passed" value="NO" id="class12_passed_no"> <label id="class12_no_label">NO</label>
            </div>
            <div class="form-group">
                <label class="required" id="diploma_passed_que">Have you passed Diploma Final Year in 2021</label>
                <input type="radio" name="diploma_passed" value="YES" id="diploma_passed_yes">
                 <label id="diploma_yes_label">YES</label>
                <input type="radio" name="diploma_passed" value="NO" id="diploma_passed_no">
                <label id="diploma_no_label">NO</label> 
            </div>
            --}}
          
            <div class="form-group">
                <label for="course_type_id">Course Type</label>
               
               <select name="course_type_id" class="form-control " id="course_type_id"  required>
                                <option value disabled {{ old('course_type_id', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach($course_types as $id => $course_type)
                                <option value="{{$course_type->id}}" {{ old('course_type_id',$profile->course_type_id ?? '') == $course_type->id ? 'selected' : ''}}>{{$course_type->course_type_name}}</option>
                        
                                @endforeach
                            </select>

               
              
                    
            </div>
            
            	<div class="form-group">
                	<label for="student_course_name_id">Course Name</label>
                	<select name="student_course_name_id"  id="student_course_name_id" class="form-control select2"  required>
                        <option value disabled {{ old('student_course_name_id', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    	@foreach($studentcourse as $id => $studentcourses)
                        	<option value="{{$id}}"{{ old('student_course_name_id',$profile->student_course_name_id ?? '') == $id ? 'selected' : ''}}>{{$studentcourses}}</option>
                        
                    	@endforeach
                   

                	</select>
                    
            	</div>
                
                
            	<div class="form-group" >
                	<label for="course_name_id">Specialization</label>
                	<select name="course_name_id"  id="course_name_id" class="form-control select2" required>
                        
                   	 	@foreach($course as $id => $courses)
                       	 <option value="{{$id}}"{{ old('course_name_id',$profile->course_name_id) == $id ? 'selected' : ''}}>{{$courses}}</option>
                        
                    	@endforeach

                	</select>
                    
            	</div>
                
            	<div class="form-group" id="current_year" style="display: none;">
                <label  for="current_year">Current Year</label>
                    <select name="current_year" id="current_year" class="form-control ">
                        <option value disabled {{ old('current_year', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\StudentProfile::CURRENT_YEAR as $key => $label)
                            <option value="{{ $key }}" {{ old('religion', $profile->current_year) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    
                    </select>
                </div>

            	<div class="form-group">
                	<label class="required" for="current_inst_name" id="current_inst_name_label">{{ trans('cruds.studentDetail.fields.current_inst_name') }}</label>
                	<input class="form-control {{ $errors->has('current_inst_name') ? 'is-invalid' : '' }}" type="text" name="current_inst_name" id="current_inst_name" value="{{ old('current_inst_name',$profile->current_inst_name) }}" required>
                	@if($errors->has('current_inst_name'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('current_inst_name') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ 	trans('cruds.studentDetail.fields.current_inst_name_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="inst_address" id="inst_address_label">Address of Institute</label>
                	<input class="form-control {{ $errors->has('inst_address') ? 'is-invalid' : '' }}" type="text" name="inst_address" id="inst_address" value="{{ old('inst_address', $profile->current_inst_name) }}" required>
               		 @if($errors->has('inst_address'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('inst_address') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.inst_address_helper') }}</span>
            	</div>
            	<div class="form-group">
            		<label class="required" for="course_start" id="course_start_label">Course Starting Year/Admission Year</label>
                		<input class="form-control date {{ $errors->has('course_start') ? 'is-invalid' : '' }}" type="text" name="course_start" id="course_start" value="{{ old('course_start',$profile->course_start) }}" required>
                			@if($errors->has('course_start'))
                    		<div class="invalid-feedback">
                        		{{ $errors->first('course_start') }}
                    		</div>
                			@endif
                	
            	</div>
            	<div class="form-group">
                	<label class="required" for="tution_fees" id="tution_fees_label">Tution Fees</label>
                	<small id="fees_label">Enter Amount As Written on Fees Reciept/Fees Structure</small>
                	<input class="form-control {{ $errors->has('tution_fees') ? 'is-invalid' : '' }}" type="number" name="tution_fees" id="tution_fees" value="{{ old('tution_fees', $profile->tution_fees) }}" step="1" required>
                	@if($errors->has('tution_fees'))
                    	<div class="invalid-feedback">
                        {{ $errors->first('tution_fees') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.tution_fees_helper') }}</span>
            	</div>
                <div class="form-group">
                    <label class="required" for="non_tution_fees" id="tution_fees_label">Non Tution Fees</label>
                    <small id="fees_label">Enter Amount As Written on Fees Reciept/Fees Structure</small>
                    <input class="form-control {{ $errors->has('non_tution_fees') ? 'is-invalid' : '' }}" type="number" name="non_tution_fees" id="non_tution_fees" value="{{ old('non_tution_fees', $profile->non_tution_fees) }}" step="1" required>
                    @if($errors->has('tution_fees'))
                        <div class="invalid-feedback">
                        {{ $errors->first('non_tution_fees') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.studentDetail.fields.tution_fees_helper') }}</span>
                </div>

            	<div class="form-group">
                	<button class="btn btn-danger btn-block" type="submit">
                	Save Details
                	</button>
            	</div>

        	</form>
		</div>
	</div>
</div>
<style type="text/css">
	.ui-datepicker-calendar {
    display: none;
 }
</style>
@endsection
@section('scripts')

<script type="text/javascript">
     $("#course_type_id").change(function(){
            $.ajax({
                url: "{{ route('getcourse') }}?course_type_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#course_name_id').html(data.html);
                    
                    
                }
            });
        });
</script>
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
<script type="text/javascript">
    $("#course_type_id").on("change",fun_showdetails);
    function fun_showdetails()
    {
    	var select_status=$("#course_type_id").val();

    	if (select_status>2 && select_status<8) {
    		$('#current_year').show();
    	}
    	else
    	{
    		$('#current_year').hide();
    	}
    }
 </script>
 <script type="text/javascript">
 	
    $("#class10_passed_yes").on("click",ssc_passed_yes);
    $("#class10_passed_no").on("click",ssc_passed_no);
    function ssc_passed_yes()
    {
        //alert('yes');

        
        document.getElementById("current_inst_name").removeAttribute("required");
        document.getElementById("inst_address").removeAttribute("required");
        document.getElementById("course_start").removeAttribute("required");
        document.getElementById("tution_fees").removeAttribute("required");
        document.getElementById("class12_passed_yes").removeAttribute("required");
        document.getElementById("diploma_passed_yes").removeAttribute("required");
       
        $('#current_inst_name').hide();
        $('#inst_address').hide();
        $('#course_start').hide();
        $('#tution_fees').hide();
        $('#current_inst_name_label').hide();
        $('#inst_address_label').hide();
        $('#course_start_label').hide();
        $('#tution_fees_label').hide();
        $('#fees_label').hide();
        $('#class12_passed_yes').hide();
        $('#class12_passed_no').hide();
        $('#class12_passed_que').hide();
        $('#class12_no_label').hide();
        $('#class12_yes_label').hide();
        $('#diploma_passed_que').hide();
        $('#diploma_no_label').hide();
       
        $('#diploma_passed_yes').hide();
        $('#diploma_passed_no').hide();
        $('#diploma_yes_label').hide();
           
       //$('#course_name_id').removeClass('select2');
        
        //$('#course_type_id').val('2');
        $("#course_type_id option[value=2]").attr('selected','selected');
         
          $.ajax({
                url: "{{ route('setcourse') }}?course_name_id=" +535,
                method: 'GET',
                success: function(data) {
                    $('#course_name_id').html(data.html);
                    
                    
                }
            });

        $.ajax({
                url: "{{ route('setstudentcourse') }}?student_course_name_id=" +135,
                method: 'GET',
                success: function(data) {
                    $('#student_course_name_id').html(data.html);
                    
                    
                }
            });
       
        
            
       


        //var abc=$('#hidden_course_type_id').val();
        //alert(abc);
        //$("#course_name_id option[value=538]").attr('selected','selected');
              
       
      
        

    }
    function ssc_passed_no()
    {
        
        
       $('#current_inst_name').show();
        $('#inst_address').show();
        $('#course_start').show();
        $('#tution_fees').show();
        $('#current_inst_name_label').show();
        $('#inst_address_label').show();
        $('#course_start_label').show();
        $('#tution_fees_label').show();
        $('#fees_label').show();
        $('#class12_passed_yes').show();
        $('#class12_passed_no').show();
        $('#class12_passed_que').show();
        $('#class12_no_label').show();
        $('#class12_yes_label').show();
        $('#diploma_passed_que').show();
        $('#diploma_no_label').show();
       
        $('#diploma_passed_yes').show();
        $('#diploma_passed_no').show();
        $('#diploma_yes_label').show();
        document.getElementById("current_inst_name").setAttribute("required","");
        document.getElementById("inst_address").setAttribute("required","");
        document.getElementById("course_start").setAttribute("required","");
        document.getElementById("tution_fees").setAttribute("required","");
        document.getElementById("class12_passed_yes").setAttribute("required","");
        document.getElementById("diploma_passed_yes").setAttribute("required","");
        document.getElementById("course_type_id").setAttribute("required","");
        document.getElementById("course_name_id").setAttribute("required","");
        document.getElementById("student_course_name_id").setAttribute("required","");

        

        //document.getElementById("course_name_id").classList.add('select2');
        
       

        $("#course_type_id")[0].selectedIndex = 0;
        $("#course_name_id")[0].selectedIndex = 0;
        $("#student_course_name_id")[0].selectedIndex = 0;
    }
    $("#class12_passed_yes").on("change",class12_passed_yes);
    $("#class12_passed_no").on("change",class12_passed_no);
    function class12_passed_yes()
    {
       

        
        document.getElementById("current_inst_name").removeAttribute("required");
        document.getElementById("inst_address").removeAttribute("required");
        document.getElementById("course_start").removeAttribute("required");
        document.getElementById("tution_fees").removeAttribute("required");
        document.getElementById("diploma_passed_yes").removeAttribute("required");
        $('#current_inst_name').hide();
        $('#inst_address').hide();
        $('#course_start').hide();
        $('#tution_fees').hide();
        $('#current_inst_name_label').hide();
        $('#inst_address_label').hide();
        $('#course_start_label').hide();
        $('#tution_fees_label').hide();
        $('#fees_label').hide();

        
        $('#class10_passed_que').hide();
        $('#class10_passed_yes').hide();
        $('#class10_passed_no').hide();
        $('#class10_no_label').hide();
        $('#class10_yes_label').hide();
        
        $('#class10_passed_label_no').hide();
        $('#class10_passed_label_yes').hide();

       
        $('#diploma_passed_que').hide();
        $('#diploma_no_label').hide();
       
        $('#diploma_passed_yes').hide();
        $('#diploma_passed_no').hide();
        $('#diploma_yes_label').hide();

         //$('#course_type_id').val('2');
        $("#course_type_id option[value=4]").attr('selected','selected');

          $.ajax({
                url: "{{ route('setcourse') }}?course_name_id=" +534,
                method: 'GET',
                success: function(data) {
                    $('#course_name_id').html(data.html);
                    
                    
                }
            });

        $.ajax({
                url: "{{ route('setstudentcourse') }}?student_course_name_id=" +136,
                method: 'GET',
                success: function(data) {
                    $('#student_course_name_id').html(data.html);
                    
                    
                }
            });
       
        //$("#course_name_id option[value=539]").attr('selected','selected');
        
        //$("#student_course_name_id option[value=136]").attr('selected','selected');

       

       
        
        
        
        
        
    }
     function class12_passed_no()
    {
        
        
       $('#current_inst_name').show();
        $('#inst_address').show();
        $('#course_start').show();
        $('#tution_fees').show();
        $('#current_inst_name_label').show();
        $('#inst_address_label').show();
        $('#course_start_label').show();
        $('#tution_fees_label').show();
        $('#fees_label').show();

        $('#class10_passed_yes').show();
        $('#class10_passed_no').show();
        $('#class10_passed_que').show();
        $('#class10_no_label').show();
        $('#class10_yes_label').show();
        $('#class10_passed_label_no').show();
        $('#class10_passed_label_yes').show();

        $('#diploma_passed_que').show();
        $('#diploma_no_label').show();
       
        $('#diploma_passed_yes').show();
        $('#diploma_passed_no').show();
        $('#diploma_yes_label').show();
       
        document.getElementById("current_inst_name").setAttribute("required","");
        document.getElementById("inst_address").setAttribute("required","");
        document.getElementById("course_start").setAttribute("required","");
        document.getElementById("tution_fees").setAttribute("required","");
        document.getElementById("course_type_id").setAttribute("required","");
        document.getElementById("course_name_id").setAttribute("required","");
        document.getElementById("student_course_name_id").setAttribute("required","");
        document.getElementById("diploma_passed_yes").setAttribute("required","");
        
       
        $("#course_type_id")[0].selectedIndex = 0;
        $("#course_name_id")[0].selectedIndex = 0;
        $("#student_course_name_id")[0].selectedIndex = 0;


    }
    $("#diploma_passed_yes").on("change",diploma_passed_yes);
    $("#diploma_passed_no").on("change",diploma_passed_no);
    function diploma_passed_yes()
    {
        

        
        document.getElementById("current_inst_name").removeAttribute("required");
        document.getElementById("inst_address").removeAttribute("required");
        document.getElementById("course_start").removeAttribute("required");
        document.getElementById("tution_fees").removeAttribute("required");
        $('#current_inst_name').hide();
        $('#inst_address').hide();
        $('#course_start').hide();
        $('#tution_fees').hide();
        $('#current_inst_name_label').hide();
        $('#inst_address_label').hide();
        $('#course_start_label').hide();
        $('#tution_fees_label').hide();
        $('#fees_label').hide();
        
        
        $('#class10_passed_yes').hide();
        $('#class10_passed_no').hide();
        $('#class10_passed_que').hide();
        $('#class10_no_label').hide();
        $('#class10_yes_label').hide();
        $('#class10_passed_label_no').hide();
        $('#class10_passed_label_yes').hide();

        $('#class12_passed_yes').hide();
        $('#class12_passed_no').hide();
        $('#class12_passed_que').hide();
        $('#class12_no_label').hide();
        $('#class12_yes_label').hide();
        
        $("#course_type_id option[value=4]").attr('selected','selected');
          

       

        $("#course_type_id option[value=4]").attr('selected','selected');

          $.ajax({
                url: "{{ route('setcourse') }}?course_name_id="+541,
                method: 'GET',
                success: function(data) {
                    $('#course_name_id').html(data.html);
                    
                    
                }
            });

        $.ajax({
                url: "{{ route('setstudentcourse') }}?student_course_name_id="+137,
                method: 'GET',
                success: function(data) {
                    $('#student_course_name_id').html(data.html);
                    
                    
                }
            });
              
        
       
        
        
        
    }
     function diploma_passed_no()
    {
        
        
        $('#current_inst_name').show();
        $('#inst_address').show();
        $('#course_start').show();
        $('#tution_fees').show();
        $('#current_inst_name_label').show();
        $('#inst_address_label').show();
        $('#course_start_label').show();
        $('#tution_fees_label').show();
        $('#fees_label').show();
        $('#class12_passed_yes').show();
        $('#class12_passed_no').show();
        $('#class12_passed_que').show();
        $('#class12_no_label').show();
        $('#class12_yes_label').show();

        $('#class10_passed_label_no').show();
        $('#class10_passed_label_yes').show();
        $('#class10_passed_yes').show();
        $('#class10_passed_no').show();
        $('#class10_passed_que').show();
        $('#class10_no_label').show();
        $('#class10_yes_label').show();
        document.getElementById("current_inst_name").setAttribute("required","");
        document.getElementById("inst_address").setAttribute("required","");
        document.getElementById("course_start").setAttribute("required","");
        document.getElementById("tution_fees").setAttribute("required","");
        document.getElementById("course_type_id").setAttribute("required","");
        document.getElementById("course_name_id").setAttribute("required","");
        document.getElementById("student_course_name_id").setAttribute("required","");

         
         
       
        $("#course_type_id")[0].selectedIndex = 0;
        $("#course_name_id")[0].selectedIndex = 0;
        $("#student_course_name_id")[0].selectedIndex = 0;
    }
 </script>
@endsection