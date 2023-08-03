@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.scholarshipProvider.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.scholarship-providers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="organization_name">{{ trans('cruds.scholarshipProvider.fields.organization_name') }}</label>
                <input class="form-control {{ $errors->has('organization_name') ? 'is-invalid' : '' }}" type="text" name="organization_name" id="organization_name" value="{{ old('organization_name', '') }}" required>
                @if($errors->has('organization_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organization_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipProvider.fields.organization_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_person">{{ trans('cruds.scholarshipProvider.fields.contact_person') }}</label>
                <input class="form-control {{ $errors->has('contact_person') ? 'is-invalid' : '' }}" type="text" name="contact_person" id="contact_person" value="{{ old('contact_person', '') }}" required>
                @if($errors->has('contact_person'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_person') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipProvider.fields.contact_person_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation">{{ trans('cruds.scholarshipProvider.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', '') }}">
                @if($errors->has('designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipProvider.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.scholarshipProvider.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.scholarshipProvider.fields.email_helper') }}</span>
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