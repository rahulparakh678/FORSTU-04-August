@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.caste.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.castes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="caste_name">{{ trans('cruds.caste.fields.caste_name') }}</label>
                <input class="form-control {{ $errors->has('caste_name') ? 'is-invalid' : '' }}" type="text" name="caste_name" id="caste_name" value="{{ old('caste_name', '') }}" required>
                @if($errors->has('caste_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('caste_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.caste.fields.caste_name_helper') }}</span>
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