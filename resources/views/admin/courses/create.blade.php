@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.course.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.courses.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="course_name">{{ trans('cruds.course.fields.course_name') }}</label>
                <input class="form-control {{ $errors->has('course_name') ? 'is-invalid' : '' }}" type="text" name="course_name" id="course_name" value="{{ old('course_name', '') }}" required>
                @if($errors->has('course_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_duration">{{ trans('cruds.course.fields.course_duration') }}</label>
                <input class="form-control {{ $errors->has('course_duration') ? 'is-invalid' : '' }}" type="number" name="course_duration" id="course_duration" value="{{ old('course_duration', '') }}" step="1" required>
                @if($errors->has('course_duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="course_type_id">{{ trans('cruds.course.fields.course_type') }}</label>
                <select class="form-control select2 {{ $errors->has('course_type') ? 'is-invalid' : '' }}" name="course_type_id" id="course_type_id" required>
                    @foreach($course_types as $id => $course_type)
                        <option value="{{ $id }}" {{ old('course_type_id') == $id ? 'selected' : '' }}>{{ $course_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('course_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.course.fields.course_type_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection