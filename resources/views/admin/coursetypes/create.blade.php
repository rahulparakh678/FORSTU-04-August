@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.coursetype.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.coursetypes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="course_type_name">{{ trans('cruds.coursetype.fields.course_type_name') }}</label>
                <input class="form-control {{ $errors->has('course_type_name') ? 'is-invalid' : '' }}" type="text" name="course_type_name" id="course_type_name" value="{{ old('course_type_name', '') }}">
                @if($errors->has('course_type_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('course_type_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coursetype.fields.course_type_name_helper') }}</span>
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