@extends('layouts.student')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ticket.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('support') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ticket.fields.id') }}
                        </th>
                        <td>
                            {{ $ticket->id }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.ticket.fields.categoryid') }}
                        </th>
                        <td>
                            {{ $ticket->categoryid->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ticket.fields.query') }}
                        </th>
                        <td>
                            {{ $ticket->query }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.ticket.fields.response') }}
                        </th>
                        <td>
                            {{ $ticket->response }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('support') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection