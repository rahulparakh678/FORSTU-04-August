@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ticket.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tickets.index') }}">
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
                            {{ trans('cruds.ticket.fields.userid') }}
                        </th>
                        <td>
                            {{ $ticket->userid }}
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
                            {{ trans('cruds.ticket.fields.status') }}
                        </th>
                        <td>
                            {{ App\Ticket::STATUS_SELECT[$ticket->status] ?? '' }}
                        </td>
                    </tr>
                    @if(!empty($ticket->photo))
                    <tr>
                        <th>
                            Attachemnts
                        </th>
                        <td>
                            <img src="{{asset($ticket->photo)}}" style="width: 50px; height: 50px;">
                            <a href="{{$ticket->photo}}" target="_blank">View File </a>
                            
                        </td>
                    </tr>
                    @endif
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
                <a class="btn btn-default" href="{{ route('admin.tickets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection