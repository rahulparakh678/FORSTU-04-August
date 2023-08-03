@extends('layouts.student')

@section('content')

@if(App\StudentProfile::where('user_id',auth()->user()->id)->exists())

<div class="card" id="personal_details">
	<div class="card-header">
		<div class="card-title">
			Personal Details
		</div>
		<div class="card-body">
			<form method="POST" action="{{route('storedetails')}} " enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
				<input type="hidden" name="ref_code" value="{{auth()->user()->ref_code}}">
				<input type="hidden" name="personaldetails_completed" value="Yes">
				<div class="form-group">
					 <label class="required" for="fullname">{{ trans('cruds.studentDetail.fields.fullname') }}</label>
					 <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text" name="fullname" id="fullname" value="{{ old('fullname', auth::user()->name) }} " required>
					 @if($errors->has('fullname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.fullname_helper') }}</span>
				</div>
				<div class="form-group">
                	<label class="required" for="email">{{ trans('cruds.studentDetail.fields.email') }}</label>
                	<input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email',auth::user()->email) }}" required>
                	@if($errors->has('email'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('email') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.email_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="mobile">{{ trans('cruds.studentDetail.fields.mobile') }}</label>
                	<input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', auth::user()->mobile) }}" required>
               		 @if($errors->has('mobile'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('mobile') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.mobile_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required">{{ trans('cruds.studentDetail.fields.gender') }}</label>
                	@foreach(App\StudentProfile::GENDER_RADIO as $key => $label)
                    	<div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                        	<input class="" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', auth::user()->gender) === (string) $key ? 'checked' : '' }} required>
                        	<label class="radio-inline" for="gender_{{ $key }}">{{ $label }}</label>
                    	</div>
                	@endforeach
                	@if($errors->has('gender'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('gender') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.gender_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="dob">{{ trans('cruds.studentDetail.fields.dob') }}</label>
                	<input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $profile->dob ?? '') }}" required>
                		@if($errors->has('dob'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('dob') }}
                    	</div>
                		@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.dob_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required">{{ trans('cruds.studentDetail.fields.religion') }}</label>
                	<select class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" id="religion" required>
                    	<option value disabled {{ old('religion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    	@foreach(App\StudentProfile::RELIGION_SELECT as $key => $label)
                        	<option value="{{ $key }}" {{ old('religion',$profile->religion ?? '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    	@endforeach
                	</select>
               		 	@if($errors->has('religion'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('religion') }}
                    	</div>
                		@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.religion_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label for="caste_id">{{ trans('cruds.studentDetail.fields.caste') }}</label>
                	<select class="form-control select2 {{ $errors->has('caste') ? 'is-invalid' : '' }}" name="caste_id" id="caste_id" required>
                   	 	@foreach($castes as $id => $caste)
                        <option value="{{ $id }}" {{ old('caste_id',$profile->caste_id ?? '') == $id ? 'selected' : '' }}>{{ $caste }}</option>
                    	@endforeach
                	</select>
                	@if($errors->has('caste'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('caste') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.caste_helper') }}</span>
            	</div>
            	<div class="form-group" id="physically_handicapped">
                	<label class="required">{{ trans('cruds.studentDetail.fields.handicapped') }}</label>
                	@foreach(App\StudentProfile::HANDICAPPED_RADIO as $key => $label)
                    	<div class="form-check {{ $errors->has('handicapped') ? 'is-invalid' : '' }}">
                        	<input class="form-check-input phhandicapped" type="radio" id="handicapped_{{ $key }}" name="handicapped" value="{{ $key }}" {{ old('handicapped', $profile->handicapped ?? '') === (string) $key ? 'checked' : '' }} required>
                        	<label class="form-check-label" for="handicapped_{{ $key }}">{{ $label }}</label>
                    	</div>
                	@endforeach
                	@if($errors->has('handicapped'))
                    <div class="invalid-feedback">
                        {{ $errors->first('handicapped') }}
                    </div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.handicapped_helper') }}</span>
            	</div>
            	<div class="form-group" >
                	<label>{{ trans('cruds.studentDetail.fields.single_parent') }}</label>
                	
                	<strong><small>Please select Yes if anyone from your parent(Mother/Father) is not alive</small></strong>
               		 @foreach(App\StudentProfile::SINGLE_PARENT_RADIO as $key => $label)
                    	<div class="form-check {{ $errors->has('single_parent') ? 'is-invalid' : '' }}">
                        	<input class="form-check-input singleparent" type="radio" id="single_parent_{{ $key }}" name="single_parent" value="{{ $key }}" {{ old('single_parent',$profile->single_parent ?? '') === (string) $key ? 'checked' : '' }} required>
                        	<label class="form-check-label" for="single_parent_{{ $key }}">{{ $label }}</label>
                    	</div>
                	@endforeach
                	@if($errors->has('single_parent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('single_parent') }}
                    </div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.single_parent_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="aadharnumber">{{ trans('cruds.studentDetail.fields.aadharnumber') }}</label>
               		 <input class="form-control {{ $errors->has('aadharnumber') ? 'is-invalid' : '' }}" type="number" name="aadharnumber" id="aadharnumber" value="{{ old('aadharnumber',$profile->aadharnumber ?? '') }}" pattern="[0-9]{12}" required>
                	@if($errors->has('aadharnumber'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('aadharnumber') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.aadharnumber_helper') }}</span>
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

@else

<div class="card" id="personal_details">
	<div class="card-header">
		<div class="card-title">
			Personal Details
		</div>
		<div class="card-body">
			<form method="POST" action="{{route('storepersonal')}} " enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
				<input type="hidden" name="ref_code" value="{{auth()->user()->ref_code}}">
				<div class="form-group">
					 <label class="required" for="fullname">{{ trans('cruds.studentDetail.fields.fullname') }}</label>
					 <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text" name="fullname" id="fullname" value="{{ old('fullname', auth::user()->name) }} " required>
					 @if($errors->has('fullname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.fullname_helper') }}</span>
				</div>
				<div class="form-group">
                	<label class="required" for="email">{{ trans('cruds.studentDetail.fields.email') }}</label>
                	<input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email',auth::user()->email) }}" required>
                	@if($errors->has('email'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('email') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.email_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="mobile">{{ trans('cruds.studentDetail.fields.mobile') }}</label>
                	<input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', auth::user()->mobile) }}" required>
               		 @if($errors->has('mobile'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('mobile') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.mobile_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required">{{ trans('cruds.studentDetail.fields.gender') }}</label>
                	@foreach(App\StudentProfile::GENDER_RADIO as $key => $label)
                    	<div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                        	<input class="" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', auth::user()->gender) === (string) $key ? 'checked' : '' }} required>
                        	<label class="radio-inline" for="gender_{{ $key }}">{{ $label }}</label>
                    	</div>
                	@endforeach
                	@if($errors->has('gender'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('gender') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.gender_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="dob">{{ trans('cruds.studentDetail.fields.dob') }}</label>
                	<input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob', $profile->dob ?? '') }}" required>
                		@if($errors->has('dob'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('dob') }}
                    	</div>
                		@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.dob_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required">{{ trans('cruds.studentDetail.fields.religion') }}</label>
                	<select class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" id="religion" required>
                    	<option value disabled {{ old('religion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    	@foreach(App\StudentProfile::RELIGION_SELECT as $key => $label)
                        	<option value="{{ $key }}" {{ old('religion',$profile->religion ?? '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    	@endforeach
                	</select>
               		 	@if($errors->has('religion'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('religion') }}
                    	</div>
                		@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.religion_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label for="caste_id">{{ trans('cruds.studentDetail.fields.caste') }}</label>
                	<select class="form-control select2 {{ $errors->has('caste') ? 'is-invalid' : '' }}" name="caste_id" id="caste_id" required>
                   	 	@foreach($castes as $id => $caste)
                        <option value="{{ $id }}" {{ old('caste_id',$profile->caste_id ?? '') == $id ? 'selected' : '' }}>{{ $caste }}</option>
                    	@endforeach
                	</select>
                	@if($errors->has('caste'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('caste') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.caste_helper') }}</span>
            	</div>
            	<div class="form-group" id="physically_handicapped">
                	<label class="required">{{ trans('cruds.studentDetail.fields.handicapped') }}</label>
                	@foreach(App\StudentProfile::HANDICAPPED_RADIO as $key => $label)
                    	<div class="form-check {{ $errors->has('handicapped') ? 'is-invalid' : '' }}">
                        	<input class="form-check-input phhandicapped" type="radio" id="handicapped_{{ $key }}" name="handicapped" value="{{ $key }}" {{ old('handicapped', $profile->handicapped ?? '') === (string) $key ? 'checked' : '' }} required>
                        	<label class="form-check-label" for="handicapped_{{ $key }}">{{ $label }}</label>
                    	</div>
                	@endforeach
                	@if($errors->has('handicapped'))
                    <div class="invalid-feedback">
                        {{ $errors->first('handicapped') }}
                    </div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.handicapped_helper') }}</span>
            	</div>
            	<div class="form-group" >
                	<label>{{ trans('cruds.studentDetail.fields.single_parent') }}</label>
                	
                	<strong><small>Please select Yes if anyone from your parent(Mother/Father) is not alive</small></strong>
               		 @foreach(App\StudentProfile::SINGLE_PARENT_RADIO as $key => $label)
                    	<div class="form-check {{ $errors->has('single_parent') ? 'is-invalid' : '' }}">
                        	<input class="form-check-input singleparent" type="radio" id="single_parent_{{ $key }}" name="single_parent" value="{{ $key }}" {{ old('single_parent',$profile->single_parent ?? '') === (string) $key ? 'checked' : '' }} required>
                        	<label class="form-check-label" for="single_parent_{{ $key }}">{{ $label }}</label>
                    	</div>
                	@endforeach
                	@if($errors->has('single_parent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('single_parent') }}
                    </div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.single_parent_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="aadharnumber">{{ trans('cruds.studentDetail.fields.aadharnumber') }}</label>
               		 <input class="form-control {{ $errors->has('aadharnumber') ? 'is-invalid' : '' }}" type="number" name="aadharnumber" id="aadharnumber" value="{{ old('aadharnumber',$profile->aadharnumber ?? '') }}" pattern="[0-9]{12}" required>
                	@if($errors->has('aadharnumber'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('aadharnumber') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.aadharnumber_helper') }}</span>
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
@endif
@endsection