@extends('layouts.student')

@section('content')

<br>
<div class="card" id="address_details">
	<div class="card-header">
		<div class="card-title">
			Communication Details
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('storeaddress')}}" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="communicationdetails_completed" value="Yes">
            	<div class="form-group">
                	<label class="required" for="current_add">{{ trans('cruds.studentDetail.fields.current_add') }}</label>
                	<input class="form-control {{ $errors->has('current_add') ? 'is-invalid' : '' }}" type="text" name="current_add" id="current_add" value="{{ old('current_add', $profile->current_add) }}" required>
               		 @if($errors->has('current_add'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('current_add') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.current_add_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="current_state">{{ trans('cruds.studentDetail.fields.current_state') }}</label>
                	<select class="form-control {{ $errors->has('current_state') ? 'is-invalid' : '' }}" name="current_state" id="current_state" required>
                    	<option value disabled {{ old('current_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    	@foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                        	<option value="{{ $key }}" {{ old('current_state',$profile->current_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    	@endforeach
                	</select>
                	@if($errors->has('current_state'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('current_state') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.current_state_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="current_city">Current District</label>
                	<input class="form-control {{ $errors->has('current_city') ? 'is-invalid' : '' }}" type="text" name="current_city" id="current_city" value="{{ old('current_city',$profile->current_city) }}" required>
                	@if($errors->has('current_city'))
                    	<div class="invalid-feedback">
                       	 {{ $errors->first('current_city') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.current_city_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="pincode">{{ trans('cruds.studentDetail.fields.pincode') }}</label>
                	<input class="form-control {{ $errors->has('pincode') ? 'is-invalid' : '' }}" type="number" name="pincode" id="pincode" value="{{ old('pincode', $profile->pincode) }}" step="1" required>
                		@if($errors->has('pincode'))
                    		<div class="invalid-feedback">
                        		{{ $errors->first('pincode') }}
                    		</div>
                		@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.pincode_helper') }}</span>
            	</div>
            	<hr>
            	<div class="form-group">
                	<label>Same as above</label>
                	<input type="checkbox" name="address" id="address">
            	</div>
            	<div class="form-group">
                	<label class="required" for="permanent_add">{{ trans('cruds.studentDetail.fields.permanent_add') }}</label>
                	<input class="form-control {{ $errors->has('permanent_add') ? 'is-invalid' : '' }}" type="text" name="permanent_add" id="permanent_add" value="{{ old('permanent_add', $profile->permanent_add) }}" required>
                	@if($errors->has('permanent_add'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('permanent_add') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_add_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="permanent_state">{{ trans('cruds.studentDetail.fields.permanent_state') }}</label>
                
                	<select class="form-control {{ $errors->has('permanent_state') ? 'is-invalid' : '' }}" name="permanent_state" id="permanent_state" required>
                    	<option value disabled {{ old('permanent_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    	@foreach(App\StudentProfile::STATE_SELECT as $key => $label)
                        	<option value="{{ $key }}" {{ old('permanent_state', $profile->permanent_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    	@endforeach
                	</select>
                	@if($errors->has('permanent_state'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('permanent_state') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_state_helper') }}</span>
           		</div>
           		<div class="form-group">
                	<label class="required" for="permanent_city">Permanent District</label>
                	<input class="form-control {{ $errors->has('permanent_city') ? 'is-invalid' : '' }}" type="text" name="permanent_city" id="permanent_city" value="{{ old('permanent_city',$profile->permanent_city) }}" required>
                	@if($errors->has('permanent_city'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('permanent_city') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_city_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="permanent_pincode">{{ trans('cruds.studentDetail.fields.permanent_pincode') }}</label>
                	<input class="form-control {{ $errors->has('permanent_pincode') ? 'is-invalid' : '' }}" type="number" name="permanent_pincode" id="permanent_pincode" value="{{ old('permanent_pincode', $profile->permanent_pincode) }}" step="1" required>
                	@if($errors->has('permanent_pincode'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('permanent_pincode') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.permanent_pincode_helper') }}</span>
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
@endsection
@section('scripts')
<script type="text/javascript">
    function setadd()
    {
        if($("#address").is(":checked")){
            
            $('#permanent_add').val($('#current_add').val());
            $('#permanent_state').val($('#current_state').val());
            $('#permanent_city').val($('#current_city').val());
            $('#permanent_pincode').val($('#pincode').val());

            
        }
        else{
            $('#permanent_add').val('');
            $('#permanent_state').val('');
            $('#permanent_city').val('');
            $('#permanent_pincode').val('');
        }
    }

    $('#address').click(function(){
        setadd();
    })
</script>

@endsection