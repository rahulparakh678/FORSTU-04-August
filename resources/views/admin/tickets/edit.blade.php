@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.ticket.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tickets.update", [$ticket->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="categoryid_id">{{ trans('cruds.ticket.fields.categoryid') }}</label>
                <select class="form-control select2 {{ $errors->has('categoryid') ? 'is-invalid' : '' }}" name="categoryid_id" id="categoryid_id" required>
                    @foreach($categoryids as $id => $categoryid)
                        <option value="{{ $id }}" {{ ($ticket->categoryid ? $ticket->categoryid->id : old('categoryid_id')) == $id ? 'selected' : '' }}>{{ $categoryid }}</option>
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
                <textarea class="form-control {{ $errors->has('query') ? 'is-invalid' : '' }}" name="query" id="query" required>{{ old('query', $ticket->query) }}</textarea>
                @if($errors->has('query'))
                    <div class="invalid-feedback">
                        {{ $errors->first('query') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ticket.fields.query_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.ticket.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Ticket::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $ticket->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ticket.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="response">{{ trans('cruds.ticket.fields.response') }}</label>
                <textarea class="form-control {{ $errors->has('response') ? 'is-invalid' : '' }}" name="response" id="response">{{ old('response', $ticket->response) }}</textarea>
                @if($errors->has('response'))
                    <div class="invalid-feedback">
                        {{ $errors->first('response') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ticket.fields.response_helper') }}</span>
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