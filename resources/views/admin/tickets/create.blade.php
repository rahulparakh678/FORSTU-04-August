@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.ticket.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tickets.store") }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="userid" value="{{auth()->user()->id}}">
            <input type="hidden" name="status" value="Open">
            <div class="form-group">
                <label class="required" for="categoryid_id">{{ trans('cruds.ticket.fields.categoryid') }}</label>
                <select class="form-control select2 {{ $errors->has('categoryid') ? 'is-invalid' : '' }}" name="categoryid_id" id="categoryid_id" required>
                    @foreach($categoryids as $id => $categoryid)
                        <option value="{{ $id }}" {{ old('categoryid_id') == $id ? 'selected' : '' }}>{{ $categoryid }}</option>
                    @endforeach
                </select>
                @if($errors->has('categoryid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categoryid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ticket.fields.categoryid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="query">{{ trans('cruds.ticket.fields.query') }}</label>
                <textarea class="form-control {{ $errors->has('query') ? 'is-invalid' : '' }}" name="query" id="query" required>{{ old('query') }}</textarea>
                @if($errors->has('query'))
                    <div class="invalid-feedback">
                        {{ $errors->first('query') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ticket.fields.query_helper') }}</span>
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