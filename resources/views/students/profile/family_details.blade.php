@extends('layouts.student')

@section('content')

<div class="card" id="family_details">
	<div class="card-header">
		<div class="card-title">
			Family Details
		</div>
		<div class="card-body">
			<form method="POST" action=" {{ route('storefamily')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="familydetails_completed" value="Yes">
            	<div class="form-group">
                	<label class="required" for="father_name">{{ trans('cruds.studentDetail.fields.father_name') }}</label>
                	<input class="form-control {{ $errors->has('father_name') ? 'is-invalid' : '' }}" type="text" name="father_name" id="father_name" value="{{ old('father_name', $profile->father_name) }}" required>
                		@if($errors->has('father_name'))
                    		<div class="invalid-feedback">
                        		{{ $errors->first('father_name') }}
                    		</div>
               			 @endif
                		<span class="help-block">{{ trans('cruds.studentDetail.fields.father_name_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required">{{ trans('cruds.studentDetail.fields.father_edu') }}</label>
                	<select class="form-control {{ $errors->has('father_edu') ? 'is-invalid' : '' }}" name="father_edu" id="father_edu" required>
                    	<option value disabled {{ old('father_edu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    		@foreach(App\StudentProfile::FATHER_EDU_SELECT as $key => $label)
                        	<option value="{{ $key }}" {{ old('father_edu',$profile->father_edu) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    		@endforeach
                	</select>
                	@if($errors->has('father_edu'))
                    	<div class="invalid-feedback">
                       	 {{ $errors->first('father_edu') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.father_edu_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="father_occupation">{{ trans('cruds.studentDetail.fields.father_occupation') }}</label>
                	<input class="form-control {{ $errors->has('father_occupation') ? 'is-invalid' : '' }}" type="text" name="father_occupation" id="father_occupation" value="{{ old('father_occupation',$profile->father_occupation) }}" required>
                	@if($errors->has('father_occupation'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('father_occupation') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.father_occupation_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="mother_name">{{ trans('cruds.studentDetail.fields.mother_name') }}</label>
                	<input class="form-control {{ $errors->has('mother_name') ? 'is-invalid' : '' }}" type="text" name="mother_name" id="mother_name" value="{{ old('mother_name',$profile->mother_name) }}" required>
                	@if($errors->has('mother_name'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('mother_name') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.mother_name_helper') }}</span>
            	</div>
            	<div class="form-group">
               	 <label class="required">{{ trans('cruds.studentDetail.fields.mother_edu') }}</label>
                	<select class="form-control {{ $errors->has('mother_edu') ? 'is-invalid' : '' }}" name="mother_edu" id="mother_edu" required>
                    	<option value disabled {{ old('mother_edu', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    	@foreach(App\StudentProfile::MOTHER_EDU_SELECT as $key => $label)
                        	<option value="{{ $key }}" {{ old('mother_edu',$profile->mother_edu) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    	@endforeach
                	</select>
                		@if($errors->has('mother_edu'))
                    		<div class="invalid-feedback">
                       	 	{{ $errors->first('mother_edu') }}
                    		</div>
                		@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.mother_edu_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="mothers_occupation">{{ trans('cruds.studentDetail.fields.mothers_occupation') }}</label>
                	<input class="form-control {{ $errors->has('mothers_occupation') ? 'is-invalid' : '' }}" type="text" name="mothers_occupation" id="mothers_occupation" value="{{ old('mothers_occupation',$profile->mothers_occupation) }}" required>
                	@if($errors->has('mothers_occupation'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('mothers_occupation') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.mothers_occupation_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="parents_mobile">{{ trans('cruds.studentDetail.fields.parents_mobile') }}</label>
                	<input class="form-control {{ $errors->has('parents_mobile') ? 'is-invalid' : '' }}" type="text" name="parents_mobile" id="parents_mobile" value="{{ old('parents_mobile',$profile->parents_mobile) }}" required>
                	@if($errors->has('parents_mobile'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('parents_mobile') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.parents_mobile_helper') }}</span>
            	</div>
            	<div class="form-group">
                	<label class="required" for="annual_income">{{ trans('cruds.studentDetail.fields.annual_income') }}</label>
                	<input class="form-control {{ $errors->has('annual_income') ? 'is-invalid' : '' }}" type="number" name="annual_income" id="annual_income" value="{{ old('annual_income', $profile->annual_income) }}"  required>
                	@if($errors->has('annual_income'))
                    	<div class="invalid-feedback">
                        	{{ $errors->first('annual_income') }}
                    	</div>
                	@endif
                	<span class="help-block">{{ trans('cruds.studentDetail.fields.annual_income_helper') }}</span>
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